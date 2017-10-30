<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Portfolio;

class PortfolioEditController extends Controller
{
  public function execute(Portfolio $portfolio, Request $request) {

    //ydalenie Portfolio
    if ($request->isMethod('delete')) {
      $portfolio->delete();
      return redirect('admin')->with('status', 'Portfolio delete');
    }

    //poly4enie s table
    if ($request->isMethod('post')) {
      $input = $request->except('_token');

      //proverka
      $validator = Validator::make($input, [
        'name'=>'required|max:255',
        'filter'=>'required|max:255',
        'images'=>'required'
      ]);

      if ($validator->fails()) {
        return redirect()->route('portfolioEdit', ['portf'=>$portfolio['id']])->withErrors($validator);
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
      $portfolio->fill($input);
      if ($portfolio->update()) {
        return redirect('admin')->with('status', 'Portfolio обнавленo');
      }
    }


    //polu4enie starux dannux
    $old = $portfolio->toArray();
    if (view()->exists('admin.portfolio_edit')) {
      $data = [
        'title'=>'Редактирование портфолио - '.$old['name'],
        'data'=>$old
      ];

      return view('admin.portfolio_edit', $data);
    }
  }
}
