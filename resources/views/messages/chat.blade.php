@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">メッセージ</div>

        <div class="card-body">
        @foreach($messages as $message)

         @if(Auth::id() === $message->sender_id)
          <p style="background-color: red;">{{ $message->body }}</p>
         @else
          <p >{{ $message->body }}</p>
         @endif

        @endforeach
        
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 30px">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">メッセージ</div>

        <div class="card-body">
          <form method="POST" action="{{ url('/'.$item.'/chat/create') }}">
            @csrf
            <div class="form-group row">
              <label for="body" class="col-md-4 col-form-label text-md-right">内容</label>

              <div class="col-md-6">
                <input id="body" type="text" class="form-control" name="body" value="" required autofocus placeholder="メッセージを入力">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection