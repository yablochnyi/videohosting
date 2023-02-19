<?php

namespace App\Http\Livewire;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;


    protected function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function store()
    {
        if (Auth::attempt($this->validate())) {
            Session::regenerate(true);
            return redirect()->route('index');
        } else {
            \session()->flash('error', 'Неверный пароль или email');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.auth');
    }
}
