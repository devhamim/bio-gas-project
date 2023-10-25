<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\achieve;
use App\Models\blog;
use App\Models\client;
use App\Models\customerSay;
use App\Models\gallery;
use App\Models\service;
use App\Models\setting;
use App\Models\team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home
    function home(){
        $abouts = about::where('status', 1)->where('define', 1)->get();
        $services = service::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $gallerys = gallery::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $achieves = achieve::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        $settings = setting::all();
        return view('frontend.home',[
            'abouts'=>$abouts,
            'services'=>$services,
            'teams'=>$teams,
            'settings'=>$settings,
            'gallerys'=>$gallerys,
            'clients'=>$clients,
            'achieves'=>$achieves,
            'customerSays'=>$customerSays,
            'blogs'=>$blogs,
        ]);
    }
    
    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->where('define', 2)->get();
        $services = service::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        return view('frontend.about', [
            'abouts'=>$abouts,
            'services'=>$services,
            'clients'=>$clients,
            'teams'=>$teams,
        ]);
    }
    //services
    function services(){
        $services = service::where('status', 1)->get();
        return view('frontend.services', [
            'services'=>$services,
        ]);
    }
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    } 
    //our_blog
    function our_blog(){
        return view('frontend.blog');
    }
    //contect
    function contect(){
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }
    //gallerys
    function gallerys(){
        return view('frontend.gallery');
    }
    //our_team
    function our_team(){
        return view('frontend.team');
    } 
    //our_team
    function our_clients(){
        return view('frontend.client');
    }

}
