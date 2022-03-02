<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Árbitros Disponibles</h6>
        <button wire:click="sortear()" class="btn btn-primary" id="newArbitratorBtn">Sortear</button>
    </div>
    <div clasa="container row mt-3"
        style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: flex-start;align-items: flex-start;">
        @foreach($arbitrators as $arbitrator)
        <div class="card col-3">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{$arbitrator->photo}}" style="max-width: 70%" alt="" class="mb-3">
                </div>
                <h5 class="card-title">{{$arbitrator->name}}</h5>
                <p class="card-text">{{$arbitrator->description}}</p>
                <hr>
                {{-- <a href="#" class="btn btn-primary">Button</a> --}}
            </div>
        </div>
        @endforeach
    </div>
</div>