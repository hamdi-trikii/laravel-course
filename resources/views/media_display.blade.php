<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Media details</h1>
    <table border="1px solid black">
        <tr>
            <th>Title</th>
            <th>description</th>
            <th>File</th>
            <th>Download</th>
            <th>View</th>
        </tr>
    
    @foreach ($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->des}}</td>
            <td>{{$data->file}}</td>
            <td>
                <a href="{{url('my_download',$data->file)}}">Download</a>
            </td>
            <td>
                <a href="{{url('view_file',$data->file)}}">View</a>
            </td>
        </tr>
        
    @endforeach
    </table>    
</body>
</html>