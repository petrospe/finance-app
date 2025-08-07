<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Income;
use App\Models\Expense;

class DashboardController extends Controller
{
    public function balance(Request $request)
    {
        $range = $request->query('range', 'day'); // 'day', 'week', 'month'
        $date = $request->query('date', now()->toDateString());

        $start = match ($range) {
            'day' => \Carbon\Carbon::parse($date)->startOfDay(),
            'week' => \Carbon\Carbon::parse($date)->startOfWeek(),
            'month' => \Carbon\Carbon::parse($date)->startOfMonth(),
        };

        $end = match ($range) {
            'day' => \Carbon\Carbon::parse($date)->endOfDay(),
            'week' => \Carbon\Carbon::parse($date)->endOfWeek(),
            'month' => \Carbon\Carbon::parse($date)->endOfMonth(),
        };

        $totalIncomes = Income::whereBetween('date', [$start, $end])->sum('amount');
        $totalExpenses = Expense::whereBetween('date', [$start, $end])->sum('amount');

        return response()->json([
            'total_incomes' => $totalIncomes,
            'total_expenses' => $totalExpenses,
            'balance' => $totalIncomes - $totalExpenses,
        ]);
    }
}
