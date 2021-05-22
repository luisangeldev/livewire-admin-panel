<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.users.users-index', [
            'users' => $users
        ])->extends('layouts.app');;
    }
}
