<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class VoterController extends Controller

{
    public function register(Request $data){
        (new User)->registerVoter($data->name,$data->email,$data->password,$data->regno);
        return redirect()->route('admin.index');
    }
    
    public function test(){
        var_dump(Hash::make("123456"));
    }
}
