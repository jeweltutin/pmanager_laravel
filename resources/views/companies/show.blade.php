@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="jumbotron">
          <h1>{{ $company->name }}</h1>
          <p class="lead">{{ $company->description }}</p>
          <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
        </div>

        <!-- Example row of columns -->
        <div style="padding: 0 0 10px 0 " class="col-md-12">
          <a class="btn btn-default pull-right  btn-sm" href="/projects/create/{{ $company->id }}">Add Project</a>
        </div>
        <div class="row">
        @foreach( $company->projects as $project)
            <div style="background-color: white;" class="col-md-4">
            <h2>{{ $project->name }}</h2>
            <p class="text-danger"> {{ $project->description}} </p>
            <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View details &raquo;</a></p>
          </div>
        @endforeach
        </div>
      </div>
      
      <div class="col-sm-3 col-md-3  pull-right">
          <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>-->
          <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">My Companies</a></li>
              <li><a href="/companies/create">Create new Company</a></li>
              <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
              <li>
                <a  href="#" onclick="var result = confirm('Are you sure you wish to delete this Company?');
                                        if( result ){
                                                event.preventDefault();
                                                document.getElementById('delete-form').submit();
                                        }">Delete
                </a>

                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}" 
                  method="POST" style="display: none;">
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
                </form>
              
              </li>
              <br />
              <li><a href="/projects/create/{{ $company->id }}">Add Project</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
@endsection

