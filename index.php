<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./styles/loginstyles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>PiZzA</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container log-in-container">
      <form>
        <h1>Welcome to <span style="font-size: 80px; color:orange; ">PiZzA</span></h1>
        <h5>The biggest pizza shop in Colombo</h5>
        <br><br>
        <div>
          <input type=button onClick="parent.location='./loginStaff.php'" class="homebutton" value='Staff Login'>
          <br /><br />
          <input type=button onClick="parent.location='./customerLogin.php'" class="homebutton" style="background-color: gray;" value='Customer'>
          </div>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <img src="./assets/login/pizaza.png" style="size: 300" />
        </div>
      </div>
    </div>
  </div>
</body>

</html>