<?php

namespace App\Http\Livewire\User\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.user.auth.login')->layout('layouts.auth');
    }
}
