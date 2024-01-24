<?php

namespace App\Livewire;

use Livewire\Component;

class Demo extends Component
{
    public int $randomNumber;

    public function mount(): void
    {
        $this->randomNumber = mt_rand(000, 999);
    }

    public function getNewNumber(): void
    {
        $this->randomNumber = mt_rand(000, 999);
        $this->dispatch('fade-in');
    }
}
