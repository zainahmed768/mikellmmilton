<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\ChangePasswordRequest;
use App\Http\Requests\Api\Auth\ForgetPasswordRequest;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Requests\Api\Auth\ResetPasswordRequest;
use App\Http\Requests\Api\Auth\UpdateProfile;
use App\Http\Requests\Api\Auth\VerifyCodeRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = User::create($request->validated());
            $user->sendVerificationCode($user);
            DB::commit();
            return $this->sendResponse(new UserResource($user), 'User registered successfully. Otp sent to your email.');
        } catch (Exception $ex) {
            DB::rollBack();
            return $this->sendError('Something went wrong.', [$ex->getMessage()]);
        }
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            return $this->sendError('Invalid credentials.', [], 401);
        }
        $user = loginUser();
        if ($user->is_active == 0) {
            return $this->sendError('Your account is not active. Please contact the admin.');
        }
        if (! $user->email_verified_at) {
            return $this->sendError('Please verify your email address first.');
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->sendResponse([
            'user'  => new UserResource($user),
            'token' => $token,
        ], 'User logged in successfully.');
    }

    public function verifyCode(VerifyCodeRequest $request)
    {
        $user = User::whereEmail($request->email)->first();

        if (! $user || ! $user->verifyVerificationCode($request->code)) {
            return $this->sendError('Invalid verification code. Please try again or resend the code.', [], 500);
        }

        if (! $user->is_active) {
            return $this->sendError('Your account is not active. Please contact the admin.');
        }

        $user->update(['verification_code' => null, 'email_verified_at' => now()]); // Clear the verification code

        //SendWelcomeMailJob::dispatch($user);

        $token = $user->createToken('auth_token')->plainTextToken;

        return $this->sendResponse([
            'user'  => new UserResource($user),
            'token' => $token,
        ], 'Verification successful.');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->sendResponse([], 'User logged out successfully.');
    }

    /**
     * Resend OTP to user's email.
     */
    public function resendCode(Request $request)
    {
        $user = User::whereEmail($request->email)->first();

        if (! $user) {
            return $this->sendError('User not found.');
        }

        $user->sendVerificationCode(); // Resend the OTP

        return $this->sendResponse([], 'Verification code resent successfully.');
    }

    /**
     * Send password reset link.
     */
    public function forgotPassword(ForgetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->sendVerificationCode();

        return $this->sendResponse([], 'An email has been sent to your email address with a verification code.');
    }

    /**
     * Reset password.
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        $updated = $user->update([
            'password'          => bcrypt($request->password),
            'verification_code' => null,
        ]);

        return response()->json(['message' => 'Password has been reset successfully.'], 200);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = loginUser();

        if (! Hash::check($request->old_password, $user->password)) {
            return $this->sendError('Old password does not match.');
        }

        $user->update(['password' => bcrypt($request->new_password)]);

        return $this->sendResponse([], 'Password has been updated successfully.');

    }

    public function updateProfile(UpdateProfile $request)
    {
        $user = loginUser();

        $data = $request->only('first_name', 'last_name', 'username', 'email');

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath     = $request->file('image')->store('profile_images', 'public');
            $data['image'] = $imagePath;
        }

        $user->update($data);

        return $this->sendResponse($user, 'Profile updated successfully.');
    }

    public function getProfile()
    {
        $user = loginUser();
        return $this->sendResponse($user, 'User profile retrieved successfully.');
    }

    public function deleteAccount(Request $request)
    {
        $user = loginUser();
        $user->delete();

        return $this->sendResponse([], 'Account deleted successfully.');
    }
}
