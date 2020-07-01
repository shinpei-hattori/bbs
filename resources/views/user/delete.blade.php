@extends('layouts.layout')

@section('container')
    @parent

  
    @section('content')
    <div class="col-md-9">
    <div class="alert alert-danger" role="alert">
    -本当に削除してよろしいですか？-
    </div>
    <form action="{{ route('user.remove') }}" method="post">
    @csrf
        <input type="submit" value="はい" class="btn btn-danger">
    </form>
       
        
        
        
    </div>
  
  @endsection

  @section('footer')
  @parent
  @endsection


@endsection

