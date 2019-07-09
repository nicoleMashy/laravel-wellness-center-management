<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAbout(){
        return view("pages.about");
    }
    public function getContact_us(){
        return view("pages.contact-us");
    }
    public function Patience_and_vistors(){
        return view ("pages.patience-and-vistors");
    }
    public function Tabheras(){
        return view ("pages.tabheras");
    }

    public function Jorodhani(){
        return view ("pages.jorodhani");
    }
    public function Zcc_community(){
        return view ("pages.zcc-community");
    }
}
