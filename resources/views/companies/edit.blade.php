@extends('layouts.app')

@section('content')
      <!-- Jumbotron -->
      <div class="col-md-9 col-lg-9 col-sm-9 pull-left" style="background-color: white;">
        <h1>Update Companies</h1>

        <!-- Example row of columns -->
        <div class="row col-lg-12 col-md-12 col-sm-12"  >

            <form method="post" action="{{ route('companies.update',[$company->id]) }}">
              {{ csrf_field() }}

              <input type="hidden" name="_method" value="put">
                <div class="form-group">
                  <label for="company-name">Name<span class="requird">*</span></label>
                  <input placeholder="Enter Name"
                         id="company-name"
                         requird
                         name="name"
                         spellcheck="false"
                         class="form-control"
                         value="{{ $company->name }}" />
                   
                </div>
                <div class="form-group">
                  <label for="company-content">Description</label>
                  <textarea placeholder="Enter description"
                            style="resize: vertical"
                            id="company-content"
                            name="description"
                            rows="5"
                            spellcheck="false"
                            class="form-control autosize-target text-left">
                            {{ $company->description }}
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
              <li><a href="/companies/{{ $company->id }}">View Companies</a></li>
              <li><a href="/companies">All Companies</a></li>
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

