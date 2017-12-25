@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <!-- Example row of columns -->
        <div class="row col-lg-12 col-md-12 col-sm-12" style="background-color: white;" >

            <form method="post" action="{{ route('projects.update',[$project->id]) }}">
              {{ csrf_field() }}

              <input type="hidden" name="_method" value="put">
                <div class="form-group">
                  <label for="project-name">Name<span class="requird">*</span></label>
                  <input placeholder="Enter Name"
                         id="project-name"
                         requird
                         name="name"
                         spellcheck="false"
                         class="form-control"
                         value="{{ $project->name }}" />
                   
                </div>
                <div class="form-group">
                  <label for="project-content">Description</label>
                  <textarea placeholder="Enter description"
                            style="resize: vertical"
                            id="project-content"
                            name="description"
                            rows="5"
                            spellcheck="false"
                            class="form-control autosize-target text-left">
                            {{ $project->description }}
                  </textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-info" value="submit" />
                </div>

            </form>

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
              <li><a href="/projects/{{ $project->id }}">View projects</a></li>
              <li><a href="/projects">All Projects</a></li>
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

