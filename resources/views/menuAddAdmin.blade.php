@extends('layouts.app')

@section('title', 'Add Menu')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Menu Item</div>

                    <div class="panel-body">
                        <form method="post" action="menuAddInsert">

                            <div class="form-group">
                                <label for="menu_name">Menu Name:</label>
                                <input name="menu_name" class="form-control" />

                                <label for="link">Link:</label>
                                <input name="link" class="form-control" />

                                <label for="image">Image:</label>
                                <input name="image" class="form-control" />

                                <label for="sort_order">Sort Order:</label>
                                <input name="sort_order" class="form-control" type="number" />

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Menu</button>
                            </div>
                        </form>
                        @if (count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection