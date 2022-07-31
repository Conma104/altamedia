
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/template/admin/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/template/admin/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/template/admin/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/template/admin/css/style.css">

    <title>ALta Login</title>
  </head>
  <body>
  
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('/template/admin/images/LoginWallpaper.png');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">

          <img class="loginpage__container--left-logo" src="/template/admin/images/LogoAlta.png" alt="" style="    width: 200px;
    margin-bottom: 50px;">

            <form action="admin/users/forgotpass" method="post">
              <div class="form-group first">
                <label for="username">Vui lòng nhập email để đặt lại mật khẩu của bạn *</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="/template/admin/js/jquery-3.3.1.min.js"></script>
    <script src="/template/admin/js/popper.min.js"></script>
    <script src="/template/admin/js/bootstrap.min.js"></script>
    <script src="/template/admin/js/main.js"></script>
  </body>
</html>