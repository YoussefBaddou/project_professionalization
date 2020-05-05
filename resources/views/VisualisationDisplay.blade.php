<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalable=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <div class="jumbotron">
            <h1> Documents  </h1> <br>
                <a href="/Visualisation" class="btn btn-primary">Add Files</a>
                <br>
            <table class ="table table-stripped table-borered">
                <thread class="thread-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DocumentName</th>
                        <th scope="col">Description</th>
                        <th scope="col">Files</th>
                        <th> EDIT </th>
                        <th> DELETE </th>

                    </tr>
                </thread>
                <tbody>
                @foreach($Visualisation as $disp)
                <tr>
                    <th>{{$disp->id}}</th>
                    <th>{{$disp->DocumentName}}</th>
                    <th>{{$disp->Description}}</th>
                    <th><img src="{{ asset('uploads/Visualisation/'. $disp->image) }}" width="100px;" heigh="100px;" alt="Image"></th>
                    <th><a href="/editfile/{{ $disp->id}}" class ="btn btn-success"> EDIT </a></th>
                    <th><a href="/deletfile/{{ $disp->id}}" class ="btn btn-danger"> DELETE </a></th>

                </tr>
                @endforeach
                </tbody>
            </table>
      </div>
    </div>
</body>

</html>