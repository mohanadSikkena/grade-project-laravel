<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title> User </title>
</head>
<body>
   <div class="contain">
    <div class="all">
      <div class="header">Users </div>
        <form action="{{ route('users.update',$user->id) }}" method="post">
          @method('PUT')
          @csrf
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control" value="{{$user->name}}" name="name">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Address</label>
                <input type="text" class="form-control" value="{{$user->address}}" name="address">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Phone Number</label>
                <input type="text" class="form-control" value="{{$user->phone_no}}"name="phone_no">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">House Number</label>
                <input type="text" class="form-control" value="{{$user->house_no}}"name="house_no">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Hourly Salary</label>
                <input type="text" class="form-control" value="{{$user->hourly_salery}}"name="hourly_salery">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Email</label>
                <input type="text" class="form-control" value="{{$user->email}}"name="email">
              </div>
              <div class=" mb-3">
                <label  for="floatingPassword">Password</label>
                <input type="password" class="form-control" value="{{$user->password}}"name="password">
              </div>
              <div class="row">
                <div class="col">
                  <label for="">Role Id</label>
                  <select class="form-select" aria-label="Default select example" name="role_id">
                    @foreach ($roles AS $role)
                      <option  {{$role->id == $user->role_id ? 'selected' : ''}} value="{{$role->id}}">{{$role->name}}</option>
                      @endforeach
                  </select>
                 
              </div>
               <div class="row">
                <div class="col">
                  <label for="">Department Id</label>
                  <select class="form-select" aria-label="Default select example" name="department_id">
                    @foreach ($departments AS $department)
                      <option {{$department->id == $user->department_id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                      @endforeach
                  </select>
                 
              </div>
              <div class="col">
                  <label for="">Location Id</label>
                  
                  <select class="form-select" aria-label="Default select example" name="location_id">
                    @foreach ($locations AS $location )
                      <option {{$location->id == $user->location_id ? 'selected' : ''}} value="{{$location->id}}">{{$location->location_description}}</option>
                      @endforeach
                  </select>
                  
                </div>
               </div>
                <div class="button">
                  <button class="submit" type="submit">Submit</button>
                </div>
        </form>
    </div>
   </div>
  </div>

</body>
</html>
