<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119113,
            'name'=>'Verda',
            'phone'=>'081391480917',
            'class'=>'XII RPL 4'
        ];
    }
}