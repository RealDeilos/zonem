<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{

    public function store(Request $request){
            $validated=$this->validate($request,
                [
                    'name'=>['required','min:1'],
                    'description'=>['required','min:1'],
                    'mail'=>['required','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
                ]
        );
        Mail::to('eminniti@gmail.com')->send(new SendMail($validated));
        DB::table('mails')->insert($validated);
        return $validated;

    }
}
