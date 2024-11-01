<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenAIController extends Controller
{
    public function getCompletion($userInput)
    {
        // Configura a requisição para a API da OpenAI
         $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo', // ou "gpt-4-turbo" se disponível
            'messages' => [
                ['role' => 'user', 'content' => $userInput]
            ],
        ]);

        // Verifica se a requisição foi bem-sucedida e retorna a resposta
        if ($response->successful()) {
            $apiResponse = $response->json('choices')[0]['message']['content'];

            return $apiResponse;
        } else {
            // Retorna o erro com uma mensagem adicional para debug
            return response()->json(['error' => $response->json()], $response->status());
        }
    }
}
