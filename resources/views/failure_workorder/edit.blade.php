 
  </div>

</body>
</html>



@extends('layout')
@section('title')
edit Failure Work Order
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')

<div class="contain">
    <div class="all">
      <div class="header">Failure Work Order</div>
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
                    @foreach ($machines AS $machine)
                    <select class="form-select" aria-label="Default select example">
                        <option  value="{{$machine->id}}">{{$machine->name}}</option>
                    </select>
                    @endforeach
                </div>
               
            </div>
                <div class="">
                    <label for="floatingTextarea6">Description</label>
                    <input type="taxt" class="form-control" value="{{$fworkOrder->description}}">
                </div>
                <div class=" mb-3">
                    <label for="floatingPassword">Requirements</label>
                    <input type="taxt" class="form-control" value="{{$fworkOrder->requirements}}">
                  </div>
              <div class="button">
                <button class="submit" type="submit">Submit</button>
              </div>
            </div>
        </form>
    </div>
   </div>
 
@endsection
