<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function uploadImage(Request $request){
        $dir = Auth::user()->email. '/';
        $img = $request->file('image');
        $name_image = 'profile'.(Auth::user()->email).".".$img->guessExtension();
        $storage_path = public_path('img/'.$dir);
        $img->move($storage_path,$name_image);
        User::where('id','=',Auth::user()->id)->update(['img_profile' => $name_image]);
        return back();
    }

    public function changeColor(Request $request){
        User::where('id','=', Auth::user()->id)->update(['color' => $request->color]);
        return back();
    }

    public function changeAvatar(Request $request){
        $dir = Auth::user()->email. '/';
        $img = $request->file('image');
        $name_image = 'avatar'.(Auth::user()->email).".".$img->guessExtension();
        $storage_path = public_path('img/'.$dir);
        $img->move($storage_path,$name_image);
        User::where('id','=',Auth::user()->id)->update(['avatar' => $name_image]);
        return back();
    }
}
