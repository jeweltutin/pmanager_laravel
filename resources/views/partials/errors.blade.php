@if(isset($errors)&&count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span></button> 
        <h4>Oh snap! You got an error!</h4>
        @foreach($errors->all() as $error)
        <li>
            <strong>{!! $error !!}</strong>
        </li>
        @endforeach
    </div>
@endif