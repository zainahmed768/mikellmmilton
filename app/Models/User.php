<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Mail\VerificationMail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone_number',
        'is_active',
        'is_admin',
        'verification_code',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password'          => 'hashed',
    ];

    public function scopeWithoutAdmin($query)
    {
        return $query->where('is_admin', 0);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function sendVerificationCode()
    {
        $verificationCode = 1234; // random_int(1000, 9999); // Generate a random 6-digit code
        $this->update(['verification_code' => $verificationCode]);

        Mail::to($this->email)->send(new VerificationMail($this, $verificationCode));
    }

    public function verifyVerificationCode($code)
    {
        return $this->verification_code === $code;
    }

    /**
     * Interact with the resume path attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ?? null,
            set: fn(?string $value) => str_replace('public/', '', $value),
        );
    }
}
