<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Mail;

class ContactController extends Controller
{
    
    public function send(Request $req){
        
        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $text = $req->input('message');
        $title = 'Aaron Portfolio Mail';

        $data['name'] = $name;
        $data['email'] = $email;
        $data['subject'] = $subject;
        $data['text'] = $text;
        $data['title'] = $title;

        Mail::send('emails.email', $data, function($message) {
            $message->to('jfluke1414@gmail.com', 'Aaron(Hyunjin Yeo)')->subject('From Aaron Portfolio page');
        });

        if (Mail::failures()) {
//             return response()->Fail('Sorry! Please try again.');
            echo "Failed";
        } else {
//             return response()->success('Great! Successfully sended this E-mail to Aaron');
            echo "Sent";
        }

//         return $req->input();

//         $post = DB::insert('query');

//         if($post){
//             $req = redirect('post')->with('success', "It has been updated");
//         } else {
//             $req = redirect('post/create')->with('dnager', 'input date failed');
//         }

    }
}
