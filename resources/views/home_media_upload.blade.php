<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Upload & View PDF , DOC, Video and Audio .. Also we will see how to download those file</h1>
    <br><br>
    <center>
        <form action="{{url('my_media_upload')}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Title</label>
                <input type="text" name="title">
            </div>
            <br>

            <div>
                <label for="">Description</label>
                <input type="text" name="description">
            </div>
            <br>

            <div>
                <label for="">File Upload</label>
                <input type="File" name="file">
            </div>
            
            <div>
                <input type="submit" value="Upload">
            </div>
        </form>


        <br><br><br>

        <div>

            <a href="{{url('display_data')}}">Display All Data</a>
            
        </div>
    </center>
    
</body>
</html>