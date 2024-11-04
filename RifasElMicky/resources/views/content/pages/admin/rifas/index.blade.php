@extends('layouts/layoutMaster')
@section('title', 'Configuracion Rifas')
<!-- Vendor Styles -->
@section('vendor-style')
@vite([
'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
'resources/assets/vendor/libs/select2/select2.scss',
'resources/assets/vendor/libs/@form-validation/form-validation.scss',
'resources/assets/vendor/libs/animate-css/animate.scss',
'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
'resources/assets/vendor/libs/moment/moment.js',
'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
'resources/assets/vendor/libs/select2/select2.js',
'resources/assets/vendor/libs/@form-validation/popular.js',
'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
'resources/assets/vendor/libs/@form-validation/auto-focus.js',
'resources/assets/vendor/libs/cleavejs/cleave.js',
'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')

@endsection

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Tabla del CRUD -->
<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Configuración de Rifa</h5>
        <div class="dt-buttons btn-group flex-wrap">


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Agregar Rifa
            </button>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables-users table">
            <thead class="border-top">
                <tr>
                    <th></th>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Inicio | Fin</th>
                    <th>Estatus</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $row)
                <tr>
                    <td></td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->nombre_premio }}</td>
                    <td>{{ $row->costo_boleto}}</td>
                    <td>
                        {{ $row->fecha_inicio}} <br>
                        {{$row->fecha_fin ? $row->fecha_fin : $row->fin_condicional}}
                    </td>
                    <td></td>
                    <td>
                        <div class="d-flex align-items-center gap-50">
                            <button type="button"
                                class="btn btn-sm btn-icon edit-record btn-text-secondary rounded-pill waves-effect"
                                data-bs-toggle="modal" data-bs-target="#editModal" data-rifa-id="{{ $row->id }}">
                                <i class="ti ti-edit"></i>
                            </button>
                            <form action="{{route('rifas.destroy', $row->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="btn btn-sm btn-icon delete-record btn-text-secondary rounded-pill waves-effect"
                                    data-id="{{ $row->id }}">
                                    <i class="ti ti-trash"></i>
                                </button>
                            </form>
                            <button
                                class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item">Ver detalle</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Agrega una nueva rifa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('rifas.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Nombre del premio -->
                    <div class="form-group mb-3">
                        <label for="nombrePremio">Nombre del Premio</label>
                        <input type="text" class="form-control @error('nombrePremio') is-invalid @enderror"
                            id="nombrePremio" name="nombrePremio" placeholder="Ingresa el nombre del premio"
                            value="{{ old('nombrePremio') }}">
                        @error('nombrePremio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Costo boleto -->
                    <div class="form-group mb-3">
                        <label for="costoBoleto">Costo del Boleto</label>
                        <input type="number" class="form-control @error('costoBoleto') is-invalid @enderror"
                            id="costoBoleto" name="costoBoleto" placeholder="Ingresa el costo del boleto"
                            value="{{ old('costoBoleto') }}">
                        @error('costoBoleto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Fecha de inicio -->
                    <div class="form-group mb-3">
                        <label for="fechaInicio">Fecha de Inicio</label>
                        <input type="date" class="form-control @error('fechaInicio') is-invalid @enderror"
                            id="fechaInicio" name="fechaInicio" value="{{ old('fechaInicio') }}">
                        @error('fechaInicio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Fecha de fin -->
                    <div class="form-group mb-3">
                        <label for="fechaFin">Fecha de Fin</label>
                        <input type="date" class="form-control @error('fechaFin') is-invalid @enderror" id="fechaFin"
                            name="fechaFin" value="{{ old('fechaFin') }}">
                        @error('fechaFin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Cantidad de boletos -->
                    <div class="form-group mb-3">
                        <label for="cantidadBoletos">Cantidad de Boletos</label>
                        <input type="number" class="form-control @error('cantidadBoletos') is-invalid @enderror"
                            id="cantidadBoletos" name="cantidadBoletos" placeholder="Ingresa la cantidad de boletos"
                            value="{{ old('cantidadBoletos') }}">
                        @error('cantidadBoletos')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Fin condicional -->
                    <div class="form-group mb-3">
                        <label for="finCondicional">Fin Condicional</label>
                        <input type="text" class="form-control @error('finCondicional') is-invalid @enderror"
                            id="finCondicional" name="finCondicional" placeholder="Ingresa el fin condicional"
                            value="{{ old('finCondicional') }}">
                        @error('finCondicional')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
            var myModal = new bootstrap.Modal(document.getElementById('basicModal'))
            myModal.show()
        })
</script>
@endif

<!-- Modal de Edición -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar rifa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('rifas.update', ':id') }}" method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <!-- Nombre del premio -->
                    <div class="form-group mb-3">
                        <label for="nombrePremio">Nombre del Premio</label>
                        <input type="text" class="form-control @error('nombrePremio') is-invalid @enderror"
                            id="nombrePremio" name="nombrePremio" value="{{ old('nombrePremio') }}">
                        @error('nombrePremio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Costo boleto -->
                    <div class="form-group mb-3">
                        <label for="costoBoleto">Costo del Boleto</label>
                        <input type="number" class="form-control @error('costoBoleto') is-invalid @enderror"
                            id="costoBoleto" name="costoBoleto" value="{{ old('costoBoleto') }}">
                        @error('costoBoleto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Fecha de inicio -->
                    <div class="form-group mb-3">
                        <label for="fechaInicio">Fecha de Inicio</label>
                        <input type="date" class="form-control @error('fechaInicio') is-invalid @enderror"
                            id="fechaInicio" name="fechaInicio" value="{{ old('fechaInicio') }}">
                        @error('fechaInicio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Fecha de fin -->
                    <div class="form-group mb-3">
                        <label for="fechaFin">Fecha de Fin</label>
                        <input type="date" class="form-control @error('fechaFin') is-invalid @enderror" id="fechaFin"
                            name="fechaFin" value="{{ old('fechaFin') }}">
                        @error('fechaFin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Cantidad de boletos -->
                    <div class="form-group mb-3">
                        <label for="cantidadBoletos">Cantidad de Boletos</label>
                        <input type="number" class="form-control @error('cantidadBoletos') is-invalid @enderror"
                            id="cantidadBoletos" name="cantidadBoletos" value="{{ old('cantidadBoletos') }}">
                        @error('cantidadBoletos')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Fin condicional -->
                    <div class="form-group mb-3">
                        <label for="finCondicional">Fin Condicional</label>
                        <input type="text" class="form-control @error('finCondicional') is-invalid @enderror"
                            id="finCondicional" name="finCondicional" value="{{ old('finCondicional') }}">
                        @error('finCondicional')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Escuchar el evento click en los botones de editar
        const editButtons = document.querySelectorAll('.edit-record');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const rifaId = this.getAttribute('data-rifa-id');
                
                // Hacer la petición AJAX para obtener los datos
                fetch(`/rifas/${rifaId}/edit`)
                    .then(response => response.json())
                    .then(data => {
                        // Actualizar la URL del formulario
                        const form = document.getElementById('editForm');
                        form.action = form.action.replace(':id', rifaId);
                        
                        // Llenar los campos del formulario
                        document.querySelector('#editModal #nombrePremio').value = data.nombre_premio;
                        document.querySelector('#editModal #costoBoleto').value = data.costo_boleto;
                        document.querySelector('#editModal #fechaInicio').value = data.fecha_inicio;
                        document.querySelector('#editModal #fechaFin').value = data.fecha_fin || '';
                        document.querySelector('#editModal #cantidadBoletos').value = data.cantidad_boletos;
                        document.querySelector('#editModal #finCondicional').value = data.fin_condicional || '';
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>



@endsection