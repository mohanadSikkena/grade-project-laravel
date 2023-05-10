<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Work Request</title>
</head>
<body>


   <div class="contain">
    <div class="all">
      <div class="header">Work Request</div>
        <form action="{{route('workRequests.update',$workRequest->id)}}" method="post">
                      @method('PUT')
                      @csrf
                          <div class="col">
                            <label for="">Asset</label>
                            
                            <select class="form-select" aria-label="Default select example" name="machine_id">
                              @foreach ($machines AS $machine)
                              <option {{$machine->id == $workRequest->machine_id ? 'selected' : ''}} value="{{$machine->id}}">{{$machine->name}}</option>
                              @endforeach
                            </select>
                            
                          </div>
                            
                      <div class="col">
                        <label for="">Requester </label>
                        
                              <select class="form-select" aria-label="Default select example" name="requster_id">
                                @foreach ($users AS $user)
                                <option {{$user->id == $workRequest->user_id ? 'selected' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                              </select>
                             
                      </div>
              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea name="problem_description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{$workRequest->problem_description}}</textarea >
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
