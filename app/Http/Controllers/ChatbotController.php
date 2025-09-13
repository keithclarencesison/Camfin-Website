<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function handleMessage(Request $request)
    {
        $message = $request->json('message');

        if (is_null($message)) {
            return response()->json(['response' => 'Invalid request.']);
        }
        
        $response = $this->generateResponse($message);
        
        return response()->json(['response' => $response]);
    }
    
    private function generateResponse($message)
    {
        $message = strtolower($message);
        
        $responses = [
            'hello' => 'Hi there! How can I assist you today?',
            'hi' => 'Hello! What can I help you with?',
            'hours' => 'We\'re open Monday to Friday, 9 AM to 6 PM.',
            'contact' => 'You can reach us at support@example.com',
            'help' => 'I can help you with questions about our services!',
        ];
        
        foreach ($responses as $key => $response) {
            if (stripos($message, $key) !== false) {
                return $response;
            }
        }
        
        return 'Thanks for your message! How can I help you today?';
    }
}
