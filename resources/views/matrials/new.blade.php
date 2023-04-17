<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Matrial</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Matrials </div>
        <form action="{{matrials.save}}" method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Quantity</label>
                <input type="text" class="form-control">
              </div>
                <div class="col">
                    <label for="">Spare Parts Id</label>
                    @foreach ($spareParts AS $sparePart)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$sparePart->id}}">{{$sparePart->name}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label for="">Crticality Id</label>
                    @foreach ($criticals As $critical)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$critical->id}}">{{$critical->name}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label for="">Location Id</label>
                    @foreach ($locations AS $location)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$location->id}}">{{$location->name}}</option>
                    </select>
                    @endforeach
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Catigory Id</label>
                    @foreach ($categories AS $category)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$category->id}}">{{$category->name}}</option>
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
