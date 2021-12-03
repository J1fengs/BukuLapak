<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB; 
use App\Models\CriticsandSuggestions;

class CriticsandSuggestionsController extends Controller
{

    function index()
    {
        $data = CriticsandSuggestions::all();
        return view('criticsandsuggestions', ['critics' => $data]);
    }
    function add(Request $req)
    {


        $crit = DB::table('criticsandsuggestions')->insert([
            'title'=>$req->input('title'),
            'contents'=>$req->input('contents')
        ]);
        if($crit)
        {
            return redirect('criticsandsuggestions');
        }
        else
        {
            return alert('Something went wrong');
        }
    }
}
