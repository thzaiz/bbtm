@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="menuViewAdmin"><h4>View Menu</h4></a>
                         </div>
                        <div class="col-sm-4">
                            <a href="menuAddAdmin"><h4>Add Menu</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Team</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="teamViewAdmin"><h4>View Staff</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="teamAddAdmin"><h4>Add Staff</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="productsViewAdmin"><h4>View Products</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="productsAddAdmin"><h4>Add Products</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Services</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="servicesViewAdmin"><h4>View Services</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="servicesAddAdmin"><h4>Add Services</h4></a>
                        </div>
                        <div class="col-sm-4">
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
