<?php

namespace App\Livewire\Frontend\NewsSections;

use App\Models\Advertisment;
use App\Models\NewsPost;
use Livewire\Component;

class LatestNews extends Component
{

    public $languageVal;
    public function mount(){ 
          $this->languageVal = session()->get('language');
    
    }


    public function render()
    {
        $latestHinNewsData =    NewsPost::with('getmenu', 'newstype' )
        ->where('status', 'Approved')
        ->whereNull('deleted_at')
        ->where(function ($query) {
            $query->whereIn('breaking_side', ['Show']);
        })
        ->take(6) // Limit the number of results to 6
        ->orderBy('created_at', 'desc');
                switch ($this->languageVal) {
                    case 'hindi':
                        $latestHinNewsData->where('news_type', 1);
                        break;
                
                    case 'english':
                        $latestHinNewsData->where('news_type', 2);
                        break;
                
                    case 'punjabi':
                        $latestHinNewsData->where('news_type', 3);
                        break;
                
                    case 'urdu':
                        $latestHinNewsData->where('news_type', 4);
                        break;
                
                    default:
                    $latestHinNewsData->where('news_type', 1);
                        // Handle the default case if needed
                }
    
            $latestHinNewsData = $latestHinNewsData->get();

            $today = now()->toDateString();
            $latestRightAds = Advertisment::where('from_date', '<=', $today)
                                ->where('to_date', '>=', $today)
                                ->where('location','Left Add')
                                ->where('page_name' ,'Homepage')
                                ->where('status', 'Yes') // Assuming 'status' is used to enable/disable ads
                                ->orderBy('created_at', 'desc')
                                ->first();
                                          
        return view('livewire.frontend.news-sections.latest-news' ,[
                'latestHinNewsData' =>$latestHinNewsData,
                'latestRightAds' =>$latestRightAds,
    ]);
    }
}
