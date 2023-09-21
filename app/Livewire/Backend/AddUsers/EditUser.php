<?php

namespace App\Livewire\Backend\AddUsers;

use App\Models\AssigneMenu;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use App\Models\WebsiteType;
use Google\Service\ServiceControl\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUser extends Component
{  
    use WithFileUploads;
    use LivewireAlert;
    public $name;
    public $role_id;
    public $username;
    public $email;
  
    public $password;
    public $password_confirmation;
    public $name_hin;
    public $name_pbi;
    public $name_urdu;
    public $menus =[];

    public $about;
    public $mobile;
    public $city;
    public $state;
    public $country;
    public $address;
    public $email_verified_at;
    public $current_team_id;
    public $profile_photo_path;
    public $status;
    public $userId;
    public $assigne_menu;
    public $edit_profile_photo_path;
    public $website_type_id ;

    public function mount(User $userid){

        $this->userId =  $userid->id;
        $this->assigne_menu =      AssigneMenu::where('user_id' ,$this->userId)->get();
        foreach ($this->assigne_menu as $menu) {
            $this->menus[$menu->category_id] = true; 
        }
        // // Check if $menusData is an array before assigning it
        $this->name =  $userid->name;
        $this->website_type_id =  $userid->website_type_id;
        $this->role_id =  $userid->role_id ;
        $this->username = $userid->username ;
        $this->email = $userid->email ;
        // $this->password = $userid->password ;
        $this->name_hin = $userid->name_hin ;
        $this->name_pbi = $userid->name_pbi ;
        $this->name_urdu = $userid->name_urdu ;
 
        $this->about = $userid->about ;
        $this->mobile = $userid->mobile ;
        // $this->city = $userid->city ;
        // $this->state = $userid->state ;
        // $this->country = $userid->country ;
        $this->address = $userid->address ;
        $this->profile_photo_path = $userid->profile_photo_path ;
        $this->status = $userid->status ;
    }
    public function render()
    {
        $getRoles =  Role::get();
        $getCategory=  Category::where('status' ,'Active')->get();
        $getwebsite_type =  WebsiteType::where('status' ,'Active')->get();

        return view('livewire.backend.add-users.edit-user' ,['getwebsite_type'  => $getwebsite_type ,'getCategory' => $getCategory,'getRoles' => $getRoles]);
    }

    public function updateUsers(){
        if($this->password){
                $validateData = $this->validate([
                    'old_pass'=> 'required',
                    'password' => 'required|confirmed'
                
                ]);
            }
            if(!is_null($this->edit_profile_photo_path)){
                $fileName = time().'_'.$this->edit_profile_photo_path->getClientOriginalName();
            
                $filePath = $this->edit_profile_photo_path->storeAs('uploads', $fileName, 'public');
          
                $profile = User::find($this->userId );
                $profile->name = $this->name; 
                $profile->website_type_id = $this->website_type_id; 

                $profile->role_id = $this->role_id ;
                $profile->username = $this->username;
                $profile->email = $this->email;
                // $createuser->password =  Hash::make($this->password);
                $profile->name_hin = $this->name_hin;
                $profile->name_pbi = $this->name_pbi;
                $profile->name_urdu = $this->name_urdu;
                $profile->about = $this->about;
                $profile->mobile = $this->mobile;
                $profile->address = $this->address;
                $profile->profile_photo_path =  $filePath ?? Null;
                $profile->status = $this->status;
                $profile->save();
            }else{

            $updateuser = User::find($this->userId );
            $updateuser->name = $this->name; 
            $updateuser->website_type_id = $this->website_type_id; 
            $updateuser->role_id = $this->role_id ;
            $updateuser->username = $this->username;
            $updateuser->email = $this->email;
            // $createuser->password =  Hash::make($this->password);
            $updateuser->name_hin = $this->name_hin;
            $updateuser->name_pbi = $this->name_pbi;
            $updateuser->name_urdu = $this->name_urdu;
            $updateuser->about = $this->about;
            $updateuser->mobile = $this->mobile;
            $updateuser->address = $this->address;
            $updateuser->status = $this->status;
            $updateuser->save();
        }

            $assignments = [];
            AssigneMenu::where('user_id' ,$this->userId)->delete();

            foreach ($this->menus as $key => $value) {
                if ($value === true) {
                    $assignments[] = [
                        'user_id' => $this->userId ,
                        'role_id' => $this->role_id,
                        'category_id' => $key,
                    ];
                }
            }
            //  dd($assignments);
    
            AssigneMenu::insert($assignments);
            $this->alert('success', 'User Created successfully!');
            return redirect()->route('create_user');
    }
}
