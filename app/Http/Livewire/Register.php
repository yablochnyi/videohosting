<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravolt\Avatar\Facade as Avatar;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ];
    }

    protected $messages = [
        'name' => 'Введите Ваше имя',
        'email.unique' => 'Пользователь с данным email уже существует',
        'email.required' => 'Введите email',
        'password' => 'Пароли не совпадают',
        'password.required' => 'Введите пароль',
    ];
    public function store()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Avatar::create($this->name)->save(storage_path('app/public/avatar/avatar-'. $user->id . '.png'));

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.register')->layout('layouts.auth');
    }
}
