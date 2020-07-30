@extends('templates.template')

@section('title', 'Home')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/backgrounds/deltion2.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/backgrounds/deltion2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/backgrounds/deltion2.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="title-ict">
                    <h1>Welkom bij ICT-FLEX</h1>
                </div>
            </div>
            <div class="col-sm-6 d-flex justify-content-center">
                <div class="titlefirst-sidebar">
                    <h4>Opleidingen</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach( $announcements as $announcement )
                <div class="col-sm-8">
                    <div class="content">
                        <div class="card bg-light mb-3">
                            <div class="card-header"><h4>{{$announcement->title}}</h4></div>
                            <div class="card-body">
                                <p class="card-text">{{$announcement->content}}.</p>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            <div class="col-sm-4">
                <div class="sidenav">
                    <a href="#">Medewerker ICT (N2)</a>
                    <a href="#">Medewerker Beheer ICT (N3)</a>
                    <a href="#">ICT Beheerder (N4)</a>
                    <a href="#">Applicatie- en mediaontwikkeling (N4)</a>
                </div>
            </div>
        </div>
    </div>
@endsection