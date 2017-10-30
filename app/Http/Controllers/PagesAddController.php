<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Page;

class PagesAddController extends Controller
{
    public function execute(Request $request) {

      //add page
      if ($request->isMethod('post')) {
        $input = $request->except('_token');

        //proverka polei
        $messages = [
          'required'=>'Поле :attribute обязательно к заполнению!',
          'unique'=>'Поле :attribute  должно бить уникальным!'
        ];

        $validator = Validator::make($input, [
          'name' => 'required|max:255',
          'alias' => 'required|unique:pages|max:255',
          'text' => 'required'
        ], $messages);

        if ($validator->fails()) {
          return redirect()->route('pagesAdd')->withErrors($validator)->withInput();
        }

        //save image
        if ($request->hasFile('images')) {
          $file = $request->file('images');
          $input['images'] = $file->getClientOriginalName();

          $file->move(public_path().'/assets/img', $input['images']);
        }

        //zapolnenie tablisu
        $page = new Page();
        $page->fill($input);

        if ($page->save()) {
          return redirect('admin')->with('status', 'Страница добавлена');
        }
      }


      if (view()->exists('admin.pages_add')) {
          $data = [
            'title'=>'Новая cтраница'
          ];
        return view('admin.pages_add', $data);
      }
      abort(404);
    }
}
