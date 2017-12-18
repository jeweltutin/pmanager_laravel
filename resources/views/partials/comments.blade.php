<div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">      
            <!-- Fluid width widget -->        
        <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <!--<span class="glyphicon glyphicon-comment"></span>--> 
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        Recent Comments
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                    @foreach( $comments as $comment)
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="users/{{ $comment->user->id }}">{{ $comment->user->name }}</a>
                                    <br>
                                    <small>
                                        commented on <a href="#">Post Title</a>
                                    </small>
                                </h4>
                                <p>
                                {{ $comment->body }}
                                </p>
                                <strong>Proof:</strong>
                                <p>
                                {{ $comment->url }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <!-- End fluid width widget -->            
    </div>
</div>