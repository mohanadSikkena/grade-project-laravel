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
    <h2>{{$material->name}} Report</h2>
    
    <div class="card">
        <div class="description">
            <h3 class="h2">Matarial Id: <p>{{$material->id}}</p></h2>
            <h3 class="h2">Matarial Name: <p>{{$material->name}}</p></h2>
              <h3>Quantity: <p>{{ $material->quantity}}</p></h2>
              <h3>Sparepart: <p>{{ $material->sparepart->name}}</p></h2>
              <h3>Criticality: <p>{{ $material->criticality->name}}</p></h2>
              <h3>Location: <p>{{ $material->location->location_description}}</p></h2>
              <h3>Category: <p>{{ $material->category->name}}</p></h2>
        </div>

    </div>
</div>
      
      
</body>
</html>