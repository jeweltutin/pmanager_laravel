@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
  <div class="panel panel-primary">
    <a href="projects/create" style="margin-top: 5px; margin-right:5px;" class="btn btn-success btn-sm pull-right" >Create new</a>
    <div class="panel-heading">
      <h3 class="panel-title">Projects</h3>     
    </div>
    <div class="panel-body">
      <ul class="list-group">
        @foreach($projects as $project)
          <li class="list-group-item"><a href="/projects/{{ $project->id }}">{{ $project->name }}</a></li> 
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection