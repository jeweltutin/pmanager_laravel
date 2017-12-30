<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Upload</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-md-offset-1 col-md-4></col-md-offset-4">
                <center>
                    <div class="form-group">
                        <h1>Upload file:</h1>
                        <form action="{{ route('file.upload') }}" enctype="multipart/form-data" method="POST">
                            {{ csrf_field() }}
                            <!--<input class="" type="file" name="image"> //For single file input-->
                            <input class="" type="file" name="image[]" multiple="true"> <!-- //Multiple file upload at once-->
                            <br />
                            <input class="btn btn-success btn-sm" type="submit" value="Upload">
                        </form>
                    </div>

                    @if(session()->has('successmsg'))
                    <div class="alert alert-warning alert-dismissible fade in" role="alert"> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
                        <strong>{!! session()->get('successmsg') !!}</strong>
                    @endif

                </center>
            </div>
            <div class="row">
                <h2>Images</h2>
                <img src="{{ asset('storage/allimages/jewelimage.jpg') }}" alt="myimages" width="100%" height="300px"/>
            </div>
        </div>
    </body>


</html>