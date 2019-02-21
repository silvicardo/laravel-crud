<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Framework;

class FrameworkController extends Controller
{

    public function index()
    {

      $allFrameworks = Framework::all();
      return view('frameworks.index', compact('allFrameworks'));
    }

    public function create()
    {
      return view('frameworks.create');
    }


    public function store(Request $request)
    {

        $formData = $request->all();
        $newFramework = new Framework();
        $newFramework->fill($formData);
        $newFramework->save();

        return redirect()->route('frameworks.index');

    }


    public function show($id)
    {
      $framework = Framework::find($id);

      return (!empty($framework)) ? view('frameworks.show', compact('framework')): abort(404);

    }


    public function edit(Framework $framework)
    {

        return (!empty($framework)) ? view('frameworks.edit', compact('framework')) : abort(404);

    }


    public function update(Request $request, Framework $framework)

    {

      if (empty($framework)) { abort(404); }
      $formData = $request->all();
      $framework->update($formData);

      return redirect()->route('frameworks.index');

    }

    public function destroy($id)
    {

      $framework = Framework::find($id);

      $framework->delete();

      return redirect()->route('frameworks.index');

    }
}
