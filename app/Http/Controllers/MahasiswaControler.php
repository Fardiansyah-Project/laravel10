<?php

namespace App\Http\Controllers;

use App\Models\mahasiswamodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaControler extends Controller
{
    public function getAllData(){
        $data = mahasiswamodel::all();
        return view('mahasiswa')->with('data', $data);
    }

    public function createData(Request $request){
        $validation=Validator::make($request->all(),[
            'name' => 'required',
            'nim' => 'required',
            'address' => 'required',
        ]);

        if($validation->fails()){
            $errors = $validation->errors()->all();
            Alert::error('Error', $errors);
            return redirect()->back()->with('errors', $errors);
        }

        $data = new mahasiswamodel();
        $data->name = $request->name;
        $data->nim = $request->nim;
        $data->address = $request->address;
        $data->save();
        Alert::success('Succses menambah data');
        return redirect()->back();

    }
}

