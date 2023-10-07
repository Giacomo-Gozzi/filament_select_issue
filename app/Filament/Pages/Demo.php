<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Demo extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.demo';

    public $first = null;
    public $second = null;

    public function form(Form $form): Form
    {
        return $form->schema([
            Select::make('first')
                ->searchable()
                ->options([
                    'element 1' => 1,
                    'element 2' => 2,
                    'element 3' => 3,
                ])
                ->live(),

            Select::make('second')
                ->searchable()
                ->options([
                    'element 1' => 1,
                    'element 2' => 2,
                    'element 3' => 3,
                ])
                ->live()
                ->disabled(function () {
                    return $this->first == null;
                }),
        ]);
    }
}
