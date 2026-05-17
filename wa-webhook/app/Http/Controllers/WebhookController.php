<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    //
    public function terimaChat(Request $request)
    {
        // 1. Ambil semua data JSON yang dikirim oleh Evolution API
        $payload = $request->all();

        // 2. Simpan ke dalam file log Laravel (storage/logs/laravel.log) untuk pembuktian
        Log::info('--- ADA CHAT WA MASUK! ---');
        Log::info(json_encode($payload, JSON_PRETTY_PRINT));

        // 3. Beri tahu Evolution API bahwa paket data sukses diterima (Status 200 OK)
        return response()->json(['status' => 'success'], 200);
    }
}
