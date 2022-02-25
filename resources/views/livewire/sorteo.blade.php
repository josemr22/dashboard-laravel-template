<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Lista de Árbitros Disponibles</h6>
        <button wire:click="sortear()" class="btn btn-primary" id="newArbitratorBtn">Sortear</button>
    </div>    
        <div clasa="container row" style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: flex-start;align-items: flex-start;">              
            @foreach($arbitrators as $arbitrator)
            <div class="card col-3" >  
                <div class="card-body">
                    <h5 class="card-title">{{$arbitrator->name}}</h5>
                    <p class="card-text">Professional in charge of resolving disputes in arbitration.</p>
                    <hr>
                    {{-- <a href="#" class="btn btn-primary">Button</a> --}}
                </div>                            
            </div>
            @endforeach
        </div>    
</div>