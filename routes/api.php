<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InventoryItemController;

Route::apiResource('inventory-items', InventoryItemController::class);
