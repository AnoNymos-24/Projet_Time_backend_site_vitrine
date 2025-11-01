<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PreInscriptionController extends Controller
{
    public function send(Request $request)
    {
        // Validation basique
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'dateOfBirth' => 'nullable|date',
            'placeOfBirth' => 'nullable|string',
            'nationality' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'postalCode' => 'nullable|string',
            'cycle' => 'required|string',
            'program' => 'required|string',
            'level' => 'required|string',
            'justification' => 'nullable|string',
            'diplome' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'pieceIdentite' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            'photoIdentite' => 'nullable|file|mimes:jpg,jpeg,png',
            'releverNotes' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
        ]);

        // Sauvegarde des fichiers + préparation du tableau documents
        $files = [];
        $documents = [];
        foreach (['diplome', 'pieceIdentite', 'photoIdentite', 'releverNotes'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $path = $request->file($fileField)->store('preinscriptions', 'public');
                $files[$fileField] = storage_path('app/public/' . $path);
                $documents[$fileField] = true; // fourni
            } else {
                $documents[$fileField] = false; // non fourni
            }
        }

        // Email à l’administrateur
        Mail::send(
            'emails.admin_preinscription',
            array_merge($validated, [
                'documents' => $documents,
                'submittedAt' => now()
            ]),
            function ($message) use ($files) {
                $message->to('itouastanchy@gmail.com')
                        ->subject('Nouvelle candidature - Université TIME');

                foreach ($files as $file) {
                    $message->attach($file);
                }
            }
        );

        // Email de confirmation au candidat
        Mail::send(
            'emails.confirmation_candidat',
            $validated,
            function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Confirmation de votre candidature - Université TIME');
            }
        );

        return response()->json(['message' => 'Pré-inscription envoyée avec succès']);
    }
}
