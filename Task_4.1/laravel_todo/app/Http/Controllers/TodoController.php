<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{


public function index() {
    return Todo::all();
}


public function show($id) {
    return Todo::findOrFail($id);
}

public function store(Request $request) {
    $todo = Todo::create($request->all());
    return response()->json($todo, 201);
}

public function update(Request $request, $id) {
    $todo = Todo::findOrFail($id);
    $todo->update($request->all());
    return response()->json($todo, 200);
}


public function destroy($id) {
    Todo::destroy($id);
    return response()->json(null, 204);
}

}
