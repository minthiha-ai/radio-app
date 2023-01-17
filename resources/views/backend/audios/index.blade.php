@extends('backend.layouts.master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Schedules</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Schedules</a></li>
                            <li class="breadcrumb-item active">list</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        @include('backend.partials.msg')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('audios.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label mb-0">Schedule</label>
                                        <select name="schedule_id" id="" class=" form-select" required>
                                            <option selected disabled>Select Schedule</option>
                                            @foreach ($schedules as $item)
                                                <option value="{{ $item->id }}">{{ $item->start_time }} to {{ $item->end_time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label mb-0">Audio Title</label>
                                        <input type="text" name="title" id="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <label class="form-label mb-0">Audio File</label>
                                        <input type="file" name="audio" id="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Schedule</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Audio</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dt)
                                    <tr>
                                        <td>{{ $dt->id }}</td>
                                        <td>{{ $dt->schedule->start_time }} to {{ $dt->schedule->end_time }}</td>
                                        <td>{{ $dt->title }}</td>
                                        <td>
                                            <audio
                                                controls autoplay
                                                src="{{ asset('storage/audios/'.$dt->audio) }}">
                                            </audio>
                                        </td>
                                        <td>
                                            <div class="hstack gap-3 flex-wrap">
                                                <a href="javascript:void(0);" class="link-success" onClick="document.getElementById('deleteForm{{ $dt->id }}').submit()">
                                                    <button type="button" class="btn btn-warning btn-sm waves-effect waves-light">Delete</button>
                                                </a>
                                                <form id="deleteForm{{ $dt->id }}" action="{{ route('audios.destroy',$item->id) }}" class="d-none" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Schedule</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Audio</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                </div>

                <!-- end table responsive -->
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection

@section('script')
<!-- Modern colorpicker bundle -->
<script src="{{ asset('assets/libs/@simonwep/pickr/pickr.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/js/pages/form-pickers.init.js') }}"></script>
@endsection
