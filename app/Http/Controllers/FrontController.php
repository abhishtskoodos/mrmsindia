<?php

namespace App\Http\Controllers;
use App\Models\{Category,Event,Celebrity,Guest,Modal};

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data['categories'] = Category::get();
        $data['events'] = Event::get();
        $data['celebritys'] = Celebrity::get();
        $data['guests'] = Guest::get();
        $data['modals'] = Modal::get();
        
        return view('frontend.home',$data);
    }

    public function about(){
        return view('frontend.about-us');
    }

    public function contact(){
        return view('frontend.contact-us');
    }

    public function show(){
        return view('frontend.show');
    }

    public function sponsers(){
        return view('frontend.sponsers');
    }

    public function models(){
        return view('frontend.models');
    }

}
