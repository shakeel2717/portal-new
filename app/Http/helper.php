<?php

use App\Models\User;

function employees()
{
    return User::where('role','employee')->get();
}
