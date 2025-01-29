<?php

use App\Http\Controllers\Api\ProjetoController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('projetos', ProjetoController::class);
});
