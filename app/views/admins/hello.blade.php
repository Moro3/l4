@extends('layouts.master')

@section('content')

	<div class="welcome">
		<? image_tag('maika.png') ?>
		<h1>Это майка.</h1>
	</div>

	<div class="form-group has-success">
	  <label class="control-label" for="inputSuccess1">Input with success</label>
	  <input type="text" class="form-control" id="inputSuccess1">
	</div>
	<div class="form-group has-warning">
	  <label class="control-label" for="inputWarning1">Input with warning</label>
	  <input type="text" class="form-control" id="inputWarning1">
	</div>
	<div class="form-group has-error">
	  <label class="control-label" for="inputError1">Input with error</label>
	  <input type="text" class="form-control" id="inputError1">
	</div>

	<!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>


@stop