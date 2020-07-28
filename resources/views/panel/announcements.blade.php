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
                <input type="text" name="name" placeholder="Titel">

            </div>
            <div>
                <label >Mededeling</label>
                <textarea name="description" placeholder="Mededeling"></textarea>

            </div>
            <div>

                <input type="submit" value="Maak mededeling">

            </div>

        </form>

    </div>

@endsection