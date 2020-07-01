@extends('layouts.layout')

@section('container')
    @parent

  
    @section('content')
    <div class="col-md-9">
    <div class="text-center mb-3">-会員情報-</div>
        <table class="table table-primary">
            
            <tbody>
                <tr>
                    <th scope="row">id</th>
                    <td>{{$person->id}}</td>
                </tr>
                <tr>
                    <th scope="row">name</th>
                    <td>{{$person->name}}</td>
                </tr>
                <tr>
                    <th scope="row">email</th>
                    <td>{{$person->email}}</td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-warning" href="{{ route('user.edit') }}" role="button">編集</a>
        <a class="btn btn-danger" href="{{ route('user.delete') }}" role="button">削除</a>
        
        
        
    </div>
  
  @endsection

  @section('footer')
  @parent
  @endsection


@endsection

