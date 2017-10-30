<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use Mail;

class IndexController extends Controller
{
    public function execute(Request $request) {

      //forma
      if ($request->isMethod('post')) {
        //pravila proverki
        $messages = [
          'required' => "Поле :attribute обязательно к заполнению",
          'email' => "Поле :attribute должно соответствовать email адресу"
        ];
        //proverka
        $this->validate($request, [
          'name' => 'required|max:255',
          'email' => 'required|email',
          'text' => 'required'
        ], $messages);

        $data = $request->all();
        //otpravka na email
          $result =  Mail::send('site.email',['data'=>$data], function($message) use ($data){
            $mail_admin = env('MAIL_ADMIN');
            $message->from($data['email'], $data['name']);
            $message->to($mail_admin, 'Mr. Admin')->subject('Question');
        });
        if ($result) {
          return redirect()->route('home')->with('status', 'Email is send');
        }
      }



      //C bazu dannux
      $pages = Page::all();
      $portfolios = Portfolio::get(array('name', 'filter', 'images'));
      $services = Service::where('id','<',20)->get();
      $peoples = People::take(3)->get();


      return view('site.index', array(
          'pages'=> $pages,
          'services'=> $services,
          'portfolios'=> $portfolios,
          'peoples'=> $peoples
      ));
    }
}
