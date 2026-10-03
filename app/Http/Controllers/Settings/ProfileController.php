<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateAvatarRequest;
use App\Http\Requests\Settings\UpdatePasswordRequest;
use App\Http\Requests\Settings\UpdateProfileRequest;
use App\Services\Settings\ProfileService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(
        protected ProfileService $profileService
    ) {
    }

    /**
     * Display the user's profile settings page.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        $profile = $this->profileService->getProfile($user);

        return view('pages.settings.profile', [
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(
        UpdateProfileRequest $request
    ): JsonResponse {
        $user = $request->user();

        $profile = $this->profileService->updateProfile(
            $user,
            $request->validated()
        );

        return response()->json([
            'success' => true,
            'message' => __('profile.save_success'),
            'data' => [
                'profile' => $profile,
            ],
        ]);
    }

    /**
     * Update the user's password.
     */
    public function updatePassword(
        UpdatePasswordRequest $request
    ): JsonResponse {
        $user = $request->user();

        $this->profileService->updatePassword(
            $user,
            $request->validated('password')
        );

        return response()->json([
            'success' => true,
            'message' => __('profile.js.password_updated_message'),
            'data' => [],
        ]);
    }

    /**
     * Upload and update the user's avatar.
     */
    public function updateAvatar(
        UpdateAvatarRequest $request
    ): JsonResponse {
        $user = $request->user();

        $profile = $this->profileService->updateAvatar(
            $user,
            $request->file('avatar')
        );

        return response()->json([
            'success' => true,
            'message' => __('profile.photo_success'),
            'data' => [
                'avatar' => $profile->avatar
                    ? asset($profile->avatar)
                    : null,
                'avatar_path' => $profile->avatar,
            ],
        ]);
    }

    /**
     * Remove the user's avatar.
     */
    public function removeAvatar(
        Request $request
    ): JsonResponse {
        $user = $request->user();

        $this->profileService->removeAvatar($user);

        return response()->json([
            'success' => true,
            'message' => __('profile.js.photo_removed'),
            'data' => [
                'avatar' => null,
            ],
        ]);
    }
}
