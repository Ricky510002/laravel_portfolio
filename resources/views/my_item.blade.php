@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">

            <div class="card">
                <div class="card-header">マイページ</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        自分が出品したもの一覧が表示されるよ
                    </div>   
            </div>

          


            
            <div class="container">
                <div class="row">

                   @foreach($items as $item)
                    <div class="col-lg-3 col-md-5 col-sm-5 ">
                     <div class="card" style="width: 100%; margin-top: 30px;">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%"></text></svg>
                    
                        <div class="card-body">
                            <h5 class="card-title">{{$item->item_title}}</h5>
                            
                             <a href="{{ url('home/'.$item->id) }}" class="btn btn-primary">Go somewhere</a>
                            
                            
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
