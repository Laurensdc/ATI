@extends('master')
@section('css')
<link rel="stylesheet" href="{{ asset('bower_components/lightbox2/dist/css/lightbox.min.css') }}"/>
@endsection
@section('homecontent')
    @if(sizeof($motd) > 0 && $motd->content != '')
    <div class="hometext">
        <p>
            {!! nl2br($motd->content) !!}
        </p>
    </div>
    @endif
    @if(sizeof($featuredproducts) > 0)
        <div class="homepromo">
            <div class="homepromo_banner">
                <h2>{{ trans('cont.spotlight') }}</h2> <span>{{ trans('cont.spotlight_text') }}</span>
            </div>
            <div class="producten_content">
                    @foreach($featuredproducts as $p)
                        <article>
                            <a href="{{ asset($p->fullresfoto) }}" data-lightbox="{{ $p->naam }}" data-title="{{ $p->naam }}">
                                <img src="{{ asset($p->coverfoto) }}"/>
                            </a>
                            <h1>{{ $p->naam }}</h1>
                            <ul>
                                <li>{{ trans('cont.dimensions') }}: {{ $p->afmetingen }}</li>
                            </ul>
                            @if(isset($p->beschrijving))
                                <p>{{ $p->beschrijving }}</p>
                            @endif
                            @if($p->invoorraad == false)
                                <p class="txt_warning">{{ trans('cont.nostock') }}.</p>
                            @endif
                            <a href="{{ route('producten') }}/{{ $p->subcategorie->categorie->cat_linknaam }}/{{ $p->subcategorie->subcat_linknaam }}">
                                {{ trans('cont.bekijk') }} {{ $p->naam }} <span class="icon-angle-circled-right">
                            </a>
                        </article>
                    @endforeach
                    <br>
            </div>
        </div>
    @endif
    <div class="hometext">
        <p>
            <p>{{ trans('cont.nicest_products') }}</p>
            <br>
            <p>
                <a href="{{ route('producten') }}" class="btn">{{ trans('cont.explore_collection') }}</a>
            </p>
        </p>
        <br>
        <p>{{ trans('cont.or') }}...<a href="{{ route('about') }}">{{ trans('cont.gettoknowus') }}</a></p>
    </div>
    <div class="nicest_products">
        <article>
            <a href="{{ route('producten') }}/vietnamees/cariusviet">
                <img src="{{ asset('images/home/carius.jpg') }}" alt="Foto Carius">
            </a>
            <div class="content">
                <h2>Carius</h2>
                <p>
                    Door zijn speciaal formaat 33/11 heeft de carius een strak uitzicht.
                </p>
                <a href="{{ route('producten') }}/vietnamees/cariusviet" class="btn">
                    Bekijk formaten
                </a>
            </div>
        </article>

        <article>
            <a href="{{ route('producten') }}/indisch/chandra">
                <img src="{{ asset('images/home/chandra.jpg') }}" alt="Foto Carius">
            </a>
            <div class="content">
                <h2>Chandra Blue</h2>
                <p>
                    Deze tegel ondergaat meerdere machinale bewerkingen gedurende een lange periode en word in Indië geselecteerd op formaat en uitzicht waardoor een kwalitatief product kan aangeleverd worden.
                </p>
                <a href="{{ route('producten') }}/indisch/chandra" class="btn">
                    Bekijk formaten
                </a>
            </div>
        </article>

    </div>

@endsection
@section('javascript')
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/lightbox2/dist/js/lightbox.min.js') }}"></script>
@endsection
