@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-primary"><h1 class="label label-primary">DashBoard</h1></div>

                <div class="panel-body bg-success">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4 style="padding:5px;" class="bg-default">Project managenment System</h4>
                    <h2>Hi, {{ Auth::user()->name }} Welcome !! ... </h2>
                    {{--<h2>Avatar : {{ Auth::user()->avatar }} </h2>--}}
                    <center>
                        <img class="img-circle" src="{{ Auth::user()->avatar }}" alt="fbavatar" />
                    </center>
                    <br />
                    Email: {{ Auth::user()->email }}.<br />
                    {{ $val=Session::get('hd') }} <br />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
