@extends('layouts.app')

@section('title', 'View Products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Products</div>

                    <div class="panel-body">

                       @foreach($filtered as $s)

                            <div class="panel-heading resume-heading">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-xs-12 col-sm-4">
                                            <figure>
                                                <img class="img-circle img-responsive" alt="" src="">
                                            </figure>



                                        </div>

                                        <div class="col-xs-12 col-sm-8">
                                            <div style="text-align: right; font-style: italic">
                                                entered by {{$s->user['name']}}
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <a href="productsViewAdmin/{{ $s->id }}">
                                                        {{ $s->product_name }}
                                                    </a>

                                                </li>
                                                <li class="list-group-item">
                                                    {{ $s->link }}
                                                </li>
                                                <li class="list-group-item">
                                                    {{ $s->image }}
                                                </li>
                                                <li class="list-group-item">
                                                    Sort Order = {{ $s->sort_order }}
                                                </li>

                                                <li class="list-group-item">

                                                    {{ $s->sub_menu_id }}


                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection