@extends('layouts/default')
@section('content')
<div class='markdown'></div>
<form action="{{route('vocabulary.create')}}" method="get">
    <input type="datetime" name="date" id="date">
    <textarea name="markdown" id="markdown" cols="30" rows="10"></textarea>
    <button id='submit'>click</button>
</form>
@endsection
