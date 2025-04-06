<?php

namespace App\Filament\Resources\AdminResource\Widgets;

use App\Models\Employee;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class EmployeesChart extends ChartWidget
{
    protected static ?string $chartType = 'bar';

    protected function getData(): array
    {
        // Get employees grouped by month of creation
        $employeesByMonth = Employee::query()
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('count(*) as count'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $labels = [];
        $data = [];

        // Fill all months
        for ($i = 1; $i <= 12; $i++) {
            $labels[] = date('F', mktime(0, 0, 0, $i, 1));
            $count = $employeesByMonth->firstWhere('month', $i)?->count ?? 0;
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Employees',
                    'data' => $data,
                    'borderColor' => '#3b82f6',
                    'fill' => false,
                ],
            ],
            'labels' => $labels,
        ];
    }
    protected function getType(): string
    {
        return 'bar';
    }
}
