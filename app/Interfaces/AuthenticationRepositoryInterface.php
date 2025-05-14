<?php

namespace App\Interfaces;

interface AuthenticationRepositoryInterface
{
    public function login($request);

    public function logout();

    public function register($request);

    public function verifyEmail($email, $token);

    public function forgotPassword($request);

    public function resetPasswordPage($email, $token);

    public function resetPassword($request);
}
