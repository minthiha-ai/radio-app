@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        <div class="col-md-6"><h5>Radio App</h5></div>
                        <div class="col-md-6 text-end">
                            <a href="{{ url('login') }}" class="btn btn-sm btn-primary">Login</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="btn-group-vertical d-block" role="group">
                        @foreach ($data as $item)
                            <a href="{{ route('schedule.audio.listen', ['time' => $item->start_time.'-'.$item->end_time, 'id' => $item->id]) }}" type="button" class="btn btn-primary m-1 d-block">{{ $item->start_time }} - {{ $item->end_time }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
