@extends('layouts/application')

@section('title', '為你自己學 Laravel')

@section('main')
<h1>Hi</h1>
@if(count($name)>0)
  @foreach($name as $n)
    @if($loop->first || $loop->last)
      <li>
        <h2>{{$n}}</h2>
      </li>
    @else 
    <li><h3>{{$n}}</h3></li>
    @endif
  @endforeach
@endif
@endsection
