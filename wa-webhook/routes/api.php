<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;

Route::post('/evolution-receiver', [WebhookController::class, 'terimaChat']);