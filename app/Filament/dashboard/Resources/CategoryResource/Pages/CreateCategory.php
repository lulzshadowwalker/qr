<?php

namespace App\Filament\dashboard\Resources\CategoryResource\Pages;

use App\Filament\dashboard\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
