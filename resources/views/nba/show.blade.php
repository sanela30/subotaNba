 @extends('layouts.master')

@section('title')

Team

@endsection

@section('content')
  <p>{{$team->name}} </p>
  <p>{{$team->email}} </p>
  <p>{{$team->address}} </p>
  <p>{{$team->city}} </p>
<ul>
  @foreach($team->players as $player)
        <li><a href="{{route('single-player',['player_id'=>$player->id])}}">{{$player->first_name}} {{$player->last_name}}</a> </li>
  @endforeach
</ul>
@endsection