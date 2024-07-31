<?php
namespace App\Http\Controllers;


class WebsiteController extends controller{
    public function GetMyWebsiteData(){
        return view('welcome');
    }
}
