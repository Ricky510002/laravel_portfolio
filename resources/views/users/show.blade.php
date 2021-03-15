@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center my-5 ">
      <h1>Profile</h1>
    </div>

    <div class="row justify-content-center my-5 ">
      <!-- パソコン用テーブル -->
      <table class="table col-10 d-none d-lg-block">

      <thead class="thead-dark">
        <tr>
          <th scope="col" style="width:20%;"></th>
          <th scope="col" style="width:80%;">Profile</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">ユーザー名</th>
          <td colspan="3">{{ ($user->name) }}</td>
        </tr>
      
        @if(Auth::id() === $user->id)
        <tr>
          <th scope="row">メールアドレス</th>
          <td colspan="3">{{ ($user->email) }}</td>
        </tr>
        @endif

        <tr>
          <th scope="row">大学名<br><small class="text-black-50">大学名を記載すると本が探しやすくなります</small></th>
          <td colspan="3">{{ ($user->univ) }}</td>
        </tr>

        <tr class="border-bottom" style="height: 180px;">
          <th scope="row">自己紹介</th>
          <td colspan="3">{!! nl2br(e($user->profile)) !!}</td>
        </tr>
      </tbody>
    </table>

    <!-- スマホ用テーブル -->
    <div class="card mx-3 border border-secondary d-block d-lg-none" style="width: 100%;">
      <div class="card-header text-white bg-dark">
        Profile
      </div>
      <ul class="list-group list-group-flush">
       
        <li class="list-group-item font-weight-bold">ユーザー名</li>
        <li class="list-group-item bg-light">{{ ($user->name) }}</li>

        @if(Auth::id() === $user->id)
        <li class="list-group-item font-weight-bold">メールアドレス</li>
        <li class="list-group-item bg-light">{{ ($user->email) }}</li>
        @endif

        <li class="list-group-item font-weight-bold">大学名<br><small class="text-black-50">大学名を記載すると本が探しやすくなります</small></li>
        <li class="list-group-item bg-light">{{ ($user->univ) }}</li>

        <li class="list-group-item font-weight-bold">自己紹介</li>
        <li class="list-group-item bg-light" style="height:300px;">{!! nl2br(e($user->profile)) !!}</li>
       
      </ul>
    </div>


  </div>
   
  @if(Auth::id() === $user->id)
  <div class="row justify-content-end my-5">
     
        <a class="btn btn-outline-success" href="{{ route('users.edit', ['id' => auth()->user()->id]) }}" role="button">編集</a>
          
          <!-- <form method="POST" action="{{ route('delete' , $user->id) }}">
          @csrf -->
          <button  class="btn btn-outline-danger mr-5 ml-2" data-toggle="modal" data-target="#testModal">削除</button>
          <!-- </form> -->

          <div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">削除確認画面</h4>
                        </div>
                        <div class="modal-body">
                            <label>本当にアカウントを削除しますか？ <br><small>※一度削除すると元に戻せません。</small></label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                            
                            <form method="POST" action="{{ route('delete' , $user->id) }}">
                            @csrf
                            <button type="submit" type="button" class="btn btn-danger">削除</button>
                            </form>

                        </div>
                    </div>
                </div>
          </div>
      
  </div>
  @endif

  <div class="row justify-content-center" style="margin-top:200px;">
   <h2>出品物リスト</h2>
  </div>

  <div class="row ">

                    @foreach($items as $item)
                        <div class="col-lg-3 col-md-5 col-sm-5 " >
                            <div class="card border border-dark" style="width: 100%; margin-top: 30px;">
                            
                            <!-- パソコン用 -->
                            <img class="bd-placeholder-img card-img-top d-none d-lg-block" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                            
                            <!-- スマホ用 -->
                            <img class="bd-placeholder-img card-img-top d-block d-lg-none" width="100%" height="300" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->item_title }}</h5>
                                    <p>¥{{ $item->price}}</p>
                                    @if($item->sold_check !== null)
                                    <a href="#" class="btn btn-danger ">Sold out</a>
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

   @if(Auth::id() === $user->id)
   <div class="row justify-content-center " style="margin-top:250px;">
      <h2>取引中の商品</h2>
   </div>

  
  <div class="row">
                    <!-- 購入した商品 -->
                    @foreach($bought_items as $item)
                        <div class="col-lg-3 col-md-5 col-sm-5 " >
                            <div class="card border border-dark" style="width: 100%; margin-top: 30px;">
                            
                            <!-- パソコン用 -->
                            <img class="bd-placeholder-img card-img-top d-none d-lg-block" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                            
                            <!-- スマホ用 -->
                            <img class="bd-placeholder-img card-img-top d-block d-lg-none" width="100%" height="300" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->item_title }}</h5>
                                    
                                    
                                    <a href="{{ url('/message/'.$item->id) }}" class="btn btn-outline-dark ">メッセージページへ</a>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style='margin-top: 30px'>
                    {{ $items->links() }}
                    </div>


                    <!-- 購入された商品 -->
                    @foreach($was_bought_items as $item)
                        <div class="col-lg-3 col-md-5 col-sm-5 " >
                            <div class="card border border-dark" style="width: 100%; margin-top: 30px;">
                            
                            <!-- パソコン用 -->
                            <img class="bd-placeholder-img card-img-top d-none d-lg-block" width="100%" height="180" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                            
                            <!-- スマホ用 -->
                            <img class="bd-placeholder-img card-img-top d-block d-lg-none" width="100%" height="300" src="{{ Storage::url($item->file_path) }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                            
                                <div class="card-body">
                                    <h5 class="card-title text-dark">{{ $item->item_title }}</h5>
                                    
                                    
                                    <a href="{{ url('/message/'.$item->id) }}" class="btn btn-outline-dark ">メッセージページへ</a>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div style='margin-top: 30px'>
                    {{ $items->links() }}
                    </div>

   </div>
   @endif
    
   

</div>
      
    


 

  
  
@endsection