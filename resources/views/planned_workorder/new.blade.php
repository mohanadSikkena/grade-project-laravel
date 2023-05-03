<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Planned Work Order</title>
</head>
<body>


   
  </div>

</body>
</html>

@extends('layout')
@section('title')
New Planned Work Order
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')

<div class="contain">
    <div class="all">
      <div class="header">Planned Work Order</div>
        <form action="" method="post">
            <div class="col">
                <label for="">Assign To</label>
                <select class="form-select" aria-label="Default select example">
                    @foreach ($users AS $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Asset</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($machines AS $machine)
                        <option value="{{$machine->id}}">{{$machine->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

                <div class="row">
                    <div class="col">
                        <label for="">Work Status</label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($workStatuses AS $workStatus)
                            <option value="{{$workStatus->id}}">{{$workStatus->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Work type </label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($workTypes AS $workType)
                            <option value="{{$workType->id}}">{{$workType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="">Work Priority</label>
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($workPriorities AS $workPriority)
                            <option value="{{$workPriority->id}}">{{$workPriority->name}}</option>
                            @endforeach
                        </select>                    
                    </div>
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
  <div class="all">
    <div class="header">Failure Work Order</div>
      <form action={{Route('failure_workorder.save')}} method="post">
          <div class="col">
              <label for="">Assign To</label>
              <select class="form-select" aria-label="Default select example">
                @foreach ($users AS $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
              </select>
              </div>
          <div class="row">
              <div class="col">
                  <label for="">Asset</label>
                  <select class="form-select" aria-label="Default select example">
                    @foreach ($machines AS $machine)
                      <option value="{{$machine->id}}">{{$machine->name}}</option>
                      @endforeach
                  </select>
                  
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
 
@endsection
