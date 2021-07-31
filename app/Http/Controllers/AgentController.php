<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgentController extends Controller
{
    public function show() {
        $user = auth()->user();

        $query = DB::table('nivel_de_acesso')->join('users', 'users.nivel_id', '=', 'nivel_de_acesso.id')
        ->where('users.id', $user->id)->get();
        
        $nivel = $query[0]->nivel;

        return view('dashboard', ['user' => $user, 'nivel' => $nivel]);
    }
}
