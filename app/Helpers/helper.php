<?php

use App\Models\Category;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


function authUserId(){
    return Auth::id();
 }
 function getMenuName($id){
    $menuName = Category::where('id', $id)->first();
    return $menuName->category_en;
}


function getRoleName($id){
    $role = Role::where('id', $id)->first();
    return $role->name;
}

function getEditorId(){
    $editorId = User::where('role_id', 2)->first();
    return $editorId->id;
}


function createSlug($val)
{
    // $slug = preg_replace('/[\s.]+/', '-', $val);
    //for  space slash 
    $slug = preg_replace('/[\s.\/]+/', '-', $val);
    // Convert to lowercase
    $slug = strtolower($slug);
    return $slug;
}


function md5createSlug($val)
{
    // $slug = preg_replace('/[\s.]+/', '-', $val);
    //for  space slash 
    $slug = preg_replace('/[\s.\/]+/', '-', $val);
    // Convert to lowercase
    $slug = strtolower($slug);

    // Create an MD5 hash
    $md5Hash = md5($slug);

    return $md5Hash;
}

function getThumbnail($value) {
    if (str_starts_with($value, 'http')) {
        return $value;
    }
    return asset('uploads/thumbnail/'.$value);
}


function getUserIp()
{
    return !empty(request()->server('HTTP_CF_CONNECTING_IP')) ? request()->server('HTTP_CF_CONNECTING_IP') : request()->getClientIp();
}


function getGallerydetail($image)
{
    if (str_starts_with($image, 'http')) {
        return $image;
    }

    return   asset('storage/uploads/gallery/'.$image);
}
  


function getAddImage($image)
{
 
    return   asset('storage/mainAdd/'.$image);
}
  
function get_pdf($pdf)
{
 
    return   asset('storage/pdf_files/'.$pdf);
}
  


function getNewsImage($image)
{
 
    return   asset('storage/news_gallery/'.$image);
}


function get_video_image($image)
{
 
    return   asset('storage/video/'.$image);
}


function get_user_profile($profile)
{
 
    return   asset('storage/'.$profile);
}

