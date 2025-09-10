<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function sobre()
    {
        return view('pages.sobre');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function cadastro() // Método adicionado
    {
        return view('pages.cadastro');
    }
}