<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <center>
    <h1>All Products</h1>
    <table border="1px">
        <tr>
            <th>title</th>
            <th>description</th>
            <th>image</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td><h1> {{$item->title}} </h1></td>
                <td><h3> {{$item->description}} </h3></td>
                <td><img src="product/{{$item->image}}" alt="" width="200px"></td>
                <td><a onclick="return confirm('are u sure to delete this?')" class="btn btn-danger" href="{{url('delete_product',$item->id)}}">delete</a></td>
                <td><a class="btn btn-primary" href="{{url('update_product',$item->id)}}">Update</a></td>
            </tr>
        @endforeach
        </table>
    </center>
    
</body>
</html>