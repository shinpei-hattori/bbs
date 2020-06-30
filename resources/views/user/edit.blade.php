@extends('layouts.layout')

@section('container')
    @parent

  
    @section('content')
    <div class="col-9">
    <div class="text-center mb-3">-編集画面-</div>
    
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error) 
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('user.update') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">名前</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $person->name }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">メールアドレス</label>
            <input type="email" class="form-control" id="exampleFormControlInput2" name="email" value="{{ $person->email }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">パスワード</label>
            <input type="password" class="form-control" id="exampleFormControlInput3" name="password">
        </div>
        <input type="hidden" name="id" value="{{ $person->id }}">
        <button type="submit" class="btn btn-warning">変更する</button>
        
    </form>
    </div>
  
  @endsection

  @section('footer')
  @parent
  @endsection


@endsection