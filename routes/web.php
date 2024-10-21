<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentsController;
use App\Http\Controllers\ReferencesController;

Route::get('/', [[[IncidentsController::class, 'index'], [ReferencesController::class, 'index']]]);
