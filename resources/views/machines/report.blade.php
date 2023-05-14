<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('style (1).css')}}">
    {{-- <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}"> --}}
    <title>Report</title>
</head>
<body>
  <div class="container">
    <h2>{{$machine->name}} Report</h2>
    <div class="scroll">
      <div class="card">
        <div class="description">
            <h3 class="h2">Machine Id: <p>{{$machine->id}}</p></h2>
              <h3>Machine Name: <p>{{$machine->name}}</p></h2>
              <h3>Machine Model: <p>{{$machine->machine_model}}</p></h2>
              <h3>Manfcatturer: <p>{{ $machine->manfacturer}}</p></h2>
              <h3>User: <p>{{ $machine->user->name}}</p></h2>
              <h3>Department: <p>{{ $machine->department->name}}</p></h2>
              <h3>Category: <p>{{ $machine->category->name}}</p></h2>
              <h3>Location: <p>{{ $machine->location->location_description}}</p></h2>
              <h3>Contractor: <p>{{ $machine->contractor}}</p></h2>
              <h3>Status: <p>{{ $machine->machine_status_id}}</p></h2>
              <h3>Supplier: <p>{{ $machine->supplier}}</p></h2>
              <h3>Critcality: <p>{{ $machine->Criticality->name}}</p></h2>
              <h3>Assets Code: <p>{{ $machine->machineCode->code}}</p></h2>
              <h3>Serial Number: <p>{{ $machine->serial_number}}</p></h2>
              <h3>Contract Expiry Date: <p>{{ $machine->contract_expiry_date}}</p></h2>
              <h3>Note To Technection: <p>{{ $machine->notes_to_technection}}</p></h2>
              <h3>Description: <p>{{ $machine->description}}</p></h2>
                
        </div>
    </div>
    </div>
</div>
      
      
</body>
</html>