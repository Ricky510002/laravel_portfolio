@extends('layouts.app')

@section('content')

  
    
  <div class="container">
   <div class="row">
    <div class="col-md-8 ">
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
              <td>{{ ($user->name) }}</td>
            </tr>
            <tr>
              <th scope="row">メールアドレス</th>
              <td>{{ ($user->email) }}</td>
              
            </tr>
            <tr>
              <th scope="row">大学名</th>
              <td>{{ ($user->univ) }}</td>
            
            </tr>
            <tr>
              <th scope="row">自己紹介</th>
              <td>{{ ($user->profile) }}</td>
            
            </tr>
          </tbody>
        </table>

        <a class="btn btn-success" href="me" role="button">編集</a>
        
        <form method="POST" action="{{ route('delete' , $user->id) }}">
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>
        </form>

        <a class="btn btn-primary" href="/home" role="button">OK</a>


      </div>
    </div>
  </div>
  
@endsection