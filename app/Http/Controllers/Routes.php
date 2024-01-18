<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routes extends Controller
{
    public function Home() {
        return view('home');
    }
    public function About() {
        return view('about');
    }
    public function Adopsi() {
        return view('adopsi');
    }
    public function Aksesoris() {
        return view('aksesoris');
    }

    public function tagihan() {
        return view('tagihan');
    }

    public function galeri() {
        return view('galeri');
    }

    public function Contact() {
        return view('hubungi');
    }
}
