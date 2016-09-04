@extends('layouts.app')

@section('title', 'View Staff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">View Staff</div>

                    <div class="panel-body">
                        <h1>There's no "I" in "TEAM"</h1>



                       @foreach($filtered as $s)

                            <div class="panel-heading resume-heading">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-xs-12 col-sm-4">
                                            <figure>
                                                <img class="img-circle img-responsive" alt="" src="images/staff/{{ $s->image }}">
                                            </figure>



                                        </div>

                                        <div class="col-xs-12 col-sm-8">
                                            <div style="text-align: right; font-style: italic">
                                                entered by {{$s->user['name']}}
                                            </div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <a href="teamViewAdmin/{{ $s->id }}">
                                                        {{ $s->name }}
                                                    </a>
                                                </li>
                                                <li class="list-group-item">
                                                    {{ $s->title }}
                                                </li>
                                                <li class="list-group-item">
                                                    Sort Order = {{ $s->sort_order }}
                                                </li>
                                                <li class="list-group-item">
                                                    {{ $s->description }}
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