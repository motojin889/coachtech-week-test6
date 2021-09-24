<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appcontroller extends Controller
{
    public function index(){
        return '建物です';
    }
    public function room($room = 'デフォルト'){
        return; $room;
    }
}
