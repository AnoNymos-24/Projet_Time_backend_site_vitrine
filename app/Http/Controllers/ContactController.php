<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Préparer les données pour la vue en évitant le conflit avec $message de Laravel
        $data = $validated;
        $data['user_message'] = $validated['message']; // on renomme
        unset($data['message']); // on supprime l'ancienne clé pour éviter toute confusion

        // Envoi de l'email à l'admin
        Mail::send('emails.contact_admin', $data, function ($mail) use ($validated) {
            $mail->to('itouastanchy@gmail.com') // <-- mets ici l'adresse admin
                 ->subject('📩 Nouveau message de contact : ' . $validated['subject'])
                 ->replyTo($validated['email'], $validated['name']);
        });

        return response()->json(['message' => 'Message envoyé avec succès']);
    }
}
