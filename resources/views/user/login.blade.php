@extends('layouts.default')

@section('header')
	@parent
	<p>Тавтай морил, хэрэглэгчийн хэсэгтээ нэвтрэнэ үү.</p>
@endsection

@section('content')
	@include('errors.errors')
	@include('modules.user.login')
	<h3>Би нууц үгээ мартжээ:</h3>
	<p>Санаа бүү зов <a href="{!!url('user/reset/password')!!}">энд дараад</a> шинэ нууц үг үүсгэж болно.
@endsection