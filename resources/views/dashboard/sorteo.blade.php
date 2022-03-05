@extends('layouts.app')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Sorteo</h1>

<!-- DataTales Example -->
<livewire:sorteo />

{{-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <form id="myForm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Crear</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <label for="name" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputName">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div> --}}
@endsection
@push('scripts')
<script>
    Livewire.on("randomSelected", (arbitrator) => {
        Swal.fire({
            title: 'Realizando Sorteo',
            icon: 'info',
            html:
                `
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgb(255, 255, 255); display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <g transform="translate(50 50)">
                    <g transform="scale(0.7)">
                        <g transform="translate(-50 -50)">
                        <g>
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" values="0 50 50;360 50 50" keyTimes="0;1" dur="0.7575757575757576s"></animateTransform>
                            <path fill-opacity="0.8" fill="#e15b64" d="M50 50L50 0A50 50 0 0 1 100 50Z"></path>
                        </g>
                        <g>
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" values="0 50 50;360 50 50" keyTimes="0;1" dur="1.0101010101010102s"></animateTransform>
                            <path fill-opacity="0.8" fill="#f47e60" d="M50 50L50 0A50 50 0 0 1 100 50Z" transform="rotate(90 50 50)"></path>
                        </g>
                        <g>
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" values="0 50 50;360 50 50" keyTimes="0;1" dur="1.5151515151515151s"></animateTransform>
                            <path fill-opacity="0.8" fill="#f8b26a" d="M50 50L50 0A50 50 0 0 1 100 50Z" transform="rotate(180 50 50)"></path>
                        </g>
                        <g>
                            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" values="0 50 50;360 50 50" keyTimes="0;1" dur="3.0303030303030303s"></animateTransform>
                            <path fill-opacity="0.8" fill="#abbd81" d="M50 50L50 0A50 50 0 0 1 100 50Z" transform="rotate(270 50 50)"></path>
                        </g>
                        </g>
                    </g>
                    </g>
                </svg>
                `,
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton: false,
            allowOutsideClick: false
        });
        setTimeout(() => {
            Swal.fire({
                icon: 'success',
                title: 'Árbitro Seleccionado:',
                text: arbitrator.name,
                allowOutsideClick: false
            });

            Swal.fire({
            title: 'Árbitro Seleccionado:',
            icon: 'success',
            html:
                `
                <p style="font-size: 2.5rem; font-weight: bold;">${arbitrator.name}</p>
                <img src="${arbitrator.photo}" width="100px">
                <p>${arbitrator.description}</p>
                `,
            showCloseButton: false,
            showCancelButton: false,
            allowOutsideClick: false
        });

        console.log(arbitrator);
        }, 3000);
    });
</script>
@endpush