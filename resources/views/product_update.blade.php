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

    <style>
        .div_deg{
            padding: 30px;
        }
    </style>
</head>
<body>
    <center>
        <br><br>

        <a  class="btn btn-success" href="{{url('show_product')}}" >Show Product</a>
        <br><br>

        <h1>Update Product</h1>
        <form action="{{url('/edit_product',$product->id)}}" method="Post" enctype="multipart/form-data">
           
            @csrf  <!--A CSRF token is a unique, secret, and unpredictable value that is generated
                 by the server-side application and shared with the client.
                 When issuing a request to perform a sensitive action, such as submitting a form,
                  the client must include the correct CSRF token--> 
            
            <div class="div_deg">
                <label for="title">Product Title</label>
                <input type="text" name="title" value="{{$product->title}}">
            </div>

            <div class="div_deg">
                <label for="">Product description</label>
                <textarea name="description" id="" cols="20" rows="2">{{$product->description}}</textarea>
            </div>

            <div class="div_deg">
                <label for="">Current Image</label>
                <img src="/product/{{$product->image}}" width="100" alt="">
            </div>

            <div class="div_deg">
                <label for="">update Image</label>
                <input type="file" name="image">
            </div>

            <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Update Product">
            </div>

        </form>
    </center>
    

</body>
</html>