<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Courses</h1>
        <form acion="/" method="get">
            <div class="row">
                <label>Search:</label>
                <input type="text" name="str" value="{{$str}}" class="form-control col-md-6">
                <input type="submit" class="btn btn-primary"  value="OK">
            </div>
        </form>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-3" style="border: 1px solid #ccc; margin: 10px; min-height: 275px;">
                    <h3>{{ $course->name }}</h3>
                    <p>{{ $course->description }}.<br><br> By {{ $course->author }}</p>
                </div>
            @endforeach
        </div>
        <vitrine-component/>
    </div>
</body>
</html>
