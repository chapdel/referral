<?php

// config for Chapdel/Referral
use App\Models\User;

return [
    'model' => User::class,
    'foreign_key' => 'user_id',
];
