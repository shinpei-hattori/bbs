@extends('layouts.layout')

@section('container')
    @parent

  
    @section('content')
    <div class="col-9">
        <div class="card mb-5">
            <div class="card-header">
                {{$posts->cat_name}}
                <time class="float-right">{{$posts->created_at}}</time>
            </div>
            <div class="card-body">
                <h5 class="card-title text-info">&lt;{{$posts->title}}&gt;</h5>
                <p class="card-text">{{$posts->content}}</p>
            </div>
        </div>

        @foreach($comments as $comment)
        <div class="card border border-info mb-2">
            <div class="card-body">
                <time class="float-right">{{$comment->created_at}}</time>
                <h5 class="card-title">user_id : {{$comment->user_id}}</h5>
                <p class="card-text">{{$comment->comment}}</p>
            </div>
        </div>
            @if($user_id === $comment->user_id)
            <a href="{{ route('posts.comment.delete',['id' => $comment->id,'post_id'=>$comment->post_id]) }}" class="btn btn-danger mb-2">削除</a>
            @endif
        @endforeach
        {{$comments->links()}}
        <form action="{{ route('posts.commentAdd') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1">コメントしよう！</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                <input type="hidden" name="post_id" value="{{$posts->id}}">
                <input type="hidden" name="user_id" value="{{$user_id}}">
                
            </div>
            <button type="submit" class="btn btn-primary">投稿</button>
        </form>
        <br>

        
    </div>
  </div>
  @endsection

  @section('footer')
  @parent
  @endsection


@endsection