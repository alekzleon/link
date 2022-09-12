<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Generator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UrlController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function url(){
        $urls = Link::where('user_id','=',Auth::user()->id)->get();
        return view ('url.index')->with('urls', $urls);
    }

    public function setUrl(Request $request){
        $link = new Link();
        $link->user_id = Auth::user()->id;
        $link->url = $request->url;
        $link->name = $request->name;
        $link->icon = $request->logo;
        $link->active = ($request->active === 'on') ? 1 : 2 ;
        $link->clicks = 0;
        $link->save();
        return back();
    }

    public function deleteUrl($id){
        Link::where('id','=',$id)->delete();
        return back();
    }

    public function downloadqr($url){
        
    }


}
