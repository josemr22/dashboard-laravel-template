<?php

namespace App\Http\Livewire;

use App\Models\Arbitrator;
use Livewire\Component;

class ShowArbitrators extends Component
{
    protected $listeners = [
        'arbitratorsUpdated' => '$refresh',
        'store' => 'store',
        'updateArbitrators' => 'update',
    ];
    public $arbitrator;

    public function render()
    {
        $arbitrators = Arbitrator::orderByDesc("created_at")->get();
        return view('livewire.show-arbitrators', compact('arbitrators'));
    }

    public function store($nameValue)
    {
        $arbitrator = new Arbitrator();
        $arbitrator->name = $nameValue;
        $arbitrator->save();
        $this->emit("stored");
    }

    public function update($nameValue)
    {
        $this->arbitrator->name = $nameValue;
        $this->arbitrator->save();
        $this->emit("updated");
    }

    public function delete(Arbitrator $arbitrator)
    {
        $arbitrator->delete();
        $this->emit("deleted");
    }

    public function edit(Arbitrator $arbitrator)
    {
        $this->arbitrator = $arbitrator;
        $this->emit("edit", $arbitrator->name);
    }

    public function changeState(Arbitrator $arbitrator)
    {
        $arbitrator->state = !$arbitrator->state;
        $arbitrator->save();
    }

    public function updateAllState()
    {
        $arbitrators = Arbitrator::all();
        foreach ($arbitrators as $a) {
            $a->state = false;
            $a->save();
        }
        $this->emit("updatedAllState");
    }
}
