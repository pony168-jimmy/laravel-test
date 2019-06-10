@extends('layouts/default')
@section('content')
    {{ route('help',['id' => 1]).'<br>' }}
    {{ url('help') }}
@endsection