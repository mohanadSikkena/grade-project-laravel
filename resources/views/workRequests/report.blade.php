<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('style (1).css')}}">
    {{-- <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}"> --}}
    <title>Document</title>
</head>
<body>
  <div class="container">
    <h2>{{$workRequest->machine->name}} Report</h2>
    
    <div class="card">
        <div class="description">
            <h3 class="h2">Asset Name: <p>{{$workRequest->machine->name}}</p></h2>
              <h3>Description: <p>{{ $workRequest->problem_description}}</p></h2>
        </div>
        <div class="footer">
            <div class="date-time">
              <h3>Submited By: <p> {{$workRequest->user->name}}</p></h3>
  
              <h3>{{$workRequest->created_at}}</h3>
            </div>
            <div class="btn">
              <a class="blue" href="{{route('failure_workorder.new' ,$workRequest->id) }}">Assign WO</a>
              <a class="red" href="{{'workRequest.list'}}">  Cancel</a> 
            </div>
          </div>

    </div>
</div>
      
      
</body>
</html>