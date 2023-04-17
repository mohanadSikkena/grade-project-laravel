<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title> User </title>
</head>
<body>
   <div class="contain">
    <div class="all">
      <div class="header">Users </div>
        <form action="users.update" method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control" value="{{$user->name}}">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Address</label>
                <input type="text" class="form-control" value="{{$user->address}}">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Phone Number</label>
                <input type="text" class="form-control" value="{{$user->phone_number}}">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">House Number</label>
                <input type="text" class="form-control" value="{{$user->house_number}}">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Hourly Salary</label>
                <input type="text" class="form-control" value="{{$user->hourly_salary}}">
              </div>
               <div class="row">
                <div class="col">
                  <label for="">Department Id</label>
                  @foreach ($departments AS $department)
                  <select class="form-select" aria-label="Default select example">
                      <option {{$department->id == $user->department_id ? 'selected' : ''}} value="{{$department->id}}">{{$department->name}}</option>
                  </select>
                  @foreach
              </div>
              <div class="col">
                  <label for="">Location Id</label>
                  @foreach ($locations AS $location )
                  <select class="form-select" aria-label="Default select example">
                      <option {{$location->id == $user->location_id ? 'selected' : ''}} value="{{$location->id}}">{{$location->name}}</option>
                  </select>
                  @endforeach
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
