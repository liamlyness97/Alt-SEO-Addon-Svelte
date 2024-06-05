<?php

use Illuminate\Support\Facades\Route;
use AltDesign\AltSeo\Http\Controllers\AltController;
use AltDesign\AltSeo\Tags\AltSeo;

Route::get('/alt-seo-meta', [AltController::class, 'svelte']);
