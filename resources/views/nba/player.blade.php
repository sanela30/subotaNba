@extends('layouts.master')

@section('title')

Player

@endsection

@section('content')
  <p>{{$player->first_name}} </p>
  <p>{{$player->last_name}} </p>
  <p><a href="{{route('single-team',['id'=>$player->team->id])}}">{{$player->team->name}}</a> </p>

@endsection