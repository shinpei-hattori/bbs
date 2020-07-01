@extends('layouts.layout')

@section('container')
    @parent


    @section('content')
    <div class="col-md-9">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error) 
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('posts.store') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">タイトル</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">カテゴリ</label>
            <select multiple class="form-control" id="exampleFormControlSelect2" name="cat_name">
            <option value="恋愛" @if(old('cat_name')=='恋愛') selected  @endif>恋愛</option>
            <option value="旅行" @if(old('cat_name')=='旅行') selected  @endif>旅行</option>
            <option value="ゲーム" @if(old('cat_name')=='ゲーム') selected  @endif>ゲーム</option>
            <option value="スポーツ" @if(old('cat_name')=='スポーツ') selected  @endif>スポーツ</option>
            <option value="機械" @if(old('cat_name')=='機械') selected  @endif>機械</option>
            <option value="仕事" @if(old('cat_name')=='仕事') selected  @endif>仕事</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">本文</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content" >{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">投稿</button>
    </form>
    </div>

    @endsection

  @section('footer')
  @parent
  @endsection


@endsection