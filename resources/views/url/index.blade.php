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
                            <a href="#" class="btn btn-primary mb-3"> + </a>
                        </div>
                    </div>
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                    <th scope="row"></th>
                                    <td><a class="status_btn">Activo</a></td>
                                    <td><a class="badge_btn_6 mb_15">Inactivo</a></td>                                   
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection