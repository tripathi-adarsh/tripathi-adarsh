<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\testModel;
use Illuminate\Support\Facades\Response;

class APITestController extends Controller
{
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $data=new testModel();
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        return Response::json(array(
            'item'=>$data,
            'data' => 1,
        ));
    }
}
