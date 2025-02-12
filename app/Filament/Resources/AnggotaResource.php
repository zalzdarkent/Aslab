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
                Forms\Components\Card::make([
                    Forms\Components\Grid::make(2) // Menentukan grid dengan 2 kolom
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->label('Name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('npm')
                                ->label('NPM')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Select::make('jabatan_id')
                                ->label('Jabatan')
                                ->relationship('jabatan', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),
                            Forms\Components\Select::make('divisi_id')
                                ->label('Divisi')
                                ->relationship('divisi', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),
                            Forms\Components\Select::make('prodi_id')
                                ->label('Prodi')
                                ->relationship('prodi', 'name')
                                ->searchable()
                                ->preload()
                                ->required(),
                            Forms\Components\FileUpload::make('photo')
                                ->label('Foto')
                                ->image()
                                ->directory('upload/photo') // Menyimpan ke storage/upload/photo
                                ->visibility('public') // Agar bisa diakses secara publik
                                ->required(),
                            Forms\Components\TextInput::make('facebook')
                                ->label('Facebook')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('instagram')
                                ->label('Instagram')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('github')
                                ->label('GitHub')
                                ->maxLength(255),
                            Forms\Components\TextInput::make('twitterx')
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
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('npm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan.name')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('divisi.name')
                    ->label('Divisi')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('prodi.name')
                    ->label('Prodi')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('facebook')
                    ->label('Facebook')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('instagram')
                    ->label('Instagram')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('github')
                    ->label('Github')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('twitterx')
                    ->label('Twitter (X)')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
