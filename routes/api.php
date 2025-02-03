<?php

use App\Http\Controllers\Api\WordApiController;
use Illuminate\Http\Request;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\Route;

Route::post('/api/word', [WordApiController::class, 'store']);
