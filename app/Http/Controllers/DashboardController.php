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
        $range = $request->query('range', 'day'); // 'day', 'week', 'two_weeks', 'month', 'six_months', 'year'
        $date = $request->query('date', now()->toDateString());

        $carbonDate = \Carbon\Carbon::parse($date);

        $start = match ($range) {
            'day'        => $carbonDate->copy()->startOfDay(),
            'week'       => $carbonDate->copy()->startOfWeek(),
            'two_weeks'  => $carbonDate->copy()->subWeek()->startOfWeek(),   // previous week + this week
            'month'      => $carbonDate->copy()->startOfMonth(),
            'six_months' => $carbonDate->copy()->subMonths(5)->startOfMonth(), // 6 months total including current
            'year'       => $carbonDate->copy()->startOfYear(),
            default      => $carbonDate->copy()->startOfDay(),
        };

        $end = match ($range) {
            'day'        => $carbonDate->copy()->endOfDay(),
            'week'       => $carbonDate->copy()->endOfWeek(),
            'two_weeks'  => $carbonDate->copy()->endOfWeek(),                // end of this week
            'month'      => $carbonDate->copy()->endOfMonth(),
            'six_months' => $carbonDate->copy()->endOfMonth(),               // end of current month
            'year'       => $carbonDate->copy()->endOfYear(),
            default      => $carbonDate->copy()->endOfDay(),
        };

        $totalIncomes = Income::whereBetween('date', [$start, $end])->sum('amount');
        $totalExpenses = Expense::whereBetween('date', [$start, $end])->sum('amount');

        return response()->json([
            'range'         => $range,
            'start'         => $start->toDateString(),
            'end'           => $end->toDateString(),
            'total_incomes' => $totalIncomes,
            'total_expenses'=> $totalExpenses,
            'balance'       => $totalIncomes - $totalExpenses,
        ]);
    }
}
