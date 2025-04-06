<?php

namespace App\Filament\Pages;

use App\Models\Employee;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static string $view = 'filament.pages.profile';

    protected static ?string $navigationLabel = 'My Profile';

    protected static ?string $title = 'My Profile';

    protected static ?int $navigationSort = 1;

    public ?array $data = [];

    public function mount(): void
    {
        $user = Auth::user();
        $employee = $user->employee;

        if (!$employee) {
            // Create a new employee record if it doesn't exist
            $employee = Employee::create([
                'user_id' => $user->id,
                'first_name' => '',
                'last_name' => '',
                'date_of_birth' => now()->subYears(30),
                'phone_number' => '',
                'office_number' => '',
                'category' => 'full_time',
            ]);
        }

        $this->form->fill($employee->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->schema([
                        Forms\Components\TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('last_name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('date_of_birth')
                            ->required()
                            ->maxDate(now()->subYears(16)),
                        Forms\Components\TextInput::make('phone_number')
                            ->required()
                            ->tel()
                            ->maxLength(20),
                        Forms\Components\TextInput::make('office_number')
                            ->maxLength(20),
                        Forms\Components\Select::make('category')
                            ->options([
                                'full_time' => 'Full Time',
                                'part_time' => 'Part Time',
                                'intern' => 'Intern',
                                'contractor' => 'Contractor',
                            ])
                            ->required()
                            ->disabled(!Auth::user()->hasRole('admin')), // Only admins can change the category
                    ])
                    ->columns(2),
            ]);
    }

    public function save()
    {
        $user = Auth::user();
        $data = $this->form->getState();

        $employee = $user->employee;
        $employee->update($data);

        Notification::make()
            ->title('Your profile has been updated')
            ->success()
            ->send();
    }
}
