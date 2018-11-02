<?php
// if (isset($_POST["insert"])){
//     $file=
// }
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>General Manager - Hem+Kontor</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{asset('assets/scss/style.css')}}">
    <link href="{{asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">
    <!-- From forms-advanced -->

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.js')}}delivr.net/html5shiv/3.7.3/html5shiv.min.js')}}"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">General Manager</a>
                <a class="navbar-brand hidden" href="./">GM</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.blade.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Features</h3><!-- /.menu-title -->
                    <li class="">
                        <a href="#" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus"></i>Add Furniture</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Furniture</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Add Furniture</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('inc.messages') 
        <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add Furniture</strong> To Catalog
                      </div>
                      <div class="card-body card-block">
                      
                        {!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="row form-group">
                                <div class="col col-md-3">
                                {{Form::label('productCode', 'Product Code'), ['class' => 'form-control-label']}}</div>
                                <div class="col-12 col-md-9">
                                {{Form::text('productCode', '', ['class' => 'form-control', 'placeholder' => 'Product Code'])}}
                                <small class="form-text text-muted">Code of the Product</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                {{Form::label('productName', 'Product Name'), ['class' => 'form-control-label']}}</div>
                                <div class="col-12 col-md-9">
                                {{Form::text('productName', '', ['class' => 'form-control', 'placeholder' => 'Product Name'])}}
                                <small class="form-text text-muted">Name of the Product</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                {{Form::label('productDescription', 'Product Description'), ['class' => 'form-control-label']}}</div>
                                <div class="col-12 col-md-9">
                                {{Form::textarea('productDescription', '', ['class' => 'form-control', 'placeholder' => 'Product Description'])}}
                                <small class="form-text text-muted">Description of the Product</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                {{Form::label('productPrice', 'Product Price'), ['class' => 'form-control-label']}}</div>
                                <div class="col-12 col-md-9">
                                {{Form::number('productPrice', '', ['class' => 'form-control', 'placeholder' => 'Product Price'])}}
                                <small class="form-text text-muted">Selling Price of the Product</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                {{Form::label('bufferPeriod', 'Buffer Period'), ['class' => 'form-control-label']}}</div>
                                <div class="col-12 col-md-9">
                                {{Form::number('bufferPeriod', '', ['class' => 'form-control', 'placeholder' => 'Buffer Period'])}}
                                <small class="form-text text-muted">Max Days before this Product can be deliverved</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Product Image Preview</label></div>
                                <div class="col-12 col-md-9">
                                {{Form::file('cover_image')}}
                                </div>
                            </div>
                            

                      </div>
                      <div class="card-footer">
                        {{Form::submit('Submit' , ['class' => 'btn btn-primary btn-sm'])}}
                      </div>
                    </div>
                    
                    {!! Form::close() !!} 


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js')}}/1.12.3/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- From forms-advanced -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>


    <script src="{{asset('assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/widgets.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
