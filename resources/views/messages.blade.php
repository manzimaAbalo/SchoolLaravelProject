<div>

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

    @endif

    @if(session()->has('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

    @endif

    @if(session()->has('error'))
        {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> --}}

        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ session()->get('error') }}</strong> 
        </div>
    @endif

    
    @if(count($errors) > 0)
        @foreach($errors->all() as $key=> $error)
            
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ $error }}</strong> 
            </div>
        @endforeach
    @endif

</div>
