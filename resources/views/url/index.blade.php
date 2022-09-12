@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 ">
    @include('partials.header')
    <div class="row ">
        <div class="col-lg-12 card_height_100">
            <div class="white_card mb_20">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Enlaces</h3>
                        </div>
                        <div class="create_report_btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Agregar enlace
                              </button>
                        </div>
                    </div>
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($urls as $url)
                                    <tr>
                                        <th scope="row">{{ $url->name }}</th>
                                        <td><a href="{{ $url->url }}" target="_blank" class="status_btn">{{ $url->url }}</a></td>
                                        @if ($url->active == 1)
                                        <td><a class="status_btn">Activo</a></td>
                                        @else
                                        <td><a class="badge_btn_6 mb_15">Inactivo</a></td>
                                        @endif
                                        <td class="text-center">
                                          
                                            <a class="" href="#" role="button" id="dropdownMenuLink"  data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="ti-arrow-circle-right" style=""></i>
                                            </a> 
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                              <li>
                                                <div class="input-group mb-3">
                                                  <span class="form-control" aria-label="Recipient's username" id="link-copy" aria-describedby="button-addon-group">{{ $url->url }}</span>
                                                  <div class="">
                                                    <button class="btn btn-light btn-outline-secondary" type="button" id="button-addon-group" onclick="copiarAlPortapapeles('link-copy')">Copiar</button>
                                                  </div>
                                                </div>
                                              </li>
                                              <li><a class="dropdown-item" href="#">Estadistica</a></li>
                                              <li><a class="dropdown-item" href="#">Marcar como favorito</a></li>
                                              <li><a class="dropdown-item" href="#">Redireccionar</a></li>
                                              <li><hr class="dropdown-divider"></li>
                                            </ul>
                                         
                                            <a href="#"><i class="ti-pencil" style="margin: 0 .5em"></i></a>
                                            <a href="{{ route('deleteUrl', ['id'=>$url->id]) }}" onclick="return confirm('¿Está seguro de eliminar el enlace?')"><i class="ti-close"></i></a>
                                        </td>
                                    </tr>                                   
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crea tu enlace.</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('setUrl') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nombre del enlace (nombre que se muestra):</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">url:</label>
                <input type="text" class="form-control" id="url" name="url">
              </div>
              <div class="row g-3">
                <div class="col-sm-6">
                    <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Mostrar:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="active" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                          Activo
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="active">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Inactivo
                        </label>
                      </div>
                  </div>
                </div>
                <div class="col-sm-6">
                <label for="recipient-name" class="col-form-label">Icono:</label>
                    <select name="logo" id="logo" class="form-control">
                        <option value="">Selecciona tu icono</option>
                        <option value="icono1">ICONO 1  </option>
                    </select>
                </div>
              </div>
              <button type="submit" class="btn btn-success mb-3">Agregar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('js-dev')
<script>
  function copiarAlPortapapeles(id_elemento) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(id_elemento).innerHTML);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
}
</script>
@endsection