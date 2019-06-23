@extends('master')
@section('title','books list')
@section('name_page','books list')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>price</th>
            <th>qty</th>
            <th>category</th>
            <th>image</th>
            <td></td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @if(count($books)==0)
            <p class="alert-danger">Not found</p>
            @else
        @foreach($books as $key=>$book)
        <tr>
            <th>{{$book->id}}</th>
            <th>{{$book->title}}</th>
            <th>{{$book->description}}</th>
            <th>{{$book->price}}</th>
            <th>{{$book->qty}}</th>
            <th>{{$book->category->name}}</th>
            <th>
                <img src="{{asset('storage/'.$book->image)}}" style="width: 150px" class="img-thumbnail">
            </th>
            <td></td>
            <td>
                <a href="{{route('books.delete',['id'=>$book->id])}}">
                    <button class="btn btn-outline-danger">DELETE</button>
                </a>
                <a href="{{route('books.edit',['id'=>$book->id])}}">
                    <button class="btn btn-outline-success">UPDATE</button>
                </a>
                <a href="{{route('books.show',['id'=>$book->id])}}">
                    <button class="btn btn-outline-secondary">SHOW</button>
                </a>
            </td>
        </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    @endsection