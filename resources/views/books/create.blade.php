@extends('master')
@section('title','books create')
@section('name_page','books create')
@section('content')
    <form method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="form-group">name</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label class="form-group">description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-group">price</label>
            <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-group">qty</label>
            <input type="number" name="qty" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-group">category</label>
            <select name="category_id">
                @foreach($categories as $key => $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-outline-success" value="Create">
            <a href="{{route('books.index')}}">
                <input type="button" class="btn btn-outline-secondary" value="Back List">
            </a>

        </div>

    </form>
@endsection
