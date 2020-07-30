@extends('layouts.app')

@section('title', 'Announcements')

@section('content')

    <div class="title-announce">
        <h1>Maak nieuwe mededeling</h1>
    </div>

    <div class="container">

        <form method="POST" action="/home/mededelingen/storeAnnouncement">

            {{ csrf_field() }}

            <div>
                <label>Titel</label>
                <input type="text" name="title" placeholder="Titel">

            </div>
            <div>
                <label>Mededeling</label>
                <textarea name="content" placeholder="Mededeling"></textarea>

            </div>
            <div>

                <input type="submit" value="Maak mededeling">

            </div>

        </form>

    </div>

    <hr>

    <div class="row">
        @foreach( $announcements as $announcement )
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="summary-announce">
                    <div class="card bg-light mb-3">
                        <div class="card-header">Mededeling {{$announcement->id}} </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->content}}.</p>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
@endsection