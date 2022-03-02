<?php

namespace App\Http\Livewire;

use App\Models\Arbitrator;
use Carbon\Carbon;
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

    function storeImage($base64)
    {
        $base_to_php = explode(',', $base64);
        $data = base64_decode($base_to_php[1]);
        $filename = time() . ".png";
        $filepath = public_path("storage/$filename");
        file_put_contents($filepath, $data);
        return $filename;
    }

    public function store($data)
    {
        $data = json_decode($data);
        $arbitrator = new Arbitrator();
        $arbitrator->name = $data->name;
        $arbitrator->description = $data->description;
        if (isset($data->image)) {
            $filename = $this->storeImage($data->image);
            $arbitrator->image = $filename;
        }
        $arbitrator->save();
        $this->emit("stored");
    }

    public function update($data)
    {
        $data = json_decode($data);

        $this->arbitrator->name = $data->name;
        $this->arbitrator->description = $data->description;
        if (isset($data->image)) {
            $filename = $this->storeImage($data->image);
            $this->arbitrator->image = $filename;
        }
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
        if ($arbitrator->state) {
            $arbitrator->at_choice = \Carbon\Carbon::now();
        }
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
