@extends('layouts.app')

@section('content')
  <div class="container">

        <div class="row justify-content-center my-5 ">
          <h1>Profile</h1>
        </div>
     <form method="POST" action="{{ route('users.update') }}">
     @csrf

    <div class="row justify-content-center my-5">
    
      <!-- パソコン用 -->
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
          <td colspan="3">
            <input name="name" type="text" value="{{ $user->name }}">
            @if ($errors->first('name'))   
								<p class="validation text-danger">※{{$errors->first('name')}}</p>
						@endif
          </td>
        </tr>
      
        @if(Auth::id() === $user->id)
        <tr>
          <th scope="row">メールアドレス</th>
          <td colspan="3">
            <input name="email" type="text" value="{{ $user->email }}">
            @if ($errors->first('email'))   
								<p class="validation text-danger">※{{$errors->first('email')}}</p>
						@endif
          </td>
        </tr>
        @endif

        <tr>
          <th scope="row">大学名<br><small class="text-black-50">大学名を記載すると本が探しやすくなります</small></th>
          <td colspan="3"><input name="univ" type="text" value="{{ $user->univ }}"></td>
        </tr>

        <tr class="border-bottom" style="height: 180px;">
          <th scope="row">自己紹介</th>
          <td colspan="3"><textarea name="profile" cols="30" rows="10" style="white-space: pre-wrap;">{{ $user->profile }}</textarea></td>
        </tr>

        <tr>
          <th>
            <button class="btn btn-outline-success ml-3 px-5 py-3" type="submit">更新</button>
          </th>
        </tr>

      </tbody>
    </table>
    </form> 

    <!-- スマホ用 -->
    <form method="POST" action="{{ route('users.update') }}">
    @csrf

      <div class="card  border border-secondary d-block d-lg-none" style="width: 100%;">
        <div class="card-header text-white bg-dark">
          Profile
        </div>
        <ul class="list-group list-group-flush">
        
          <li class="list-group-item font-weight-bold">ユーザー名</li>
          <li class="list-group-item bg-light">
            <input name="name" type="text" value="{{ $user->name }}">
              @if ($errors->first('name'))   
                  <p class="validation text-danger">※{{$errors->first('name')}}</p>
              @endif
          </li>

          @if(Auth::id() === $user->id)
          <li class="list-group-item font-weight-bold">メールアドレス</li>
          <li class="list-group-item bg-light">
            <input name="email" type="text" value="{{ $user->email }}">
              @if ($errors->first('email'))   
                  <p class="validation text-danger">※{{$errors->first('email')}}</p>
              @endif
          </li>
          @endif

          <li class="list-group-item font-weight-bold">大学名<br><small class="text-black-50">大学名を記載すると本が探しやすくなります</small></li>
          <li class="list-group-item bg-light">
            <input name="univ" type="text" value="{{ $user->univ }}">
          </li>

          <li class="list-group-item font-weight-bold">自己紹介</li>
          <li class="list-group-item bg-light" style="min-height:300px; ">
            <textarea name="profile" style="width:100%; height: 300px; white-space: pre-wrap;">{{ $user->profile }}</textarea>
          </li>

          <li class="list-group-item">
            <button class="btn btn-outline-success  px-5 py-3" style="width:100%;" type="submit">更新</button>
          </li>
        
        </ul>
      </div>


    </form> 
  </div>
  
@endsection