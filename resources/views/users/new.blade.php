<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{Asset('formStyle.css')}}">
    <title>New User</title>
</head>
<body>
   <div class="contain">
    <div class="all">
      <div class="header">Users </div>
        <form action="" method="post">
            <div class=" mb-3">
                <label for="floatingPassword">Name</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Address</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Phone Number</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">House Number</label>
                <input type="text" class="form-control">
              </div>
              <div class=" mb-3">
                <label for="floatingPassword">Hourly Salary</label>
                <input type="text" class="form-control">
              </div>
               <div class="row">
                <div class="col">
                  <label for="">Department Id</label>
                  <select class="form-select" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
              </div>
              <div class="col">
                  <label for="">Location Id</label>
                  <select class="form-select" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
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
