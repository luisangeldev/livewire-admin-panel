<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UsersIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.users.users-index')->extends('layouts.app');;
    }
}
