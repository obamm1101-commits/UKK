<?php

namespace App\Filament\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('user_id')
                    ->default(auth()->user()->id)
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('ruangan')
                    ->required(),
                TextInput::make('deskripsi')
                    ->required(),
                Hidden::make('status')
                    ->required()
                    ->default('meunggu'),
            ]);
    }
}
