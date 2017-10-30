<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Service;

class ServiceAddController extends Controller
{
    public function execute(Request $request){
      if ($request->isMethod('post')) {
        $input = $request->except('_token');

        //proverka polei
        $message = ['required'=>'Поле :attribute обязательно к заполнению!'];
        $validator = Validator::make($input, [
          'name'=>'required|max:255',
          'text'=>'required',
          'icon'=>'required'
        ], $message);

        if ($validator->fails()) {
          return redirect()->route('serviceAdd')->withErrors($validator)->withInput();
        }

        //zapolnenie
        $service = new Service();
        $service->fill($input);

        if ($service->save()) {
          return redirect('admin')->with('status', 'Service добавлен');
        }
      }


      if (view('admin.service_add')) {
        $data = ['title'=>'Новый сервис'];
        return view('admin.service_add', $data);
      }
    }
}
