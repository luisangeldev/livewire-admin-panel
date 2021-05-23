<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserEdit extends Component
{
    public $user;
    public $old_password;
    public $new_password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'user.name' => 'required',
            'user.email' => 'required|email|unique:users,email,'.$this->user->id.''
        ];
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.users.user-edit')->extends('layouts.app');
    }

    public function save()
    {
        $this->validate();
        $this->user->save();
        $this->alert('success', 'User info updated');
    }

    public function updatePassword()
    {
        $this->validate([
            'old_password' => 'required|min:8|max:250',
            'new_password' => 'required|min:8|max:250',
            'password_confirmation' => 'required|min:8|max:250|same:new_password',
        ]);

        if (!Hash::check($this->old_password, $this->user->password)) {
            return $this->alert('error', 'Wrong password');
        }

        $this->user->password = $this->new_password;
        $this->user->save();

        $this->alert('success', 'Password updated');

    }

}
