<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('style (1).css')}}">
    {{-- <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}"> --}}
    <title>Work Order Report</title>
</head>
<body>
  <div class="container">
    <h2>Work Order Report</h2>
    
    <div class="card">
        <div class="description">
            <h3 class="h2">Work Order Id: <p>{{$pworkOrder->id}}</p></h2>
              <h3>Machine Name: <p>{{$pworkOrder->machine->name}}</p></h2>
              <h3>Work Status: <p>{{$pworkOrder->workStatus->name}}</p></h2>
              <h3>Work Type: <p>{{ $pworkOrder->workType->name}}</p></h2>
              <h3>Work Trade: <p>{{ $pworkOrder->workTrade->name}}</p></h2>
              <h3>Work Priority: <p>{{ $pworkOrder->workPriority->name}}</p></h2>
              <h3>Requirements: <p>{{ $pworkOrder->requirements}}</p></h2>
                
        </div>
        <div class="footer">
          <div class="date-time">
            <h3>Assigned To: <p>{{$pworkOrder->assigendTo->name}}</p></h3>
            <h3>{{ $pworkOrder->created_at}}</h3>
          </div>
        </div>

    </div>
</div>
      
      
</body>
</html>