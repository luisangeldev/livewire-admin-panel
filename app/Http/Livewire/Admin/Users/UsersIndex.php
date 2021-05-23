<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'removeUserConfirmed'
    ];

    public $user_for_remove;

    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.admin.users.users-index', [
            'users' => $users
        ])->extends('layouts.app');;
    }

    public function deleteUser($userId)
    {
        try {
            $user = User::findOrFail($userId);
            $message = "{$user->first_name} {$user->last_name} will be removed";
            $this->user_for_remove = $user;
            $this->confirm('Removing user', [
                'toast' => false,
                'position' => 'top',
                'text' => $message,
                'showConfirmButton' => true,
                'confirmButtonText' =>  'Yes',
                'cancelButtonText' => 'Cancel',
                'onConfirmed' => 'removeUserConfirmed',
                'onCancelled' => 'removeUserCancelled',
            ]);
        } catch (\Exception $e) {
            $this->alert('error', 'Error while trying to remove user');
        }
    }

    public function removeUserConfirmed()
    {
        $this->user_for_remove->name = 'Eliminado';
        $this->user_for_remove->save();
        $this->user_for_remove = '';
        $this->alert('success', 'User removed');
    }

    public function removeUserCancelled()
    {
        $this->user_for_remove = '';
    }
}
