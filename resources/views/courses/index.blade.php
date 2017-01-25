<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Courses</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>

<div class="container">
    <h1>Courses</h1>
    <form class="form-group" action="/" method="get">
        <div class="col-md-1">
            <label>
                <h4>Search:</h4>
            </label>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="str" value="{{$str}}">
        </div>
        <input type="submit" class="btn btn-primary" value="OK">
    </form>

    @foreach($courses as $course)
        <div class="col-md-3" style="border: 1px solid #ccc; margin: 10px; min-height: 275px;">
            <h3>{{ $course->name }}</h3>
            <p>{{$course->description}}. By {{$course->author}}</p>
        </div>
    @endforeach
</div>

</body>
</html>