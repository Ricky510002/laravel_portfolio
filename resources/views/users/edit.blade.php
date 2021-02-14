@extends('layouts.app')

@section('content')
  @foreach($errors->all() as $message)
    <div>{{ $message }}</div>
  @endforeach

  @if(Session::has('message'))
    <div>{{ Session::get('message') }}</div>
  @endif

  

  <div class="container">
   <div class="row">
    <div class="col-md-8 ">

    <form method="POST" action="{{ route('users.update') }}">
    @csrf

          <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Profile</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">ユーザー名</th>
              <td><input name="name" type="text" value="{{ $user->name }}"></td>
            </tr>
            <tr>
              <th scope="row">メールアドレス</th>
              <td><input name="email" type="email" value="{{ $user->email }}"></td>
              
            </tr>
            <tr>
              <th scope="row">大学名</th>
              <td><input name="univ" type="text" value="{{ $user->univ }}"></td>
            
            </tr>
            <tr>
              <th scope="row">自己紹介</th>
              <td><textarea name="profile" cols="30" rows="10">{{ $user->profile }}</textarea></td>
            
            </tr>
          </tbody>
        </table>

     <button class="btn btn-success" type="submit">更新</button>
  </form>
  
@endsection