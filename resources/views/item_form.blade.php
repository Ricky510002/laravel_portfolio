@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@extends('layouts.app')

@section('content')
<form 
	method="post"
	action="{{ route('upload_image') }}"
	enctype="multipart/form-data"
>
	@csrf
	<input type="file" name="image" accept="image/png, image/jpeg"/>
	<input type="submit" value="Upload"><br>
</form>

<form action="">
	<label for="a">商品名：</label><input  id="a" type="text" name="item_title"><br>
	<label for="b">値段：</label><input  id="b" type="number" name="price"><br>
	<label for="c">商品説明</label><br>
	<textarea  id="c"  name="item_explanation"></textarea><br>
	<label for="d">商品の状態：</label><br>
	<select  id="d"  name="item_state"><br>
		<option value="1">書き込みなし</option>
		<option value="2">少し書き込みあり</option>
		<option value="3">書き込みあり</option>
	</select><br>
	<label for="e">教科書使用している大学名：</label><input  id="e" type="text" name="school_name"><br>
	<label for="f">送料：</label><input  id="f" type="number" name="shipping"><br>
	<label for="g">発送元：</label><input  id="g" type="text" name="from_where"><br>

 <input type="submit" value="商品を出品する">
</form>



@endsection