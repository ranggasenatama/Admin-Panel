<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('pages.admin.anggota.index');
    }

    public function showAnggota()
    {
    	return view('pages.admin.anggota.index');
    }

    public function showDonatur()
    {
    	return view('pages.admin.donatur.index');
    }

    public function timeline()
    {
        return view('pages.admin.timeline');
    }
    public function blog()
    {
        return view('pages.admin.blog.show');
    }
     public function createBlog()
    {
        return view('pages.admin.blog.create');
    }
    public function editBlog()

    {
        return view('pages.admin.blog.edit');

    }
    public function keuangan()
    {
        return view('pages.admin.keuangan');
    }

    public function chat()
    {
        return view('pages.admin.chat');
    }
    public function showposting()
    {
        return view('pages.admin.posting.index');
    }
}
