<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::all();
        return view("create-transfer", ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $register = new Transfer();
        $register->title = $request->title;
        $register->value = $request->value;
        $register->description = $request->description;
        $register->schedule = $request->schedule;
        $register->isExpense = isset($request->isExpense)?true:false;
        $register->isRecurrent = isset($request->isRecurrent)?true:false;
        $register->category_id = $request->type;
        $register->user_id = auth()->id();

        $register->save();
        return redirect('/dashboard')->with('msg', 'Transferência criada com sucesso!');
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
