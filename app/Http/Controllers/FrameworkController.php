<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Framework;

class FrameworkController extends Controller
{

    public function index()
    {
        dd(Framework::all());
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
