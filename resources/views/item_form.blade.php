@extends('layouts.app')

@section('content')
<!-- パソコン用 -->
<div class="container d-none d-lg-block">
	<form 
		method="post"
		action="{{ route('upload_item') }}"
		enctype="multipart/form-data"
	>
	@csrf

    <div class="row justify-content-center">
				<div class="card  col-lg-8 col-sm-12" style="width: 18rem; height:200px;">
					<div class="card-body mt-4">
						<h5 class="card-title">商品画像 <span class="badge badge-pill badge-danger">必須</span> </h5>
						<p class="card-text">商品の写真をアップロードしてください（最大５枚まで）</p>
						<input type="file" name="image" accept="image/png, image/jpeg"/>
						@if ($errors->first('image'))   
								<p class="validation text-danger">※{{$errors->first('image')}}</p>
						@endif
					</div>
				</div>
		</div>

		<div class="row justify-content-center">
			<div class="card  col-lg-8 col-sm-12" style="width: 18rem; ">
				<div class="card-body mt-4">

					<div class="form-group ">
					  <label  for="a"><h5 class="card-title">商品名 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="a" type="text" name="item_title" class="form-control" placeholder="（例 わかりやすい英文法">
						<small id="text" class="form-text text-muted">40字以内で記載して下さい</small>
						@if ($errors->first('item_title'))   
								<p class="validation text-danger">※{{$errors->first('item_title')}}</p>
						@endif

					</div>

					<div class="form-group mt-5">
					  <label  for="b"><h5 class="card-title">商品説明 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<textarea  id="b"  name="item_explanation" class="form-control" placeholder="（例 わかりやすい英文法" style="height: 200px;"></textarea>
						<small id="text" class="form-text text-muted">1000字以内で記載して下さい</small>
						@if ($errors->first('item_explanation'))   
								<p class="validation text-danger">※{{$errors->first('item_explanation')}}</p>
						@endif
					</div>
					
					<div class="form-group my-5" >
					  <label  for="c"><h5 class="card-title">商品の状態 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<select  id="c"  name="item_state" class="form-control" required>
							<option value="" >選択して下さい</option>
							<option value="書き込みなし">書き込みなし</option>
							<option value="少し書き込みあり">少し書き込みあり</option>
							<option value="書き込みあり">書き込みあり</option>
						</select>
					</div>

					<div class="form-group">
					  <label  for="d"><h5 class="card-title">教科書使用している大学名 </h5></label>
						<input  id="d" type="text" name="school_name" class="form-control" placeholder="（例 東京大学 ">
						<small id="text" class="form-text text-muted">大学名を記載してください</small>
					</div>

				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="card  col-lg-8 col-sm-12" style="width: 18rem; ">
				<div class="card-body mt-4">

					<div class="form-group">
					  <label  for="e"><h5 class="card-title">価格 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="e" type="number" name="price" class="form-control" placeholder="¥300~">
						<small id="text" class="form-text text-muted">※半角数字のみで記入して下さい。 また、販売手数料として10%が引かれます</small>
						@if ($errors->first('price'))   
								<p class="validation text-danger">※{{$errors->first('price')}}</p>
						@endif
					</div>

					<div class="form-group my-5" >
					  <label  for="f"><h5 class="card-title">配送料の負担 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<select  id="f"  name="shipping" class="form-control"  required>
							<option value="">選択して下さい</option>
							<option value="送料込み（出品者負担）">送料込み（出品者負担）</option>
							<option value="着払い（購入者負担）">着払い（購入者負担）</option>
						</select>
					</div>

					<div class="form-group">
					  <label  for="g"><h5 class="card-title">発送元 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="g" type="text" name="from_where" class="form-control" placeholder="（例 東京都">
						<small id="text" class="form-text text-muted">都道府県名を記載して下さい</small>
						@if ($errors->first('from_where'))   
								<p class="validation text-danger">※{{$errors->first('from_where')}}</p>
						@endif
					</div>
					
				</div>
			</div>
		</div>

		<div class="row justify-content-center my-5">
		  <div class="card" style="width: 18rem; ">
				<input type="submit" value="商品を出品する" class="btn btn-outline-success">	
			</div>
		</div>

		<div class="row justify-content-center my-3">
			<a href="/home" >もどる</a>
		</div>

  </div>
	
 </form>
</div>


