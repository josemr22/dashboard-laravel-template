<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        <button wire:click="updateAllState()" class="btn btn-primary" id="newArbitratorBtn">Marcar todos como
            Disponibles</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                        <th>Disponibilidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($arbitrators as $arbitrator)
                    <tr>
                        <td>{{$arbitrator->name}}</td>
                        <td>{{$arbitrator->created_at}}</td>
                        <td class="d-flex">
                            <button class="btn btn-sm btn-outline-primary" wire:click="edit({{$arbitrator->id}})"><i
                                    class="fa fa-edit"></i></button>
                            <button wire:click="delete({{$arbitrator->id}})"
                                class="btn btn-sm btn-outline-danger ml-1"><i class="fa fa-trash"></i></button>
                        </td>
                        <td>
                            <div class="custom-control custom-switch">
                                <input wire:click="changeState({{$arbitrator->id}})" {{$arbitrator->state ? 'checked' :
                                ''}} type="checkbox" class="custom-control-input" id="customSwitch{{$arbitrator->id}}">
                                <label class="custom-control-label"
                                    for="customSwitch{{$arbitrator->id}}">{{$arbitrator->state ? 'No
                                    - Disponible' :
                                    'Libre'}}</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>