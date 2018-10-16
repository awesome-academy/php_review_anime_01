<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome()
    {
    	return view('home');
    }

    public function showAnime()
    {
    	return view('anime');
    }

    public function showVideo()
    {
    	return view('video');
    }

    public function showNews()
    {
    	return view('news');
    }

    public function showContact()
    {
    	return view('contact');
    }

    public function showDetails()
    {
    	return view('details');
    }

    public function showNew_Details()
    {
    	return view('new_details');
    }
}
