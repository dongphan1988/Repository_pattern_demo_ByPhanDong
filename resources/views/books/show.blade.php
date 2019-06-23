@extends('master')
@section('title','book show')
@section('name_page','book show')
@section('content')
    <div class="name-card">
        <div class="name-card__content-left">
            <img width="300" alt="Angular Logo"
                 src="{{asset('storage/'.$book->image)}}"
                 class="name-card__avatar">
        </div>
        <div class="name-card__content-right">
            <h3 class="name-card__heading">{{$book->title}}</h3>
            <p class="name-card__text">{{ $book->description }}</p>
            <p class="name-card__text">{{ $book->price }}</p>
            <p class="name-card__text">{{ $book->qty }}</p>
            <p class="name-card__text">{{ $book->category->name}}</p>
        </div>
    </div>
    @endsection