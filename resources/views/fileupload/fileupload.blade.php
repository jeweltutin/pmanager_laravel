<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>File Upload</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="col-md-offset-1 col-md-4></col-md-offset-4">
        <center>
            <div class="form-group">
                <h1>Upload a file:</h1>
                <!--<form action="{{-- route('fileupload.store') --}}" enctype="multipart/form-data" method="POST">-->
                <form action="fileupload/store" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <input class="" type="file" name="image">
                    <br />
                    <input class="" type="submit" value="Upload">

                
                </form>
            </div>
        </center>
        </div>
    </body>


</html>