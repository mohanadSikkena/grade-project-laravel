<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title> New Failure Work Order</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Failure Work Order</div>
        <form action="{{failure_workorder.save}}" method="post">
            <div class="col">
                <label for="">Assign To</label>
                @foreach ($users AS $user)
                <select class="form-select" aria-label="Default select example">
                    <option value="{{$user->id}}">{{$user->name}}</option>
                </select>
                @endforeach
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Asset</label>
                    @foreach ($machines AS $machine)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$machine->id}}">{{$machine->name}}</option>
                    </select>
                    @endforeach
                </div>
                
            </div>

             <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>

                <div class=" mb-3">
                    <label for="floatingPassword">Requirements</label>
                    <input type="taxt" class="form-control">
                  </div>

              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
    </div>
   </div>
  </div>

</body>
</html>
