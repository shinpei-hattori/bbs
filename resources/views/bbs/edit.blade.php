@extends('layouts.layout')

@section('container')
    @parent

  
    @section('content')
    <div class="col-md-9">
        <p class="text-center">-投稿履歴-</p>
        @foreach($posts as $post)
        <div class="card mb-1">
            <div class="card-header">
                {{$post->cat_name}}
                <!-- <a class="btn btn-primary float-right ml-2" href="#" role="button">Link</a> -->
                <time class="float-right">{{$post->created_at}}</time>
            </div>
            <div class="card-body">
                <h5 class="card-title text-info">&lt;{{$post->title}}&gt;</h5>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{ route('posts.show',['id' => $post->id]) }}" class="btn btn-primary">見る</a>
            </div>
        </div>
        <div class="text-right"><a class="btn btn-danger  mb-5" href="{{ route('posts.destroy',['id'=>$post->id]) }}" role="button">削除</a></div>
        @endforeach
        {{$posts->links()}}

        

        
    
  </div>
  @endsection

  @section('footer')
  @parent
  @endsection


@endsection