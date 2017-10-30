<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Service;

class ServiceEditController extends Controller
{
    public function execute(Service $service, Request $request){

      //ydalenie
      if ($request->isMethod('delete')) {
        $service->delete();
        return redirect('admin')->with('status', 'Service delete');
      }

      //poly4enie s table
      if ($request->isMethod('post')) {
        $input = $request->except('_token');

        //proverka
        $validator = Validator::make($input, [
          'name'=>'required|max:255',
          'text'=>'required',
          'icon'=>'required'
        ]);

        if ($validator->fails()) {
          return redirect()->route('serviceEdit', ['service'=>$service['id']])->withErrors($validator);
        }

        //zapolnenie modeli novum materialom
        $service->fill($input);
        if ($service->update()) {
          return redirect('admin')->with('status', 'Service обнавленo');
        }
      }

      //polu4enie starux dannux
      $old = $service->toArray();
      if (view()->exists('admin.service_edit')) {
        $data = [
          'title'=>'Редактор сервиса -'.$old['name'],
          'data'=>$old
        ];

        return view('admin.service_edit', $data);
      }
    }
}
