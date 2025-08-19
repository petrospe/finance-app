<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income;
use Inertia\Inertia;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomeCategories  = Income::select('category')->distinct()->pluck('category');

        return Inertia::render('Incomes', [
            'incomes' => Income::all(),
            'incomeCategories' => $incomeCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Incomes/Create');
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

        Income::create($data);

        // return redirect()->route('incomes.index')->with('success', 'Income added.');
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
    public function edit(Income $income)
    {
        return Inertia::render('Incomes/Edit', ['income' => $income]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $income->update($data);

        // return redirect()->route('incomes.index')->with('success', 'Income updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        $income->delete();
        // return redirect()->route('incomes.index')->with('success', 'Income deleted.');
    }
}
