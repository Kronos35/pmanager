@extends('layouts.app')
@section('content')

<div class="card col-md-6 col-lg-6 col-md-offset-2 col-lg-offset-3">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
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
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection