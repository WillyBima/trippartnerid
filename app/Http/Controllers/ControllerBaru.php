<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBaru extends Controller
{
  public function newberanda()
  {
    return view('newfrontend.beranda');
  }

  public function newabout()
  {
    return view('newfrontend.about');
  }

  public function galeri()
  {
    return view('newfrontend.galeri');
  }

  public function kontak()
  {
    return view('newfrontend.kontak');
  }

  public function booking()
  {
    return view('newfrontend.book.booking');
  }

  public function hasil()
  {
    return view('newfrontend.book.hasil');
  }

  public function detailarmada()
  {
    return view('newfrontend.book.detailarmada');
  }
}
