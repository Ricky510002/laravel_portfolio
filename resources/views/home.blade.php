@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">

            <div class="card">
                <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>   
            </div>


            
            <div class="container">
                <div class="row">

                   @foreach($images as $image)
                    <div class="col-md-3" >
                     <div class="card" style="width: 15rem; margin-top: 30px;">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="{{ Storage::url($image->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%"></text></svg>
                    
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                     </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
            
            
        </div>
    </div>
</div>
@endsection
