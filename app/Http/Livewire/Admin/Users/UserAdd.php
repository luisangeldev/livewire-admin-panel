<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserAdd extends Component
{
    public $name, $email, $password;

    public $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|max:50'
    ];

    public function render()
    {
        return view('livewire.admin.users.user-add')->extends('layouts.app');
    }

    public function save()
    {
        $validatedData = $this->validate();

        try {
            User::create($validatedData);
            $this->flash('success', 'User created');
            return redirect()->to(route('admin.users'));
        } catch (\Exception $e) {
            dd($e->getMessage());
            return $this->alert('error', 'Error while saving data');
        }
    }
}
