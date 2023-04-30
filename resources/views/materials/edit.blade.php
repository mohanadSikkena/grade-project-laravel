<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>Edit Matrial</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Materials </div>
        <form action="{{materials.update}}" method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control" value="{{$materials->name}}">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control" value="{{$materials->quantity}}">
              </div>
                <div class="col">
                    <label for="">Spare Parts Id</label>
                    @foreach ($spareParts AS $sparePart)
                    <select class="form-select" aria-label="Default select example">
                        <option {{$sparePart->id == $materials->spare_part_id ? 'selected' : ''}} value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label for="">Criticals Id</label>
                    @foreach ($criticals As $critical)
                    <select class="form-select" aria-label="Default select example">
                        <option {{ $critical->id == $materials->critical_id ? 'selected' : '' }} value="{{$critical->id}}">{{$critical->name}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label for="">Location Id</label>
                    @foreach ($locations AS $location)
                    <select class="form-select" aria-label="Default select example">
                        <option  {{ $location->id == $materials->location_id ? 'selected' : '' }} value="{{$location->id}}">{{$location->name}}</option>
                    </select>
                    @endforeach
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory Id</label>
                    @foreach ($categories AS $category)
                    <select class="form-select" aria-label="Default select example">
                        <option {{ $category->id == $materials->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->name}}</option>
                    </select>
                    @endforeach
                </div>



                <div class="button">
                  <button class="submit" type="submit">Submit</button>
                </div>

        </form>
    </div>
   </div>
  </div>

</body>
</html>