<!-- スマホ用 -->
<div class="container d-block d-lg-none">
	<form 
		method="post"
		action="{{ route('upload_item') }}"
		enctype="multipart/form-data"
	>
	@csrf

		<div class="row justify-content-center ">
				<div class="card  col-lg-8 col-sm-12" style="width: 18rem; height:200px;">
					<div class="card-body mt-4">
						<h5 class="card-title" style="font-size:20px;">商品画像 <span class="badge badge-pill badge-danger">必須</span> </h5>
						<p class="card-text" style="font-size:13px;">商品の写真をアップロードしてください（最大５枚まで）</p>
						<input type="file" style="font-size:13px;" name="image" accept="image/png, image/jpeg"/>
						@if ($errors->first('image'))   
								<p class="validation text-danger">※{{$errors->first('image')}}</p>
						@endif
					</div>
				</div>
		</div>

		<div class="row justify-content-center">
			<div class="card  col-lg-8 col-sm-12" style="width: 18rem; ">
				<div class="card-body mt-4">

					<div class="form-group ">
					  <label  for="a"><h5 class="card-title">商品名 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="a" type="text" name="item_title" class="form-control" placeholder="（例 わかりやすい英文法">
						<small id="text" class="form-text text-muted">40字以内で記載して下さい</small>
						@if ($errors->first('item_title'))   
								<p class="validation text-danger">※{{$errors->first('item_title')}}</p>
						@endif

					</div>

					<div class="form-group mt-5">
					  <label  for="b"><h5 class="card-title">商品説明 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<textarea  id="b"  name="item_explanation" class="form-control" placeholder="（例 わかりやすい英文法" style="height: 200px;"></textarea>
						<small id="text" class="form-text text-muted">1000字以内で記載して下さい</small>
						@if ($errors->first('item_explanation'))   
								<p class="validation text-danger">※{{$errors->first('item_explanation')}}</p>
						@endif
					</div>
					
					<div class="form-group my-5" >
					  <label  for="c"><h5 class="card-title">商品の状態 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<select  id="c"  name="item_state" class="form-control" required>
							<option value="" >選択して下さい</option>
							<option value="書き込みなし">書き込みなし</option>
							<option value="少し書き込みあり">少し書き込みあり</option>
							<option value="書き込みあり">書き込みあり</option>
						</select>
					</div>

					<div class="form-group">
					  <label  for="d"><h5 class="card-title">教科書使用している大学名 </h5></label>
						<input  id="d" type="text" name="school_name" class="form-control" placeholder="（例 東京大学 ">
						<small id="text" class="form-text text-muted">大学名を記載してください</small>
					</div>

				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="card  col-lg-8 col-sm-12" style="width: 18rem; ">
				<div class="card-body mt-4">

					<div class="form-group">
					  <label  for="e"><h5 class="card-title">価格 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="e" type="number" name="price" class="form-control" placeholder="¥300~">
						<small id="text" class="form-text text-muted">※半角数字のみで記入して下さい。 また、販売手数料として10%が引かれます</small>
						@if ($errors->first('price'))   
								<p class="validation text-danger">※{{$errors->first('price')}}</p>
						@endif
					</div>

					<div class="form-group my-5" >
					  <label  for="f"><h5 class="card-title">配送料の負担 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<select  id="f"  name="shipping" class="form-control"  required>
							<option value="">選択して下さい</option>
							<option value="送料込み（出品者負担）">送料込み（出品者負担）</option>
							<option value="着払い（購入者負担）">着払い（購入者負担）</option>
						</select>
					</div>

					<div class="form-group">
					  <label  for="g"><h5 class="card-title">発送元 <span class="badge badge-pill badge-danger">必須</span> </h5></label>
						<input  id="g" type="text" name="from_where" class="form-control" placeholder="（例 東京都">
						<small id="text" class="form-text text-muted">都道府県名を記載して下さい</small>
						@if ($errors->first('from_where'))   
								<p class="validation text-danger">※{{$errors->first('from_where')}}</p>
						@endif
					</div>
					
				</div>
			</div>
		</div>

		<div class="row justify-content-center my-5">
		  <div class="card" style="width: 18rem; ">
				<input type="submit" value="商品を出品する" class="btn btn-outline-success">	
			</div>
		</div>

		<div class="row justify-content-center my-3">
			<a href="/home" >もどる</a>
		</div>

  </div>
	
 </form>
</div>


@endsection