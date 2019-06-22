@extends('master')
@section('title','delete')
@section('name_page','DELETE BOOK')
@section('content')
    <div class="text-center">
        <h2 class="text-center text-danger">Do you want delete book's :
            <h3>{{$book->title}}</h3></h2>
        <a href="{{route('books.destroy',['id'=>$book->id])}}" >
            <button class="btn btn-outline-danger">OK</button>

        </a>
        <a href="{{route('books.index')}}">
            <button class="btn btn-outline-secondary">CANCEL</button>
        </a>
    </div>
    @endsection