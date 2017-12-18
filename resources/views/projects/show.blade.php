@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="well well-lg">
          <h1>{{ $project->name }}</h1>
          <p class="lead">{{ $project->description }}</p>
          <!--<p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
        </div>

        <!-- Example row of columns -->
        <div style="padding: 0 0 10px 0 " class="col-md-12">
          <a class="btn btn-default pull-right  btn-sm" href="/projects/create">Add Project</a>
        </div>
        @include('partials/comments')
        <!--For Comment Form -->
        <div class="row container-fluid">
          <form method="post" action="{{ route('comments.store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="commentable_type" value="App\Project" />
                <input type="hidden" name="commentable_id" value="{{$project->id}}" />

                <div class="form-group">
                    <label for="comment-content">Comment</label>
                    <textarea placeholder="Enter Comment"
                              style="resize: vertical"
                              id="comment-content"
                              name="body"
                              rows="3"
                              spellcheck="false"
                              class="form-control autosize-target text-left">
                    </textarea>
                  </div>

                <div class="form-group">
                    <label for="project-content">Proof of work Done (Url/Photos)</label>
                    <textarea placeholder="Enter Url or screenshot"
                              style="resize: vertical"
                              id="project-content"
                              name="url"
                              rows="2"
                              spellcheck="false"
                              class="form-control autosize-target text-left">
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
              <li><a href="/projects">My projects</a></li>
              <li><a href="/projects/create">Create new project</a></li>
              <li><a href="/projects/{{ $project->id }}/edit">Edit</a></li>

              @if($project->user_id == Auth::user()->id)
              <li><a  href="#" onclick="var result = confirm('Are you sure you wish to delete this project?');
                                        if( result ){
                                                event.preventDefault();
                                                document.getElementById('delete-form').submit();
                                        }">Delete
                </a>

                <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}" 
                  method="POST" style="display: none;">
                          <input type="hidden" name="_method" value="delete">
                          {{ csrf_field() }}
                </form>
              </li>
              @endif                            
              <br />
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

