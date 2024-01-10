<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testModel;

class testController extends Controller
{
    public function index()
    {
        $datas=testModel::get();
        return view('data.list',compact('datas'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $data=new testModel();
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
       return redirect('/data')->with('success', "DATA CREATED SUCCESSFULLY!");
    }
    public function edit(Request $request)
    {
        $data=testModel::where('id',$request->id)->get()->first();
        return view('data.edit',compact('request','data'));
    }

    public function update(Request $request)
    {
        $data=testModel::where('id',$request->id)->get()->first();
        
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
       return redirect('/data')->with('success', "DATA UPDATED SUCCESSFULLY!");
    }

    public function delete(Request $request)
    {
        $data=testModel::where('id',$request->id)->get()->first();
        $data->delete();
       return redirect('/data')->with('success', "DATA DELETED SUCCESSFULLY!");
    }
    
    public function activate()
    {
        $datas=testModel::onlyTrashed()->get();
        return view('data.activate',compact('datas'));
    }

    public function restore(Request $request)
    {
        $data=testModel::onlyTrashed()->where('id',$request->id)->get()->first();
        $data->restore();
       return redirect('/data')->with('success', "DATA RESTORED SUCCESSFULLY!");
    }
    
}
