<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Labrosan;
use Illuminate\Http\Request;

class LabrosanController extends Controller
{
    public function edit(){
        $data['labrosan']=Labrosan::first();
        return view('admin.labrosan.edit',$data);

    }

    public function update(Request $request){

        $saponello=Labrosan::first();

        $saponello->title=['ar'=>$request->title_ar,'en'=>$request->title_en];
        $saponello->sub_title=['ar'=>$request->sub_title_ar,'en'=>$request->sub_title_en];
        $saponello->description=['ar'=>$request->description_ar,'en'=>$request->description_en];
        $saponello->save();
        toastr()->success('تم تنفيذ العملية بنجاح', 'نجاح العملية');
        return redirect()->back();

    }

}
