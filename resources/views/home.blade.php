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
            </div>
        </div>

        

        <div class="col-lg-6 card_height_100">
            <div class="white_card mb_20">
                <div class="white_card_header">
                    <div class="box_header">
                        <div class="main-title text-center">
                            <p class="fs-5 text-center fw-bolder">Configura tu perfil.
                            <p>
                        </div>
                        <br>
                    </div>
                    <div class="container" style="margin: 0 0 15px 0">
                        <div class="create_report_btn">
                            <h6>Sube tu imagen</h6>
                        </div>
                        <div class="">
                            <form action="{{ route('uploadImage') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="image" required>
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="inputGroupFileAddon04">Subir</button>
                                </div>
                                <code class="highlighter-rouge">Tamaño recomendado (1970 x 5980 px.)</code>
                            </form>
                        </div>
                    </div>
                    <div class="container" style="margin: 0 0 15px 0">
                        <div class="create_report_btn">
                            <h6>Selecciona tu color</h6>
                            <!--<a href="#" class="btn btn-primary mb-3"> + </a>-->
                        </div>
                        <div class="">
                            <form action="{{ route('changeColor') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" id="exampleColorInput"
                                        value="{{ Auth::user()->color }}" name="color" required>
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="inputGroupFileAddon04">Cambiar color</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="container" style="margin: 0 0 15px 0">
                        <div class="create_report_btn">
                            <h6>Cambia tu avatar</h6>
                        </div>
                        <div class="">
                            <form action="{{ route('changeAvatar') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input type="file" class="form-control" id="image"
                                        aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="image" required>
                                    <button class="btn btn-outline-secondary" type="submit"
                                        id="inputGroupFileAddon04">Subir</button>
                                </div>
                                <code class="highlighter-rouge">Tamaño recomendado (500 x 500 px.)</code>
                            </form>
                        </div>
                    </div>

                    <div class="container" style="margin: 0 0 15px 0">
                        <div class="create_report_btn">
                            <h6>Comparte tu codigo QR</h6>
                            <!--<a href="#" class="btn btn-primary mb-3"> + </a>-->
                        </div>
                        <div class="">
                            @if (Auth::user()->avatar=='profile.png')
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(public_path().'/img/'.Auth::user()->avatar, .1, true)->size(500)->generate('https://milink.fun/'.Auth::user()->url)) !!} ">
                            @else
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge(public_path().'/img/'.Auth::user()->email.'/'.Auth::user()->avatar, .1, true)->size(500)->generate('https://milink.fun/'.Auth::user()->url)) !!} ">
                            @endif
                            <p><code>Comparte tu qr con todos tus contactos</a></code></p>
                        </div>
                    </div>

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
                    <div class="pCard_up"
                        @if(Auth::user()->img_profile==='profile.png')
                        style="background-image:url(../img/{{ Auth::user()->img_profile }})"
                        @else
                        style="background-image:url(../img/{{ Auth::user()->email }}/{{ Auth::user()->img_profile }})"
                        @endif
                        >
                        <div class="pCard_text">
                            <h2>{{ Auth::user()->name }}</h2>
                            <p>{{ Auth::user()->ocupation }}</p>
                        </div>
                        <div class="pCard_add"><i class="fa fa-plus"></i></div>
                    </div>
                    <div class="pCard_down">
                        <div class="container" style="margin-top: .7em">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('img/icons_social/instagram.png') }}"
                                        style="width: 50px;height=auto">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/icons_social/facebook.png') }}"
                                        style="width: 50px;height=auto">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/icons_social/tik-tok.png') }}"
                                        style="width: 50px;height=auto">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/icons_social/youtube.png') }}"
                                        style="width: 50px;height=auto">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('img/icons_social/twitter.png') }}"
                                        style="width: 50px;height=auto">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pCard_back">
                        <p>Personaliza tus colores, imagen y hasta 5 enlaces y redes</p>
                        <div class="white_card_body" style="margin-block: 1.8em">
                            <div class="d-grid gap-2" style="padding: 0 2.5em">
                                @foreach ($links as $link)
                                <a href="{{ $link->url }}" target="_blank" type="button" class="btn btn-block"
                                    style="background-color:{{ Auth::user()->color }}">
                                    <div class="position-absolute start-10">
                                        <span class="badge bg-dark">
                                            <div class="icon_menu">
                                                <img src="img/menu-icon/11.svg" alt="">
                                            </div>
                                        </span>
                                    </div>
                                    {{ strtoupper($link->name) }}
                                </a>
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