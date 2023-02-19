<?php

namespace App\Http\Livewire\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutComponent extends Component
{
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function render()
    {
        return view('livewire.components.logout-component');
    }
}
