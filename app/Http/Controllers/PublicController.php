<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('guest.welcome');
    }
    public function indexR()
    {
        return view('guest.races');
    }
    public function indexH()
    {
        return view('guest.human');
    }
    public function indexD()
    {
        return view('guest.dwarf');
    }
    public function indexE()
    {
        return view('guest.elf');
    }
    public function indexG()
    {
        return view('guest.gnome');
    }
}
