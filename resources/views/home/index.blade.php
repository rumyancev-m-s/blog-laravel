@extends('register.layouts.layout')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Blog </b>Laravel</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Привет, {{ Auth::user()->name }}!</p>
            <a href="{{ route('logout.perform') }}">
                <button type="submit" class="btn btn-block btn-primary">Выйти</button>
            </a>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection