<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
</head>
<body>
    <form method="Post" action="{{ route('save.post') }}">
        Post: <br> <input type="text" name="" value="" ><br>
        Description: <br> <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <input type="Submit" value="Submit">



    </form>

</body>
</html>
