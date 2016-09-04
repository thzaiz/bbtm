@extends('layouts.app')

@section('title', 'Edit Staff')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h2>edit staff</h2>
            <form method="post" action="/teamUpdate/{{ $id->id }}">
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" class="form-control" value="{{ $id->name }}"/>
                    <label for="title">Title:</label>
                    <input name="title" class="form-control" value="{{ $id->title }}"/>
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control">{{ $id->description }}</textarea>
                    <label for="image">Image:</label>
                    <input name="image" class="form-control"  value="{{ $id->image }}"/>
                    <label for="sort_order">Sort Order:</label>
                    <input name="sort_order" class="form-control" type="number"  value="{{ $id->sort_order }}"/>
                    <label for="sort_order">Deleted:</label>
                    <input name="deleted" class="form-control" type="number"  value="{{ $id->deleted }}"/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>


        </div>
    </div>

@stop