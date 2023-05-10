 @extends('layout')
@section('title')
New Failure Work Order
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('formStyle.css') }}">
@endsection

@section('content')

<div class="contain">
  <div class="all">
    <div class="header">Failure Work Order</div>
      <form action={{Route('failure_workorder.save')}} method="post">
          <div class="col">
              <label for="">Assign To</label>
              <select class="form-select" aria-label="Default select example" name="assign_to">
                @foreach ($users AS $user)
                  <option value="{{$user->id}}">{{$user->name}}</option>
                  @endforeach
              </select>
              </div>
          <div class="row">
              <div class="col">
                  <label for="">Machine</label>
                  <select class="form-select" aria-label="Default select example" name="machine_id">
                    @foreach ($machines AS $machine)
                      <option value="{{$machine->id}}">{{$machine->name}}</option>
                      @endforeach
                  </select>
                  
              </div>
              
          </div>

           <div class="">
              <label for="floatingTextarea6">Description</label>
              <textarea name="problem_description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>

              <div class=" mb-3">
                  <label for="floatingPassword">Requirements</label>
                  <input type="taxt" class="form-control" name="requirements">
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
