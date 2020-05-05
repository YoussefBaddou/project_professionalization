<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalable=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualisation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <div class="jumbotron">
      <form action="/updatefiles/{{$Visualisation->id}}" method="POST" enctype="multipart/form-data">
      {{csrf_field() }}
      {{method_field('PUT')}}
            <input type="hidden" name="id" id="id" value ="{{$Visualisation->id}}">

            <div class="form-group">
                <label>Document Name</label>
                <input type="text" name="DocumentName" class="form-control" value ="{{$Visualisation->DocumentName}}" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" name="Description" class="form-control" value ="{{$Visualisation->Description}}" placeholder="Enter your Document Description">
            </div>        

            <label>Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" value ="{{$Visualisation->image}}">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>          
            <button type="submit" name="submit" class="btn btn-primary"> Save Data </button>
        </form>
      </div>
    </div>
</body>

</html>