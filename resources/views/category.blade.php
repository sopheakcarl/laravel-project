<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action ="/postdata" method="post">

        {{csrf_field()}}
        <input type="text" name ="name">
        <input type="desciption" name ="desc">

        <input type ="submit">

    </form>


</body>
</html>