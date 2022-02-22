<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projects List</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-dark table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Language</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProjects as $project)
            <tr>
                <td>{{$project['id']}}</td>
                <td>{{$project['name']}}</td>
                <td>{{$project['language']}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>

</body>
</html>


