<?php

namespace App\Filament\Resources\Partners;

use App\Filament\Resources\Partners\Pages\CreatePartner;
use App\Filament\Resources\Partners\Pages\EditPartner;
use App\Filament\Resources\Partners\Pages\ListPartners;
use App\Filament\Resources\Partners\Schemas\PartnerForm;
use App\Filament\Resources\Partners\Tables\PartnersTable;
use App\Models\Partner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextInputColumn;


class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationLabel = 'Партнеры';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Партнер';

    protected static ?string $pluralModelLabel = 'Партнеры';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([ // Скорее всего в v5 метод schema() переименован в components(), так как это Schema
                TextInput::make('name')
                    ->label('Название партнера')
                    ->required(),

                TextInput::make('url')
                    ->label('Ссылка на сайт')
                    ->url(),

                FileUpload::make('logo')
                    ->label('Логотип')
                    ->image()
                    ->disk('public')
                    ->directory('partners-logos')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->label('Лого'),
                TextInputColumn::make('name')->label('Название')->searchable(),
                TextInputColumn::make('url')->label('Сайт'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPartners::route('/'),
            'create' => CreatePartner::route('/create'),
            'edit' => EditPartner::route('/{record}/edit'),
        ];
    }
}
