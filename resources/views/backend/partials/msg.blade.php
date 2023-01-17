<div class="row">
    <div class="col-12">
        @if( $message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Success ! </strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if( $message = Session::get('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> Warning ! </strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if( $message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error ! </strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> Error ! </strong> {{$error}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif
    </div>
</div>
