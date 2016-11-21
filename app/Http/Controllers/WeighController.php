<?php

namespace App\Http\Controllers;

use App\Weights;
use Illuminate\Http\Request;

class WeighController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

   
    public function store($wVal)
    {
       // dd($wVal);
        $weight = new Weights;
        $weight->wVal = $wVal;

        $weight->save();
    }

 
    public function show($wVal)
    {
        return "hi". $wVal;
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
