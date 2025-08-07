<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Inertia\Inertia;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $expences = Expense::latest()->get();
        // return Inertia::render('Expenses/Index', ['expences' => $expences]);
        return Inertia::render('Expenses', [
            'expenses' => Expense::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Expenses/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        Expense::create($data);

        // return redirect()->route('expenses.index')->with('success', 'Expense added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        return Inertia::render('Expenses/Edit', ['expense' => $expense]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $expense->update($data);

        // return redirect()->route('expenses.index')->with('success', 'Expense updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();
        // return redirect()->route('expenses.index')->with('success', 'Expense deleted.');
    }
}
