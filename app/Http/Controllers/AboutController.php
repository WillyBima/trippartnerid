<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Comment;

class AboutController extends Controller
{
    public function about()
    {
      return view('frontend.about.aboutus');
    }

    public function kontak()
    {
      return view ('frontend.about.kontak');
    }

    public function submitKritik(Request $request)
    {
      $rules = [
        'nama'       => 'required',
        'email'      => 'required|unique:comment|filled',
        'subject'    => 'required',
        'keterangan' => 'required',
      ];

      $message = [
        'required' => 'data tidak boleh kosong',
        'unique'   => 'data sudah ada didalam database',
      ];

      $this->validate($request,$rules,$message);

      $comment = new Comment();
      $comment->nama = $request['nama'];
      $comment->email = $request['email'];
      $comment->subject = $request['subject'];
      $comment->keterangan = $request['keterangan'];

      $comment->save();
      return redirect('/');
    }

}
