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
          @csrf
          @method('PUT')
                    <div class="row">
                      <div class="col">
                        <label for="">Asset Name </label>
                        <input type="text" class="form-control" value="{{ $machines->manufacturer}}">
                      </div>
                      <div class="col">
                        <label for="">Asset Model </label>
                        <input type="text" class="form-control" value="{{ $machines->manufacturer}}">
                      </div>
                        <div class="col">
                          <label for="">Manufacturer </label>
                          <input type="text" class="form-control" value="{{ $machines->manufacturer}}">
                        </div>
                    </div>
                        <div class="row">
                          <div class="col">
                            <label for="">User Id</label>
                            <select class="form-select" aria-label="Default select example">
                              @foreach ($users as $user)
                              <option selected = "{{$machines->user_id }}" value="{{ $user->id }}">{{ $user->name }}</option>
                            </select>
                            @endforeach
                          </div>
                            <div class="col">
                              <label for="">Department Id</label>
                              @foreach ($departments as $department)
                              <select class="form-select" aria-label="Default select example">
                                <option selected = "{{$machines->department_id}}" value="{{$department->id}}">{{$department->name}}</option>
                              </select>
                              @endforeach
                            </div>
                          </div>
                            <div class="row">
                            <div class="col">
                              <label for="">Category Id</label>
                              @foreach ($categories AS $category)
                              <select class="form-select" aria-label="Default select example">
                                <option selected = "{{$machines->category_id}}" value="{{$category->id}}">{{$category->name}}</option>
                              </select>
                              @endforeach
                            </div>
                            <div class="col">
                              <label for="">Location Id</label>
                              @foreach ($locations AS $location)
                              <select class="form-select" aria-label="Default select example">
                                <option selected = "{{$machines->location_id}}" value="{{$location->id}}">{{$location->name}}</option>
                              </select>
                              @endforeach
                            </div>
                        </div>
        
                <div class=" mb-3">
                <label for="floatingInput">Contractor</label>
                <input type="text" class="form-control" value="{{ $machines->contractor}}">              
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Asset Status</label>
                <input type="text" class="form-control" value="{{$machines->asset_status}}">              
              </div>
              <div class=" mb-3">
                <label for="floatingInput">Supplier</label>
                <input type="text" class="form-control" value="{{ $machines->supplier }}">              
              </div> 
                  <div class="row">
                    <div class="col">
                      <label for="">Critcality Id</label>
                      @foreach ($criticals As $crtical)
                      <select class="form-select" aria-label="Default select example">
                        <option selected = "{{$machines->criticality_id}}" value="{{$crtical->id}}">{{$crtical->name}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="col">
                        <label for="">Assets Code Id</label>
                        @foreach ($assetsCode AS $assetCode)
                        <select class="form-select" aria-label="Default select example">
                          <option selected = "{{$machines->asset_code_id}}" value="{{$assetCode->id}}">{{$assetCode->name}}</option>
                        </select>
                        @endforeach
                      </div>
                      <div class="col">
                        <label for="">Serial Number</label>
                        <input type="text" class="form-control" value="{{$machines->serial_number}}">
                      </div>
                  </div> 
                 
              <div class=" mb-3">
                <label for="floatingPassword">Contract Expiry Date</label>
                <input type="date" class="form-control" value="{{$machines->contract_expiry_date}}">              
              </div>
              
              
                <div class="">
                  <label for="floatingTextarea6">Note To Technection</label>
                  <textarea class="form-control" value ="{{$machines->notes_to_technection}}" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
               
              <div class="">
                <label for="floatingTextarea6">Description</label>
                <textarea class="form-control" value = "{{$machines->description}}" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
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
