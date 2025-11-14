<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('portfolio'); // la vue du formulaire
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

         $contact = Contact::create($validated);

        // Retourner une réponse JSON (pour JavaScript)
        return response()->json([
            'success' => true,
            'message' => 'Message envoyé avec succès !',
            'data' => $contact
        ]);
        }
}
