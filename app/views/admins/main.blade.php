@extends('layouts.admin.scaffold')

<div class="welcome">
    Административная панель!
    <h1>Управление.</h1>
  </div>
@section('main')

<?php $adminPrefix = Config::get('admin.prefix');	?>
<div>
Модули:
<li><a href="{{{ URL::route($adminPrefix.'.goods') }}}">Товары</a></li>
</div>





@stop