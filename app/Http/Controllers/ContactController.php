<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): JsonResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['nullable', 'string', 'max:60'],
            'country' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        $recipient = 'info@africaingoldinitiative.or.tz';
        $body = implode("\n", [
            'New message from Africa In Gold website',
            '',
            'Name: '.$data['name'],
            'Email: '.$data['email'],
            'Phone: '.($data['phone'] ?? 'Not provided'),
            'Country/City: '.($data['country'] ?? 'Not provided'),
            '',
            'Message:',
            $data['message'],
        ]);

        Mail::raw($body, function ($message) use ($data, $recipient) {
            $message
                ->from($recipient, 'Africa In Gold Website')
                ->to($recipient)
                ->replyTo($data['email'], $data['name'])
                ->subject('New website contact message');
        });

        return response()->json([
            'message' => __('messages.message_sent'),
        ]);
    }
}
