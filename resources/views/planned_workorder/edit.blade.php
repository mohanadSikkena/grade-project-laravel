@extends('layout')
@section('title')
edit Planned Work Order
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
                
                <select class="form-select" aria-label="Default select example" name="assign_to">
                    @foreach ($users AS $user)
                    <option {{$user->id == $pworkOrder->user_id ? 'selected' : ''}}  value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Machine</label>
                    
                    <select class="form-select" aria-label="Default select example" name="machine_id">
                        @foreach ($machines AS $machine)
                        <option {{$machine->id == $pworkOrder->machine_id ? 'selected' : ''}} value="{{$machine->id}}">{{$machine->name}}</option>
                        @endforeach
                    </select>
                    
                </div>
                
            </div>

                <div class="row">
                    <div class="col">
                        <label for="">Work Status</label>
                        
                        <select class="form-select" aria-label="Default select example" name="work_status_id">
                            @foreach ($workStatuses AS $workStatus)
                            <option {{$workStatus->id == $pworkOrder->workstatus_id ? 'selected' : ''}} value="{{$workStatus->id}}">{{$workStatus->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                    <div class="col">
                        <label for="">Work type </label>
                        
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($workTypes AS $workType)
                            <option {{$workType->id == $pworkOrder->worktype_id ? 'selected' : ''}} value="{{$workType->id}}">{{$workType->name}}</option>
                            @endforeach
                        </select>
                       
                    </div>
                    <div class="col">
                        <label for="">Work Priority</label>
                        
                        <select class="form-select" aria-label="Default select example" name="work_priority_id">
                            @foreach ($workPrioritys AS $workPriority)
                            <option {{$workPriority->id == $pworkOrder->workpriority_id ? 'selected' : ''}} value="{{$workPriority->id}}">{{$workPriority->name}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="floatingPassword">Requirements</label>
                    <input type="taxt" class="form-control" value="{{$pworkOrder->requirements}}" name="requirements">
                  </div>
                <div class=" mb-3">
                    <label for="floatingPassword"> Received Date</label>
                    <input type="datetime-local" class="form-control" value="{{$pworkOrder->received_date}}" name="received_date">
                </div>
              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
    </div>
   </div>
  </div>
 
@endsection
