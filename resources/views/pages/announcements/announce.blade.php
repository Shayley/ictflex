@extends('templates.template')

@section('title', 'Mededelingen')

@section('content')

    <div class="container">
        <div class="announce-field">
            <div class="row">
                @foreach( $announcements as $announcement )
                    <div class="col-sm-6 justify-content-center">
                        <div class="summary-announce">
                            <div class="card bg-light mb-3">
                                <div class="card-header"><h4>{{$announcement->title}}</h4></div>
                                <div class="card-body">
                                    <p class="card-text">{{$announcement->content}}.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

@endsection