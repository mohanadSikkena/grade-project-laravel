<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Asset('icons/style.css')}}">
    <link rel="stylesheet" href="{{Asset('homeStyle.css')}}">
    <title>Sign In</title>
</head>
<body>
      <div class="all">
        <div class="text">
        <img src="../maintsolupdate.png" alt="">
        </div>
        <div class="form">
          <form action="home.html">
            <h1 class="sing-in">Sign In</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
</body>
</html>