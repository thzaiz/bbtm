@extends('layouts.app')

@section('title', 'Edit Menu Item')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h2>edit menu item</h2>
            <form method="post" action="/menuUpdate/{{ $id->id }}">
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">Menu Name:</label>
                    <input name="menu_name" class="form-control" value="{{ $id->menu_name }}"/>

                    <label for="link">Link:</label>
                    <input name="link" class="form-control" value="{{ $id->link }}"/>

                    <label for="image">Image:</label>
                    <input name="image" class="form-control"  value="{{ $id->image }}"/>

                    <label for="sort_order">Sort Order:</label>
                    <input name="sort_order" class="form-control" type="number"  value="{{ $id->sort_order }}"/>

                    <label for="deleted">Deleted:</label>
                    <input name="deleted" class="form-control" type="number"  value="{{ $id->deleted }}"/>

                    <label for="menu_type">MenuType:</label>
                    <input name="menu_type" class="form-control" type="number"  value="{{ $id->menu_type }}"/>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>


        </div>
    </div>

@stop