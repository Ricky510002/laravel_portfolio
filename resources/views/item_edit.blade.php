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
<div class="container">

			<div class="row justify-content-center my-5 ">
				<h2>商品情報編集ページ</h2>
			</div>

			<form method="POST" action="{{ '/home/'.$item->id.'/item_update' }}" enctype="multipart/form-data">
			@csrf

			<div class="row justify-content-center my-5">

			<!-- パソコン用 -->
			<table class="table col-10 d-none d-lg-block">
			<thead class="thead-dark">
			<tr>
					<th scope="col" style="width:20%;"></th>
					<th scope="col" style="width:80%;"></th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th scope="row">商品名 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
							<input  id="a" type="text" name="item_title" class="form-control" placeholder="（例 わかりやすい英文法" value="{{ $item->item_title }}">
							<small id="text" class="form-text text-muted">40字以内で記載して下さい</small>
							@if ($errors->first('item_title'))   
									<p class="validation text-danger">※{{$errors->first('item_title')}}</p>
							@endif
				</td>
			</tr>

			
			<tr>
				<th scope="row">商品説明 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
						<textarea  id="b"  name="item_explanation" class="form-control" placeholder="（例 わかりやすい英文法" style="height: 200px; white-space: pre-wrap;" value="{{ $item->item_explanation }}">
						{{ $item->item_explanation }}
						</textarea>
						<small id="text" class="form-text text-muted">1000字以内で記載して下さい</small>
						@if ($errors->first('item_explanation'))   
								<p class="validation text-danger">※{{$errors->first('item_explanation')}}</p>
						@endif
				</td>
			</tr>

			<tr>
				<th scope="row">商品の状態 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
						<select  id="c"  name="item_state" class="form-control" value="{{ $item->item_state }}" required>
							<option value="" >選択して下さい</option>
							<option value="書き込みなし">書き込みなし</option>
							<option value="少し書き込みあり">少し書き込みあり</option>
							<option value="書き込みあり">書き込みあり</option>
						</select>
				</td>
			</tr>

			<tr>
				<th scope="row">教科書使用している大学名 </th>
				<td colspan="3">
						<input  id="d" type="text" name="school_name" class="form-control" placeholder="（例 東京大学 " value="{{ $item->school_name }}">
						<small id="text" class="form-text text-muted">大学名を記載してください</small>
				</td>
			</tr>

			<tr>
				<th scope="row">価格 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
						<input  id="e" type="number" name="price" class="form-control" placeholder="¥300~" value="{{ $item->price }}">
						<small id="text" class="form-text text-muted">※半角数字のみで記入して下さい。 また、販売手数料として10%が引かれます</small>
						@if ($errors->first('price'))   
								<p class="validation text-danger">※{{$errors->first('price')}}</p>
						@endif
				</td>
			</tr>

			<tr>
				<th scope="row">配送料の負担 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
						<select  id="f"  name="shipping" class="form-control"  required value="{{ $item->shipping }}">
							<option value="">選択して下さい</option>
							<option value="送料込み（出品者負担）">送料込み（出品者負担）</option>
							<option value="着払い（購入者負担）">着払い（購入者負担）</option>
						</select>
				</td>
			</tr>

			<tr>
				<th scope="row">発送元 <span class="badge badge-pill badge-danger">必須</span></th>
				<td colspan="3">
						<input  id="g" type="text" name="from_where" class="form-control" placeholder="（例 東京都" value="{{ $item->from_where }}">
						<small id="text" class="form-text text-muted">都道府県名を記載して下さい</small>
						@if ($errors->first('from_where'))   
								<p class="validation text-danger">※{{$errors->first('from_where')}}</p>
						@endif
				</td>
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
			<form method="POST" action="{{ '/home/'.$item->id.'/item_update' }}" enctype="multipart/form-data">
			@csrf

				<div class="card mx-3 border border-secondary d-block d-lg-none" style="width: 100%;">
					<div class="card-header text-white bg-dark">
						
					</div>
					<ul class="list-group list-group-flush">

						<li class="list-group-item font-weight-bold">商品名 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
							<input  id="a" type="text" name="item_title" class="form-control" placeholder="（例 わかりやすい英文法" value="{{ $item->item_title }}">
								<small id="text" class="form-text text-muted">40字以内で記載して下さい</small>
								@if ($errors->first('item_title'))   
										<p class="validation text-danger">※{{$errors->first('item_title')}}</p>
								@endif
						</li>

						
						<li class="list-group-item font-weight-bold">商品説明 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
								<textarea  id="b"  name="item_explanation" class="form-control" placeholder="（例 わかりやすい英文法" style="height: 200px; white-space: pre-wrap;" value="{{ $item->item_explanation }}">
								{{ $item->item_explanation }}
								</textarea>
								<small id="text" class="form-text text-muted">1000字以内で記載して下さい</small>
								@if ($errors->first('item_explanation'))   
										<p class="validation text-danger">※{{$errors->first('item_explanation')}}</p>
								@endif
						</li>

						<li class="list-group-item font-weight-bold">商品の状態 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
								<select  id="c"  name="item_state" class="form-control" value="{{ $item->item_state }}" required>
									<option value="" >選択して下さい</option>
									<option value="書き込みなし">書き込みなし</option>
									<option value="少し書き込みあり">少し書き込みあり</option>
									<option value="書き込みあり">書き込みあり</option>
								</select>
						</li>

						<li class="list-group-item font-weight-bold">教科書使用している大学名 </li>
						<li class="list-group-item bg-light">
								<input  id="d" type="text" name="school_name" class="form-control" placeholder="（例 東京大学 " value="{{ $item->school_name }}">
								<small id="text" class="form-text text-muted">大学名を記載してください</small>
						</li>

						<li class="list-group-item font-weight-bold">価格 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
								<input  id="e" type="number" name="price" class="form-control" placeholder="¥300~" value="{{ $item->price}}">
								<small id="text" class="form-text text-muted">※半角数字のみで記入して下さい。 また、販売手数料として10%が引かれます</small>
								@if ($errors->first('price'))   
										<p class="validation text-danger">※{{$errors->first('price')}}</p>
								@endif
						</li>

						<li class="list-group-item font-weight-bold">配送料の負担 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
								<select  id="f"  name="shipping" class="form-control" value="{{ $item->shipping }}" required>
									<option value="">選択して下さい</option>
									<option value="送料込み（出品者負担）">送料込み（出品者負担）</option>
									<option value="着払い（購入者負担）">着払い（購入者負担）</option>
								</select>
						</li>

						<li class="list-group-item font-weight-bold">発送元 <span class="badge badge-pill badge-danger">必須</span></li>
						<li class="list-group-item bg-light">
								<input  id="g" type="text" name="from_where" class="form-control" placeholder="（例 東京都" value="{{ $item-> from_where}}">
								<small id="text" class="form-text text-muted">都道府県名を記載して下さい</small>
								@if ($errors->first('from_where'))   
										<p class="validation text-danger">※{{$errors->first('from_where')}}</p>
								@endif
						</li>


						<li class="list-group-item">
							<button class="btn btn-outline-success  px-5 py-3" style="width:100%;" type="submit">更新</button>
						</li>

					</ul>
				</div>


			</form> 
</div>



@endsection