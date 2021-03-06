@extends('layouts.app')
@section('content')

<div class="panel panel-default col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-3">
  <div class="panel-heading">
    Companies
  </div>
  <div class="panel-body">
    <p class="card-text">
      <ul class="list-group">
      @foreach($companies as $company)
        <li class="list-group-item">
          <a href="/companies/{{$company->id}}">
            {{$company->name}}
          </a>
        </li>
      @endforeach
    </p>
    <a class="pull-right btn btn-primary" href="/companies/create">Add Company</a>
  </div>
</div>
@endsection