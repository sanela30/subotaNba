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
        <li><a href="{{route('single-player',['player_id'=>$player->id])}}">
        {{$player->first_name}} {{$player->last_name}}
        </a> </li>
  @endforeach
</ul>
@if(count($team->comments))
        <hr/>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach($team->comments as $comment)
                <li>
                    <p>
                        {{ $comment->content }}
                    </p>
                </li>
            @endforeach
        </ul>
  @endif
    <h4>Post a comment</h4>
  <form method="POST" action="{{ route('comments-team', ['team_id' => $team->id]) }}">

       {{ csrf_field() }}

       <div class="form-group">
            <label for="content">Comment:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

   </form>


@endsection