@extends('master')
@section('title','books update')
@section('name_page','books update')
@section('content')
<form method="post" action="{{route('books.update',['id'=>$book->id])}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="form-group">name</label>
        <input type="text" name="title" class="form-control" value="{{$book->title}}">
    </div>

    <div class="form-group">
        <label class="form-group">description</label>
        <input type="text" name="description" class="form-control" value="{{$book->description}}">
    </div>
    <div class="form-group">
        <label class="form-group">price</label>
        <input type="number" name="price" class="form-control" value="{{$book->price}}">
    </div>
    <div class="form-group">
        <label class="form-group">qty</label>
        <input type="number" name="qty" class="form-control" value="{{$book->qty}}">
    </div>
    <div class="form-group">
        <label class="form-group">category</label>
        <select name="category_id">
            @foreach($categories as $key => $category)
                <option value="{{$category->id}}"
{{--                        @if($category->id == $book->category_id)--}}
{{--                            selected--}}
{{--                            @endif--}}
                        {{$category->id == $book->category_id ? "selected":""}}
                            >
                    {{$category->name}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>image</label>
        <input type="file" name="image" class="form-control">
    </div>
<div class="form-control">
    <input type="submit" class="btn btn-outline-success" value="update">
</div>

</form>
    @endsection
