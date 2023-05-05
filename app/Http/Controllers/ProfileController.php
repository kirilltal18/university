<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Auth/Profile');
    }
    /**
     * Display the user's profile form.
     */
    public function form(Request $request): Response
    {
        return Inertia::render('Auth/ProfileForm');
    }

    /**
     * Update the user's profile information.
     */
    public function formUpdate(Request $request): JsonResponse
    {
        $request->user()->hobbies = $request->hobbies;

        $request->user()->save();

        return response()->json('your profile has been updated');
    }

    public function update(ProfileUpdateRequest $request): JsonResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return response()->json('your profile has been updated');
    }
}
