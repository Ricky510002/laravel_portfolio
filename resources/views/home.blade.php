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

            <div class="input-group" style="margin-top: 30px">
              <form action="/home/search/" method="GET">
                <input type="text" class="form-control" name="search" value="{{request('search')}}" placeholder="検索">
                <span class="input-group-btn">
                     <button type="submit" class="btn btn-primary">検索</button>
                </span>
              </form>

            <a href="/home" class="btn btn-primary">一覧表示へ戻る</a>

            </div>


            
            <div class="container">
                <div class="row">

                   @foreach($items as $item)
                    <div class="col-md-3" >
                     <div class="card" style="width: 15rem; margin-top: 30px;">
                     {{$item->item_title}}
                     <a href="{{ url('home/'.$item->id) }}" class="btn btn-primary">詳細を見に行く</a>
                    @if($item->sold_check !== null)
                        <p>売り切れです</p>
                    @endif

                        <img class="bd-placeholder-img card-img-top" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/><text fill="#dee2e6" dy=".3em" x="50%" y="50%"></text></svg>
                        <!-- <div class="card-body">
                            <h5 class="card-title">{{$item->item_title}}</h5>
                            
                             <a href="{{ url('home/'.$item->id) }}" class="btn btn-primary">Go somewhere</a>
                            
                        </div> -->
                     </div>
                    </div>
                    @endforeach

                    <div style='margin-top: 30px'>
                    {{ $items->links() }}
                    </div>
                    
                    

                </div>
            </div>
            
            
        </div>
    </div>
</div>
@endsection
