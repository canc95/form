<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
      $tests = Test::orderBy('name', 'ASC')->paginate(8);
      return view('test.index', compact('tests'));
    }

    public function create()
    {
      return view('test.create');
    }

    public function store(Request $request)
    {
      $test = new Test();
      $test->name = $request->name;
      $test->email = $request->email;
      $test->save();

      return redirect()->route('test.index');
    }

    public function edit($id)
    {
      $test = Test::find($id);
      return view('test.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
      $test = Test::find($id);
      $test->name = $request->name;
      $test->email = $request->email;
      $test->save();

      return redirect()->route('test.index');
    }

    public function delete($id)
    {
      $test = Test::find($id);
      $test->delete();
      return redirect()
        ->route('test.index');
    }

    public function show($id)
    {
      $test = Test::find($id);
      return view('test.show', compact('test'));
    }
}
