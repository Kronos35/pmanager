@extends('layouts.app')
@section('content')

<div class="panel panel-default col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-3">
  <div class="panel-heading">
    Projects
  </div>
  <div class="panel-body">
    <p class="card-text">
      <ul class="list-group">
      @foreach($projects as $project)
        <li class="list-group-item">
          <a href="/projects/{{$project->id}}">
            {{$project->name}}
          </a>
        </li>
      @endforeach
    </p>
    <a class="pull-right btn btn-primary" href="/projects/create">Add Project</a>
  </div>
</div>
@endsection