<?php

namespace App\Http\Livewire\Components;

use App\Models\Channel;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoriteChannel extends Component
{
    public $channels;



    public function render()
    {
        return view('livewire.components.favorite-channel');
    }
}
