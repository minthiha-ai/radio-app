@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6"><h5>Radio App</h5></div>
                        <div class="col-md-6 text-end">
                            <a href="{{ url('/') }}" class="btn btn-sm btn-secondary">back</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="card shadow-lg p-3 mb-5 rounded" style="width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-sm-5">
                                <img class="card-img" src="{{ asset('assets/images/radio.gif') }}" alt="Suresh Dasari Card" style="width: 65%">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $schedule->audios[0]->title }}</h5>

                                    <audio
                                        controls autoplay
                                        src="{{ asset('storage/audios/'.$schedule->audios[0]->audio) }}">
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
