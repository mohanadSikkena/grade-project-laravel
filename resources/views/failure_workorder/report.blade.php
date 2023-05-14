<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('style (1).css')}}">
    {{-- <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}"> --}}
    <title>Matarial Report</title>
</head>
<body>
  <div class="container">
    <h2>Failure Work Order Report</h2>
    
    <div class="card">
        <div class="description">
          <h3 class="h2">Work Order Id: <p>{{$fworkOrder->id}}</p></h2>
            <h3>Machine Name: <p>{{$fworkOrder->machine->name}}</p></h2>
            <h3>Work Priority: <p>{{ $fworkOrder->problem_description}}</p></h2>
            <h3>Requirements: <p>{{ $fworkOrder->requirements}}</p></h2>
              
        </div>
        <div class="footer" style="margin-top: 100px">
          <div class="date-time">
            <h3>Assigned To: <p>{{$fworkOrder->assigendTo->name}}</p></h3>
            <h3>{{ $fworkOrder->created_at}}</h3>
          </div>
        </div>

    </div>
</div>
      
      
</body>
</html>