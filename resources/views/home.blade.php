@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       

            <div class="input-group " style="margin-top: 30px">
              <form action="/home/search/" method="GET" class="container mb-5">
              
                <div class="row ">
                  <input type="search" class="form-control col-8 ml-4" name="search" value="{{request('search')}}" placeholder="検索">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </span>
                    <div class="col-1"></div>
                    <!-- パソコン用 -->
                    <a type="button" class="col-2 d-none d-lg-block btn btn-outline-success btn-lg py-3" href="/item_form">出品</a>
                    <!-- スマホ用 -->
                    <a type="button" class="col-10 d-block d-lg-none btn btn-outline-success btn-lg py-3 m-4"  href="/item_form">出品</a>

                </div>
        


              </form>

            <!-- <a href="/home" class="btn btn-primary">一覧表示へ戻る</a> -->

            </div>

            <div class="container mt-3">
                <div class="row justify-content-center">
                    <h1>Items</h1>
                </div>
            </div>
            
            <div class="container mt-3 mb-5">
                <div class="row">

                    @foreach($items as $item)
                        <div class="col-lg-3 col-md-5 col-sm-5 " >
                            <div class="card border border-dark" style="width: 100%; margin-top: 30px;">

                             <!-- パソコン用 -->
                             <img class="bd-placeholder-img card-img-top d-none d-lg-block" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                            
                            <!-- スマホ用 -->
                            <img class="bd-placeholder-img card-img-top d-block d-lg-none" width="100%" height="300" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                           
                                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->item_title }}</h5>
                                    <h4>¥{{ $item->price}}</h4>
                                    @if($item->sold_check !== null)
                                    <a href="{{ url('/home/'.$item->id) }}" class="btn btn-danger ">Sold out</a>
                                    @else
                                    <a href="{{ url('/home/'.$item->id) }}" class="btn btn-outline-dark ">商品詳細へ</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style='margin-top: 30px'>
                    {{ $items->links() }}
                    </div>

                </div>
            </div>

            <div class="container my-5">
                <div class="row justify-content-center">
                    <h2>あなたにおすすすめの商品</h2>
                </div>
            </div>
            
            @isset($user_univ)
            <div class="container">
                <div class="row">

                    @foreach($recommend_items as $recommend_item)
                        <div class="col-lg-3 col-md-5 col-sm-5" >
                            <div class="card border border-dark" style="width: 100%; margin-top: 30px;">
                            <img class="bd-placeholder-img card-img-top " width="100%" height="180" 
                            src="{{ Storage::url($recommend_item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $recommend_item->item_title }}</h5>
                                    <p>¥{{ $recommend_item->price}}</p>

                                    @if($recommend_item->sold_check !== null)
                                    <a href="{{ url('/home/'.$recommend_item->id) }}" class="btn btn-danger ">Sold out</a>
                                    @else
                                    <a href="{{ url('/home/'.$recommend_item->id) }}" class="btn btn-outline-dark ">商品詳細へ</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style='margin-top: 30px'>
                    {{ $items->links() }}
                    </div>

                </div>
            </div>
            @else
            <p class="text-black-50 mb-5 mx-4">プロフィールで大学名を登録するとあなたにあった本が表示されます</p>
            @endisset


            
            
        </div>
    </div>
</div>
@endsection
