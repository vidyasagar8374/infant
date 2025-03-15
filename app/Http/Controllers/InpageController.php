<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Banner;
use App\Models\ContactList;
use App\Models\YoutubePost;
use App\Models\Parishprist;

use DB;



class InpageController extends Controller
{
    //inpage controller
    // add changes
    //git changes
    // git changes updated
    public function home(){
        //post,banners,prists,user
        $posts = Post::where('is_active',1)->orderBy('date', 'asc')->get();
        $banners = Banner::where('is_active',1)->orderBy('id', 'asc')->get();
        $parishlists = Parishprist::whereIn('is_present', [1, 2, 3,4])
        ->orderBy('is_present', 'asc')
        ->get();
    
        return view('welcome',compact('posts','banners','parishlists'));

    }
    public function contact(){
        return view('basefile.contact');
    }
    public function about(){
        $parishlists = Parishprist::where('is_present', 0)
        ->orderBy(DB::raw('YEAR(end_year)'), 'desc')
        ->get();
        // dd($parishlists);
        return view('basefile.about',compact('parishlists'));
    }
    public function gallery(){
        return view('basefile.gallery');
    }

    public function telecast(){
        // Select all columns from the YouTubePost table along with year and month
        $listdata = YoutubePost::select('youtube_posts.*', DB::raw('YEAR(date) as year'), DB::raw('MONTH(date) as month'))
        ->orderBy(DB::raw('YEAR(date)'), 'desc')
        ->orderBy(DB::raw('MONTH(date)'), 'desc')
        ->get();
        // dd($listdata);
         // Group the data by year and month for easier display in the view
         $groupedData = [];
 
         foreach ($listdata as $data) {
         $groupedData[$data->year][$data->month][] = $data; // Store full row data in array
         }
        //  dd($groupedData);
         // dd($groupedData);
         return view('basefile.youtube', compact('groupedData'));
 }

 public function savecontact(Request $request){
    // dd($request);
        $contactlist = new ContactList;
        $contactlist->name = $request->name;
        $contactlist->email = $request->email;
        $contactlist->mobile = $request->mobile;
        $contactlist->message = $request->message;
        $contactlist->save();
        if($contactlist){
            return redirect()->back()->with('success', 'Your request has been sent successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong');
        }

 }

}
