<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view("create-transfer");
    }

    public function store(Request $request)
    {
        $register = new Transfer();
        $register->title = $request->title;
        $register->value = $request->value;
        $register->description = $request->description;
        $register->schedule = $request->schedule;
        $register->isExpense = isset($request->isExpense)?true:false;

        $register->save();
        return redirect('/')->with('msg', 'Transferência criada com sucesso!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
