<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Arbitrator;

class Sorteo extends Component
{
    public $arbitrators;

    public function render()
    {
        $this->arbitrators = Arbitrator::orderByDesc("created_at")->where('state', false)->get();
        return view('livewire.sorteo');
    }

    public function sortear()
    {
        $randomArbitrator = $this->arbitrators->random();
        $randomArbitrator->state = true;
        $randomArbitrator->at_choice = \Carbon\Carbon::now();
        $randomArbitrator->save();
        $this->emit('randomSelected', $randomArbitrator);
    }
}
