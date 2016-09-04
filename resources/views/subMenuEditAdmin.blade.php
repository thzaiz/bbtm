@extends('layouts.app')

@section('title', 'Edit SubMenu Item')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h2>edit sub menu</h2>
            <form method="post" action="/subMenuUpdate/{{ $id->id }}">
                {{ method_field('patch') }}

                <div class="form-group">
                    <label for="name">SubMenu Name:</label>
                    <input name="sub_menu_name" class="form-control" value="{{ $id->sub_menu_name }}"/>

                    <label for="link">Link:</label>
                    <input name="link" class="form-control" value="{{ $id->link }}"/>

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