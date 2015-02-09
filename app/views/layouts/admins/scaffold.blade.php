<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
        <?= stylesheet_link_tag('admin') ?>
        <?= javascript_include_tag('admin') ?>
    </head>

    <body>

        
        <div class="block-all">            
            <div class="block-top">
                <div class="container">
                    ...top...
                </div>
            </div>
            <div class="block-main">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 block-info">
                            'layouts.admins.top'                    
                            @include('layouts.admins.top');                            
                        </div>
                    </div>

                    @if (Session::has('message'))
                    <div class="row">
                        <div class="col-xs-12 col-md-12 block-message">                    
                            
                                <div class="flash alert">
                                    <p>{{ Session::get('message') }}</p>
                                </div>                        
                                               
                        </div>
                    </div>
                    @endif             

                    <div class="row">
                        <div class="col-xs-12 col-md-12 block-nav-top">
                            'layouts.admins.nav.top'                    
                            @include('layouts.admins.nav.top');                            
                        </div>
                    </div>

            
                
                    <div class="row">
                        <div class="col-xs-12 visible-xs block-nav-menu">
                            'layouts.admins.nav.menu'                    
                            @include('layouts.admins.nav.menu');
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 hidden-xs block-nav-menu">
                            'layouts.admins.nav.menu'                    
                            @include('layouts.admins.nav.menu');                            
                        </div>

                        <div class="col-xs-12 col-md-10 block-nav-submenu">
                            'layouts.admins.nav.submenu'                    
                            @include('layouts.admins.nav.submenu');                            
                        </div>
                        <div class="col-xs-12 col-md-10 block-content">
                            'layouts.admins.content'                    
                            @yield('main')

                            {{ $main }}

                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                
                <!--
                <div class="row">                
                        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                          <div class="container block-footer">
                            ...
                          </div>
                        </nav>                
                </div>
                -->
                </div>
            
            </div>

        </div>   
                
        <div class="block-footer">
            <div class="container">

            </div>
        </div>       
                               
                
           

    </body>

</html>