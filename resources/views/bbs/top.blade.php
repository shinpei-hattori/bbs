@extends('layouts.layout')

@section('container')
@parent
@section('content')
<div class="col-md-9">
    @foreach($items as $item)
    
        <div class="card mb-5">
        <div class="card-header">
            {{$item->cat_name}}
            <time class="float-right">{{$item->created_at}}</time>
        </div>
        <div class="card-body">
            <h5 class="card-title text-info">&lt;{{$item->title}}&gt;</h5>
            <p class="card-text">{{$item->content}}</p>
            <a href="{{ route('posts.show',['id' => $item->id]) }}" class="btn btn-primary">見に行く</a>
        </div>
        </div>
    @endforeach
    {{$items->links()}}
</div>
@endsection
@endsection