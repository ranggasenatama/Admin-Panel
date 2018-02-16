<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
class AnggotaController extends Controller
{
    public function index()
    {
    	return view('anggota.anggota_home');
    }
    public function timeline()
    {
    	//return view('pages.anggota.index');
    	return view('pages.anggota.timeline');
    }

    public function blog()
    {
    	return view('pages.anggota.blog');
    }

    public function keuangan()
    {
    	return view('pages.anggota.keuangan');
    }

    public function chat()
    {
    	return view('pages.anggota.chat');
    }

    public function savebiouser(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'nmanggota' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'ktp' => 'required|numeric', 
            'alamat' => 'required|max:255',
            'nohp' => 'required|numeric', 
            'line' => 'required|max:255',
        ]);
        if($validator->fails()) {
            //echo $r;
            //return "eror";
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }
        else
        {
            $usr=new User();
            $usr->nama=$r->nmanggota;
            $usr->email=$r->email;
            $usr->ktp=$r->ktp;
            $usr->alamat=$r->alamat;
            $usr->no_hp=$r->nohp;
            $usr->line=$r->line;
            $usr->role="Anggota";
            $usr->status=1;
            $usr->password=bcrypt($r->password);
            $usr->save();
            if ( Auth::attempt(['email' => $usr->email, 'password' => $r->password]) ) 
            {
                return redirect('/anggota');
            }
        }
        //return $r;
    }
    public function login(Request $r)
    {
        if ( Auth::attempt(['email' => $r->email, 'password' => $r->password]) ) 
        {
            if(Auth::user()->role=="Anggota")
            {
                return redirect('/anggota');
            }
            elseif(Auth::user()->role=="Admin")
            {
                return redirect('/admin/anggota');
            }
            elseif(Auth::user()->role=="Donatur")
            {
                return redirect('/donatur');
            }
        }
        else
        {
            return "email atau password salah";
        }
    }
}
