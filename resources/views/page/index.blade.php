@extends('layouts.main')
@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/pages/create" role="button">
            Создать страницу
        </a>
    </div>
    @if (count($pages) > 0)
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    @foreach ($pages as $page)
                        <br>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <img src="/upload/images/{{ $page->bg }}" class="img-fluid">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <a href="/pages/{{ $page->id }}/h">№ {{ $page->id }}</a>
                                <br>
                                {{ $page->updated_at }}
                                <br>
                                {{ $page->descriptor }}
                                <br>
                                <strong>{{ $page->offer }}</strong>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <a href="/pages/{{ $page->id }}/a">
                                    А - чистый
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/b">
                                    B - баннер
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/c">
                                    C - фото
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/d">
                                    D - белое фото
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/e">
                                    E - C+ лучше видео
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/f">
                                    F - A+ лучше видео
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/g">
                                    G - F+
                                </a>
                                <br>
                                <a href="/pages/{{ $page->id }}/h">
                                    H - G+ лучше типографика
                                </a>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <a class="btn btn-warning btn-sm" href="/pages/{{ $page->id }}/edit" role="button"><span class="fa fa-fw fa-pencil"></span>&nbsp;Редактировать</a>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
