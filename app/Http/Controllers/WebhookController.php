<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\BitrixService;

class WebhookController extends Controller
{
    protected $bitrixService;

    public function __construct(BitrixService $bitrixService)
    {
        $this->bitrixService = $bitrixService;
    }

    public function handleWebhook(Request $request)
    {
        // Логирование данных для отладки
        \Log::info('Webhook received:', $_POST);

        // Идентификатор сделки получаем через исходящий вебхук битрикс24
        $dealId = $_POST['data']['FIELDS']['ID'];

        // Получаем данные сделки через входящий вебхук битрикс24
        $dealData = $this->bitrixService->getDeal($dealId);

        if (!$dealData) {
            return response()->json(['status' => 'error'], 500);
        }

        // Указываем путь к файлу относительно storage/app
        $path = 'logs/log.txt';
        Storage::put($path, json_encode($dealData));

        return response()->json(['status' => 'success', 'data' => $dealData, 'req' => $request], 200);
    }
}
