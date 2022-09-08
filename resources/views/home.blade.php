@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 ">
    @include('partials.header')
    <div class="row ">
        <div class="col-lg-6 card_height_100">
            <div class="white_card mb_20">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Mis enlaces mas clickeados</h3>
                        </div>
                        <div class="create_report_btn">
                            <!--<a href="#" class="btn btn-primary mb-3"> + </a>-->
                        </div>
                    </div>
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Clicks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($links as $link)
                                <tr>
                                    <th scope="row">{{ $link->name }}</th>
                                    <td><a href="{{ $link->urk }}" target="_blank" class="question_content">{{
                                            $link->url }}</a></td>
                                    @if ($link->active == 1)
                                    <td><a class="status_btn">Activo</a></td>
                                    @else
                                    <td><a class="badge_btn_6 mb_15">Inactivo</a></td>
                                    @endif
                                    <td>{{ $link->clicks }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="white_card_body" style="height: auto;">
                </div>
            </div>
        </div>
        <div class="col-lg-6 card_height_100">
            <div class="white_card mb_20">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Mi top redes<h3>
                        </div>
                        <div class="create_report_btn">
                            <!--<a href="#" class="btn btn-primary mb-3"> + </a>-->
                        </div>
                    </div>
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Enlace</th>
                                    <th scope="col">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($networksocial as $ns)
                                <tr>
                                    <th scope="row">{{ $ns->name }}</th>
                                    <td><a href="{{ $ns->url_social }}" target="_blank" class="question_content">{{
                                            $ns->url_social }}</a></td>
                                    @if ($ns->active == 1)
                                    <td><a class="status_btn">Activo</a></td>
                                    @else
                                    <td><a class="badge_btn_6 mb_15">Inactivo</a></td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="white_card_body" style="height: auto;">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="white_box mb_30">
                <div class="box_header ">
                    <div class="main-title">
                        <h3 class="mb-0">Vista previa hasta 5 enlaces</h3>
                    </div>
                </div>
                <div class="pCard_card">
                    <div class="pCard_up">
                        <div class="pCard_text">
                            <h2>Van Goggles</h2>
                            <p>UI/UX Designer &amp; UI Developer</p>
                        </div>
                        <div class="pCard_add"><i class="fa fa-plus"></i></div>
                    </div>
                    <div class="pCard_down">
                        <div class="container" style="margin-top: .7em">                            
                            <div class="row">
                              <div class="col">
                                1 of 3
                              </div>
                              <div class="col">
                                2 of 3
                              </div>
                              <div class="col">
                                3 of 3
                              </div>
                              <div class="col">
                                3 of 3
                              </div>
                              <div class="col">
                                3 of 3
                              </div>
                            </div>
                          </div>
                        
                    </div>
                    <div class="pCard_back">
                        <p>Personaliza tus colores, imagen y hasta 5 enlaces y redes</p>                  
                        <div class="white_card_body" style="margin-block: 1.8em">
                            <div class="d-grid gap-2" style="padding: 0 2.5em">
                                @foreach ($links as $link)
                                    <button type="button" class="btn btn-block" style="background-color:#2EED21">                                    
                                        <div class="position-absolute start-10">                                        
                                            <span class="badge bg-dark">
                                                <div class="icon_menu">
                                                    <img src="img/menu-icon/11.svg" alt="">
                                                </div>
                                            </span>
                                        </div>
                                        TIKTOK
                                    </button>
                                @endforeach                                
                            </div>
                        </div>
                        <div class="logo d-flex position-absolute start-50 translate-middle-x">
                            <img src="img/logo_black.png" alt="" style="width: 160px; height: auto;">                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection