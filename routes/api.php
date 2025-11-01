<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\UniversityEventController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\DynamicContentController;
use App\Http\Controllers\Api\NewsletterSubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PreInscriptionController;
use App\Http\Controllers\VisitController;
//prise de rendez vous
Route::post('/visit-request', [VisitController::class, 'send']);





use Illuminate\Support\Facades\Mail;
// Articles
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article:slug}', [ArticleController::class, 'show']); // Utiliser le slug pour l'URL



// Events
Route::get('/events', [UniversityEventController::class, 'index']);
Route::get('/events/{event:slug}', [UniversityEventController::class, 'show']);

// Settings (ex: récupérer un paramètre spécifique ou tous)
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/settings/{key}', [SettingController::class, 'show']);

// Dynamic Content
Route::get('/dynamic-content/{slug}', [DynamicContentController::class, 'show']);

// Newsletter Subscription
Route::post('/newsletter/subscribe', [NewsletterSubscriptionController::class, 'subscribe']);

// Contact Form




Route::post('/pre-inscription', [PreInscriptionController::class, 'send']);
Route::post('/contact', [ContactController::class, 'send']);



Route::get('/test-mail', function () {
    try {
        Mail::raw('Ceci est un email de test depuis Laravel.', function ($message) {
            $message->to('itouastanchy@gmail.com')
                    ->subject('Test Laravel - Université TIME');
        });

        return '✅ Email envoyé avec succès';
    } catch (\Exception $e) {
        return '❌ Erreur : ' . $e->getMessage();
    }
});

// Vous aurez besoin d'autres routes pour:
// - Présentation de l'université (pourrait être des DynamicContent ou des Settings)
// - Cycles de formation (nouvelle table/modèle `Formations` ou `Cycles` ?)
// - Conditions d'admission (idem)
// - Vie étudiante (pourrait être des articles catégorisés ou DynamicContent)
// - Pages spécifiques (Stage, Services Académiques, etc. - souvent du contenu statique ou DynamicContent)

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
