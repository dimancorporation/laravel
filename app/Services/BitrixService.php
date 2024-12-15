<?php

namespace App\Services;

use GuzzleHttp\Client;

class BitrixService
{
    private $baseUrl;
    private $accessToken;
    private $client;

    public function __construct(string $baseUrl, string $accessToken)
    {
        $this->baseUrl = $baseUrl;
        $this->accessToken = $accessToken;
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'verify' => false, // Отключаем проверку сертификатов
        ]);
    }

    public function getDeal(int $dealId): ?array
    {
        try {
            $response = $this->client->get("rest/{$this->accessToken}/crm.deal.get.json", [
                'query' => ['ID' => $dealId],
            ]);

            if ($response->getStatusCode() === 200) {
                return json_decode($response->getBody()->getContents(), true);
            } else {
                throw new \Exception("Ошибка при получении данных сделки");
            }
        } catch (\Throwable $e) {
            \Log::error("Ошибка при взаимодействии с Bitrix: " . $e->getMessage());
            return null;
        }
    }
}
