<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.users.user-detail')->extends('layouts.app');
    }
}
