@extends('templates.base')
@section('title','formulaire')
@section('content')
  <h1>Bienvenue dans le formulaire</h1>
  {{ Form::open(array('formulaire' => 'FormulaireController@create')) }}
    {{Form::label('Title', 'Title')}}
    {{ Form::text('Title') }}
    {{Form::label('Description', 'Description')}}
    {{ Form::text('Description') }}
    <br>
    {{Form::label('Width', 'Width')}}
    {{ Form::text('Width') }}
    {{Form::label('Height', 'Height')}}
    {{ Form::text('Height') }}
    <br>
    {{Form::label('Price', 'Price')}}
    {{ Form::text('Price') }}
    <br>
    {{Form::label('Author', 'Author')}}
    {{ Form::text('Author') }}
    <br>
    {{ Form::submit('Send') }}
{{ Form::close() }}
@endsection
