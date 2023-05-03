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
                @foreach ($users AS $user)
                <select class="form-select" aria-label="Default select example">
                    <option {{$user->id == $pworkOrder->user_id ? 'selected' : ''}}  value="{{$user->id}}">{{$user->name}}</option>
                </select>
                @endforeach
                </div>
            <div class="row">
                <div class="col">
                    <label for="">Asset</label>
                    @foreach ($assets AS $asset)
                    <select class="form-select" aria-label="Default select example">
                        <option {{$asset->id == $pworkOrder->asset_id ? 'selected' : ''}} value="{{$asset->id}}">{{$asset->name}}</option>
                    </select>
                    @endforeach
                </div>
                <div class="col">
                    <label for="">M/C Name</label>
                    @foreach (AS)
                    <select class="form-select" aria-label="Default select example">
                        <option {{$->id == $pworkOrder-> ? 'selected' : ''}} value="{{$->id}}">{{$->name}}</option>
                    </select>
                    @endforeach
                </div>

            </div>

                <div class="row">
                    <div class="col">
                        <label for="">Work Status</label>
                        @foreach ($workStatuses AS $workStatus)
                        <select class="form-select" aria-label="Default select example">
                            <option {{$workStatus->id == $pworkOrder->workstatus_id ? 'selected' : ''}} value="{{$workStatus->id}}">{{$workStatus->name}}</option>
                        </select>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="">Work type </label>
                        @foreach ($workTypes AS $workType)
                        <select class="form-select" aria-label="Default select example">
                            <option {{$workType->id == $pworkOrder->worktype_id ? 'selected' : ''}} value="{{$workType->id}}">{{$workType->name}}</option>
                        </select>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="">Work Priority</label>
                        @foreach ($workPrioritys AS $workPriority)
                        <select class="form-select" aria-label="Default select example">
                            <option {{$workPriority->id == $pworkOrder->workpriority_id ? 'selected' : ''}} value="{{$workPriority->id}}">{{$workPriority->name}}</option>
                        </select>
                        @endforeach
                    </div>
                </div>
                <div class=" mb-3">
                    <label for="floatingPassword">Requirements</label>
                    <input type="taxt" class="form-control" value="{{$pworkOrder->requirements}}">
                  </div>
                <div class=" mb-3">
                    <label for="floatingPassword"> Received Date</label>
                    <input type="datetime-local" class="form-control" value="{{$pworkOrder->received_date}}">
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
