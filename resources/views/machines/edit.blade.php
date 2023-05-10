<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New Machine</title>
</head>
<body>
   <div class="contain">
    <div class="all">
      <div class="header">Machines</div>
        <form action="{{ route('machines.update') }}" method="post">
          @method('PUT')
          @csrf
                    <div class="row">
                      <div class="col">
                        <label for="">Machine Name </label>
                        <input type="text" class="form-control" name="name" value="{{$machine->name}}">
                      </div>
                      <div class="col">
                        <label for="">Machine Model </label>
                        <input type="text" class="form-control" name="machine_model" value="{{$machine->machine_model}}">
                      </div>
                        <div class="col">
                          <label for="">Manufacturer </label>
                          <input type="text" class="form-control"name="manfacturer"value="{{$machine->manfacturer}}" >
                        </div>
                    </div>
                        <div class="row">
                          <div class="col">
                            <label for="">User </label>
                            <select class="form-select" aria-label="Default select example" name="user_id">
                              @foreach ($users as $user)
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                            </select>
                          </div>
                            <div class="col">
                              <label for="">Department </label>
                              <select class="form-select" aria-label="Default select example" name="department_id">
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col">
                              <label for="">Category Id</label>
                              <select class="form-select" aria-label="Default select example"name="category_id">
                                @foreach ($categories AS $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                              </select>                      
                            </div>
                            <div class="col">
                              <label for="">Location Id</label>
                              <select class="form-select" aria-label="Default select example"name="location_id">
                                @foreach ($locations AS $location)
                                <option value="{{$location->id}}">{{$location->location_description}}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                <div class=" mb-3">
                <label for="floatingInput">Contractor</label>
                <input type="text" class="form-control"name="contractor" value="{{$machine->contractor}}">
              </div>
              <div class=" mb-3">
                <label for="floatingInput">Supplier</label>
                <input type="text" class="form-control"name="supplier" value="{{$machine->supplier}}">
              </div>
                  <div class="row">
                    <div class="col">
                      <label for="">Critcality Id</label>
                      <select class="form-select" aria-label="Default select example" name="criticality_id"> 
                        @foreach ($criticals As $crtical) 
                        <option value="{{$crtical->id}}">{{$crtical->name}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="col">
                        <label for="">Assets Code Id</label>
                        <select class="form-select" aria-label="Default select example" name="machine_code_id">
                          @foreach ($machineCodes AS $machineCode)
                          <option value="{{$machineCode->id}}">{{$machineCode->code}}</option>
                          @endforeach
                        </select>                     
                      </div>
                      <div class="col">
                        <label for="">Serial Number</label>
                        <input type="text" class="form-control"name="serial_number" value="{{$machine->serial_number}}">
                      </div>
                  </div>

              <div class=" mb-3">
                <label for="floatingPassword">Contract Expiry Date</label>
                <input type="date" class="form-control"name="contract_expiry_data" value="{{$machine->contract_expiry_data}}">
              </div>


                <div class="">
                  <label for="floatingTextarea6">Note To Technection</label>
                  <textarea name="note_to_technection" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{$machine->note_to_technection}}</textarea>
                </div>

              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea name="description" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px">{{$machine->description}}</textarea>
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
