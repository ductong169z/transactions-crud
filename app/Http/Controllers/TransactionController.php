<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderBy('id', 'desc')->get();
        return view("transactions.index", compact('transactions'));
    }

    public function create()
    {
        return view("transactions.create");
    }

    public function store(Request $request)
    {
        Transaction::create([
            'type' => $request->type,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'amount' => $request->amount,
            'description' => $request->description,
            'user_id' => 1,
        ]);

        return redirect(route('index.transaction'));
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);
        return view("transactions.edit", compact('transaction'));
    }

    public function update($id, Request $request)
    {
        Transaction::where('id', $id)->update([
            'type' => $request->type,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'amount' => $request->amount,
            'description' => $request->description,
            'user_id' => 2,
        ]);
        return redirect(route('index.transaction'));
    }

    public function delete($id)
    {
        Transaction::where('id', $id)->delete();
        return redirect(route('index.transaction'));
    }
}
