<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request  $req){
        $name = $req->input("name");
        $address = $req->input("address");
        $phone = $req->input("phone");
        $email = $req->input("email");
        $profile = $req->file("profile");
        $path = $profile->store("public");
        $path = str_replace("public", "/storage", $path);

        return view("showdata", ["name" => $name, "address" => $address, "phone" => $phone, "email" => $email, "path" => $path]);
    }
}
