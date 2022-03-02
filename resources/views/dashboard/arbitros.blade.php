@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"> Gestión de Árbitros</h1>
<div class="text-right mb-3">
    <button class="btn btn-primary" id="newArbitratorBtn">Nuevo</button>
</div>

<!-- DataTales Example -->
<livewire:show-arbitrators />

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <form id="myForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Crear</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="inputName" class="col-form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>
                    <div>
                        <label for="inputDescription" class="col-form-label">Descripción</label>
                        <input type="text" class="form-control" id="inputDescription">
                    </div>
                    <div>
                        <label for="inputImage" class="col-form-label">Image (300x300)</label>
                        <input type="file" class="form-control" id="inputImage">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script src="/js/main.js"></script>
@endpush