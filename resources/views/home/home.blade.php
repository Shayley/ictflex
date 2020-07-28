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
            <div class="col">
                <div class="title-ict">
                    <h2>Welkom bij ICT-FLEX!</h2>
                </div>
            </div>
            <div class="col">
                <div class="titlefirst-sidebar">
                    <h4>Opleidingen</h4>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <div class="content">
                <p>
                    ICT-Flex is een team binnen het ICT Lyceum dat een onderdeel is van het Deltion College. Bij ICT – Flex volgen studenten dagonderwijs (BOL) of leren en werken (BBL), waarbij zelf plannen van je studieroute belangrijk is. Het Deltion College is een Regionaal Opleidingen Centrum (ROC) in Zwolle en verzorgt voor ruim 13.000 jongeren en volwassenen middelbaar beroepsonderwijs op mbo niveau.
                </p>
                <br>
                <p>
                    De ICT-opleidingen van Deltion zijn diverse malen uitgeroepen als de beste van Nederland volgens de Keuzegids Mbo. Sinds 2019 mogen wij ook het predicaat Topopleiding voeren voor ICT-Beheer en Applicatie- / Mediaontwikkelaar. In deze gids worden Mbo-instellingen per vakrichting vergeleken en is speciaal bedoeld voor (aankomende) studenten, die een opleiding moeten kiezen. Deltion scoort op alle opleidingen voldoende. Klik hier voor meer informatie.
                </p>
                <br>
                <h4>Deltion/ICT-Flex in Coronatijd: Veilig op school, dat regelen we samen!</h4>
                <br>
                <p>
                    Wat heerlijk! De vakantie is in zicht. Tijd om te genieten van de zon en de zomer na een aantal bewogen corona-maanden. Bij Deltion/ICT-Flex zijn we al weer volop bezig met de voorbereidingen voor het nieuwe schooljaar. We kijken er naar uit om je in augustus (weer) op onze campus te ontmoeten! Want dan vinden er weer lessen plaats op school. Kom je naar Deltion? In de animatie hieronder leggen we uit waar je rekening mee moet houden. Samen houden we Deltion veilig en gezond!
                </p>
            </div>
        </div>
        <div class="col">
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