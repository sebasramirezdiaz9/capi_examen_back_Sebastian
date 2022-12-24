<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::query()->get();

        $users = $users->map(function($q){
            $q->append('age','address_format');
            return $q;
        });

        return $users->toArray();
    }
}
