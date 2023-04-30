<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Matrial</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Matrials </div>
        <form action={{Route('materials.save')}} method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control">
              </div>
                <div class="col">
                    <label for="">Spare Parts</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($spareParts AS $sparePart)
                        <option value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="">Crticality</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($criticals As $critical)
                        <option value="{{$critical->id}}">{{$critical->name}}</option>
                        @endforeach
                    </select>       
                </div>
                <div class="col">
                    <label for="">Location</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($locations AS $location)
                        <option value="{{$location->id}}">{{$location->name}}</option>
                        @endforeach
                    </select>
                   
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($categories AS $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
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
