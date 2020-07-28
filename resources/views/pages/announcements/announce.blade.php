@extends('templates.template')

@section('title', 'Mededelingen')

@section('content')

    <div class="container">
        <div class="announce-field">
            <div class="row">
                @foreach( $announcements as $announcement )
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="summary-announce">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
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
        </div>
    </div>

@endsection