@extends('layout.app')
@section('content')

        <h1>{{$title}}</h1>
        @if(count($numbers)>0)
        <ul class="list-group">
                @foreach ($numbers as $n)
                    <li class="list-group-item">{{$n}}</li>
                    
                @endforeach
         @endif
        @endsection