<?php



namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterSubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $subscriber = NewsletterSubscriber::create(['email' => $request->email]);

        // Optionnel: Envoyer un email de confirmation

        return response()->json(['message' => 'Successfully subscribed!', 'subscriber' => $subscriber], 201);
    }
}

