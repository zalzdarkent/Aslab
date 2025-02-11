<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Anggota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AnggotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnggotaResource\RelationManagers;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;
    public static function getNavigationLabel(): string
    {
        return 'Anggota';
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Member Aslab';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(5)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('npm')
                                    ->required()
                                    ->maxLength(255),

                                Select::make('jabatan_id')
                                    ->label('Jabatan')
                                    ->relationship('jabatan', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Select::make('divisi_id')
                                    ->label('Divisi')
                                    ->relationship('divisi', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Select::make('prodi_id')
                                    ->label('Prodi')
                                    ->relationship('prodi', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                FileUpload::make('foto')
                                    ->label('Foto')
                                    ->image()
                                    ->directory('uploads/foto')
                                    ->required(),

                                TextInput::make('facebook')
                                    ->label('Facebook')
                                    ->maxLength(255),

                                TextInput::make('instagram')
                                    ->label('Instagram')
                                    ->maxLength(255),

                                TextInput::make('github')
                                    ->label('GitHub')
                                    ->maxLength(255),

                                TextInput::make('twitter')
                                    ->label('X (Twitter)')
                                    ->maxLength(255),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('divisi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prodi_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}
