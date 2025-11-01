<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VisitController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'phone'     => 'required|string|max:50',
            'visitDate' => 'required|date',
            'timeSlot'  => 'required|string|max:50',
            'message'   => 'nullable|string',
        ]);

        // Préparer les données pour la vue
        $data = $validated;
        $data['user_message'] = $validated['message'] ?? 'Aucun message fourni';
        unset($data['message']);

        // Envoi de l'email à l'admin
        Mail::send('emails.visit_request', $data, function ($mail) use ($validated) {
            $mail->to('itouastanchy@gmail.com') // <-- change avec l'adresse admin
                 ->subject('📅 Nouvelle demande de visite : ' . $validated['firstName'] . ' ' . $validated['lastName'])
                 ->replyTo($validated['email'], $validated['firstName'] . ' ' . $validated['lastName']);
        });

        return response()->json(['message' => 'Demande de visite envoyée avec succès']);
    }
}
