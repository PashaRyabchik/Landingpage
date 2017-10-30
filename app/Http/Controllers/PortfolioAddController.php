<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfolioAddController extends Controller
{
    public function execute(Request $request){
      //add Portfolio
      if ($request->isMethod('post')) {
        $input = $request->except('_token');

        //proverka polei
        $message = [
          'required'=>'Поле :attribute обязательно к заполнению!'
        ];

        $validator = Validator::make($input, [
          'name'=>'required|max:255',
          'filter'=>'required'
        ], $message);

        if ($validator->fails()) {
          return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
        }

        //save image
        if ($request->hasFile('images')) {
          $file = $request->file('images');
          $input['images'] = $file->getClientOriginalName();

          $file->move(public_path().'/assets/img', $input['images']);
        }

        //zapolnenie tablisi
        $portf = new Portfolio();
        $portf->fill($input);

        if ($portf->save()) {
          return redirect('admin')->with('status','Portfolio добавленo');
        }
      }


    if (view('admin.portfolios_add')) {
      $data = [
        'title'=>'Новый портфолио',
      ];
      return view('admin.portfolios_add', $data);
    }
  }
}
