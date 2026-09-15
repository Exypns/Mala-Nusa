<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactSubmissionController extends Controller
{
    public function store(Request $request)
{
    $validator = Validator::make(
        $request->all(),
        [
            'first_name' => [
                'required',
                'string',
                'max:100',
            ],

            'last_name' => [
                'required',
                'string',
                'max:100',
            ],

            'email' => [
                'bail',
                'required',
                'string',
                'max:255',
                'email:rfc',
                'regex:/^[^@\s]+@[^@\s]+\.[^@\s]+$/',
            ],

            'subject' => [
                'required',
                'in:trip_planning,experience,accommodation,other',
            ],

            'custom_subject' => [
                'nullable',
                'required_if:subject,other',
                'string',
                'max:255',
            ],

            'message' => [
                'required',
                'string',
                'max:3000',
            ],
        ],
        [
            'first_name.required' => 'Please enter your first name.',
            'last_name.required' => 'Please enter your last name.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.regex' => 'Please enter a complete email address, for example name@example.com.',

            'subject.required' => 'Please select a topic.',
            'custom_subject.required_if' => 'Please enter your topic.',

            'message.required' => 'Please enter your message.',
        ]
    );

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Please check the form and try again.',
            'errors' => $validator->errors(),
        ], 422);
    }

    $validated = $validator->validated();

    $subject = match ($validated['subject']) {
        'trip_planning' => 'Trip Planning',
        'experience' => 'Experience Question',
        'accommodation' => 'Accommodation',
        'other' => $validated['custom_subject'],
    };

    $submission = ContactSubmission::create([
        'first_name' => $validated['first_name'],
        'last_name' => $validated['last_name'],
        'email' => $validated['email'],
        'subject' => $subject,
        'message' => $validated['message'],
        'status' => 'new',
    ]);

    return response()->json([
        'success' => true,
        'message' => "Thanks for reaching out. We'll get back to you within 24 hours.",
    ]);
}
}
