<?php
// app/Helpers/helpers.php

use App\Models\User;

if (!function_exists('generateUserId')) {
    function generateUserId()
    {
        $lastUser = User::orderBy('user_id', 'desc')->first();
        if (!$lastUser) {
            return 'U001';
        }

        $lastId = (int) substr($lastUser->user_id, 1);
        $newId = $lastId + 1;

        return 'U' . str_pad($newId, 3, '0', STR_PAD_LEFT);
    }
}
