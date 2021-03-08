@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center my-5">

    <div class="col-lg-8 col-md-8 col-sm-12">
    <!-- パソコン用 -->
      <div class="card d-none d-lg-block">
      
        <div class="card-header " style="height: 100px;">
          <h2 class="pt-3">{{ ($item->item_title) }}</h2>
        </div>

        <div class="card-body container">
          <div class="row">
            <div class="col">
              <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">出品者：<a href="{{ '/user/'.$item->user->id }}">{{ ($item->user->name) }}</a></li>
                <li class="list-group-item">商品名：{{ ($item->item_title) }}</li>
                <li class="list-group-item">教科書使用している大学名：<br>{{ ($item->school_name) }}</li>
                <li class="list-group-item">商品の状態： {{ ($item->item_state) }}</li>
                <li class="list-group-item">発送場所：{{ ($item->from_where) }}</li>
              </ul>
            </div>
            
            </div>

          
          </div>

        <div class="row">
         <h5 class="mt-5">商品説明</h5>
        </div>

        <div class="row">
         <p>{{ ($item->item_explanation) }}</p>
        </div>

        <div class="row justify-content-center">
          <h1>¥{{ ($item->price) }}</h1>
          <p class="mt-2 ml-3 pt-2 ">{{ ($item->shipping) }}</p>
        </div>

        </div>
        
      </div>

      <!-- スマホ用 -->
      <div class="card d-block d-lg-none">
      
      <div class="card-header " style="height: 100px;">
        <h2 class="pt-3">{{ ($item->item_title) }}</h2>
      </div>

      <div class="card-body container">

        <div class="card" style="width: 100%;">
            <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">

          
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">出品者：<a href="{{ '/user/'.$item->user->id }}">{{ ($item->user->name) }}</a></li>
                  <li class="list-group-item">商品名：{{ ($item->item_title) }}</li>
                  <li class="list-group-item">教科書使用している大学名：<br>{{ ($item->school_name) }}</li>
                  <li class="list-group-item">商品の状態： {{ ($item->item_state) }}</li>
                  <li class="list-group-item">発送場所：{{ ($item->from_where) }}</li>
                  <li class="list-group-item" style="min-height:200px;">商品説明<br>{{ ($item->item_explanation) }}</li>
                </ul>
        
        </div>
 
      </div>

      <div class="row justify-content-center">
        <h1>¥{{ ($item->price) }}</h1>
        <p class="mt-2 ml-3 pt-2 ">{{ ($item->shipping) }}</p>
      </div>

      </div>
      
      @if(Auth::id() !== $item->user_id)
        <!-- <a href="{{ url('/sample/'.$item->id) }}" class="btn btn-outline-dark py-3 mt-4">購入画面へ進む</a> -->
        <div class="row justify-content-center my-5">

        @if($item->sold_check !== null)
             <a href="#" class="btn btn-danger ">Sold out</a>
         @else
            <form action="{{ asset('/pay') }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" value="{{$item->price}}" name="price">
              <input type="hidden" value="{{$item->id}}" name="item_id">
              <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
              data-key="pk_test_51IQ1qOIifUdmh3jmtXsFzfqPTx4P6a0BvPkDtLi8DgcRxIDNQo9eWp7UJgcEgD4DuJlmpN08HfmYNM1GMdm6Uc5C00DUNqjEFr"
                  data-amount="{{$item->price}}" data-name="Stripe決済" data-label="決済をする" 
                  data-locale="auto"
                  data-currency="JPY">
              </script>
            </form>
          @endif
        </div>
      @endif

      @if(Auth::id() === $item->user_id)
      <div class="row justify-content-end my-5 ">
          <a class="btn btn-outline-success " href="{{ url('home/'.$item->id.'/item_edit') }}" role="button">編集</a>
          
            
            <!-- <form method="POST" action="{{ url('home/'.$item->id.'/item_delete') }}">
            @csrf -->
            <button  class="btn btn-outline-danger mx-3" data-toggle="modal" data-target="#testModal">削除</button>
            <!-- </form> -->

          <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">削除確認画面</h4>
                        </div>
                        <div class="modal-body">
                            <label>本当に商品を削除しますか？ <br><small>※一度削除すると元に戻せません。</small></label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                            
                            <form method="POST" action="{{ url('home/'.$item->id.'/item_delete') }}">
                            @csrf
                            <button type="submit" type="button" class="btn btn-danger">削除</button>
                            </form>

                        </div>
                    </div>
                </div>
          </div>

          
      </div>
      @endif


    </div>

    </div>
  </div>
</div>
@endsection