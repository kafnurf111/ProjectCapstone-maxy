@extends('hackathon-welcome.head-welcome')

@section('welcome-content')
    <div class="main-content" style="height: 100vh;
            width: 100%;">
        <div class="d-flex flex-column justify-content-center px-4 py-2" style=" width: 100%; height: 100vh;">
            <button class="ui inverted primary button joingroup" onclick="openPopup()">Join Group</button>
        </div>
    </div>
@endsection
