@extends('layouts.admins.scaffold')

{{-- main --}}
@section('main')

<?php
    $adminPrefix = Config::get('dev.prefix');
    $adminControllerPrefix = Config::get('dev.controllerPrefix.admin');
?>
	Главная

{{ App::make('AdminController')->view_include(); }}
@stop