<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;

Route::apiResource('friends', FriendController::class);
