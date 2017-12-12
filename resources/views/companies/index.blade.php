@extends('layouts.app')

@section('content')
<div class="col-md-6 col-md-offset-3">
  <div class="panel panel-primary">
    <a href="companies/create" style="margin-top: 5px; margin-right:5px;" class="btn btn-success btn-sm pull-right" >Create new Company</a>
    <div class="panel-heading">
      <h3 class="panel-title">Companies</h3>     
    </div>
    <div class="panel-body">
      <ul class="list-group">
        @foreach($companies as $company)
          <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li> 
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection