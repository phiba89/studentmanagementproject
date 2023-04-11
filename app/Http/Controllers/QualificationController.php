<?php

namespace App\Http\Controllers;

use App\Http\Requests\QualificationInsertRequest;
use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function store(QualificationInsertRequest $request){
        //insert into table qualifications ('name') values ($request->name)
        $data = Qualification::create([
            'name' =>$request->name
        ]);
        return response()->json([
            'id'=>$data->id,
            'message'=>'success'
        ],200);
    }

    public function index(){
        $qualifications = Qualification::all(); //select * from qualifications
        return response()->json([
            'data'=>$qualifications,
        ],200);
    }
}
