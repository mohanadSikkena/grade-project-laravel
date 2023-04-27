<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Planned Work Order</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Planned Work Order</div>
        <form action="" method="post">
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
                    @foreach ($assets AS $asset)
                    <select class="form-select" aria-label="Default select example">
                        <option value="{{$asset->id}}">{{$asset->name}}</option>
                    </select>
                    @endforeach
                </div>

            </div>

                <div class="row">
                    <div class="col">
                        <label for="">Work Status</label>
                        @foreach ($workStatuses AS $workStatus)
                        <select class="form-select" aria-label="Default select example">
                            <option value="{{$workStatus->id}}">{{$workStatus->name}}</option>
                        </select>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="">Work type </label>
                        @foreach ($workTypes AS $workType)
                        <select class="form-select" aria-label="Default select example">
                            <option value="{{$workType->id}}">{{$workType->name}}</option>
                        </select>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="">Work Priority</label>
                        @foreach ($workPrioritys AS $workPriority)
                        <select class="form-select" aria-label="Default select example">
                            <option value="{{$workPriority->id}}">{{$workPriority->name}}</option>
                        </select>
                        @endforeach
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="floatingPassword">Requirements</label>
                    <input type="taxt" class="form-control">
                  </div>
                <div class=" mb-3">
                    <label for="floatingPassword"> Received Date</label>
                    <input type="datetime-local" class="form-control">
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
