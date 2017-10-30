<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class PagesEditController extends Controller
{
    public function execute(Page $page, Request $request) {

      //ydalenie stranisi
      if ($request->isMethod('delete')) {
        $page->delete();
        return redirect('admin')->with('status', 'Страница удалена');
      }

      //poly4enie s table
      if ($request->isMethod('post')) {
        $input = $request->except('_token');

        //proverka
        $validator = Validator::make($input, [
          'name'=>'required|max:255',
          'alias'=>'required|max:255',
          'text'=>'required'
        ]);

        if ($validator->fails()) {
          return redirect()->route('pagesEdit', ['page'=>$page['id']])->withErrors($validator);
        }

        //save image
        if ($request->hasFile('images')) {
          $file = $request->file('images');

          $file->move(public_path().'/assets/img', $file->getClientOriginalName());

          $input['images'] = $file->getClientOriginalName();
        }
        else {
          $input['images'] = $input['old_images'];
        }
        unset($input['old_images']);

        //zapolnenie modeli novum materialom
        $page->fill($input);
        if ($page->update()) {
          return redirect('admin')->with('status', 'Страница обнавлена');
        }
      }

      //polu4enie starux dannux
      $old = $page->toArray();
      if (view()->exists('admin.pages_edit')) {
        $data = [
          'title'=>'Редактирование страницы -'.$old['name'],
          'data'=>$old
        ];
      return view('admin.pages_edit', $data);
      }
    }
}
