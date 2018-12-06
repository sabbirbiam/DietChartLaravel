<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/styles.css" >
  <script type="text/javascript" src="js/cal.js"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">DietCart</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/admin">About Admin</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><form class="form-inline set" method="post">
        <div class="form-group">
          {{csrf_field()}}
          <input type="text" name="username" class="form-control" id="uname" placeholder="User_name">
        </div>
        <div class="form-group">
          
          <input type="password" name="password" class="form-control" id="pwd" placeholder="password">
        </div>
        
        <button type="submit" value="Login" class="btn btn-default">Login</button>
    </form></li>

    
      </ul>

    </div>
    @if(session('message'))
    <label style="color: red; float: right;" >{{session('message')}}</label>
  @endif
  </div>

</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <ul class="nav nav-pills" >
        <li class="big"><a href="#section1">Health A-Z</a></li>
        <li><a href="#section2">Living Healthy</a></li>
        <li><a href="#section3">Family & Pregnancy</a></li>
        <li><a href="#section4">Top 12 Topics</a></li>
        <li><a href="#section5">Health News</a></li>
        <li><a href="#section6">Drugs & Medications A-Z</a></li>

        <li class="big"><a href="#section1">About us</a></li>
        <li><a href="/admin">This is our new work about web based application hope it ll be good work.......</a> </li>
        

        <li class="big"><a href="#section1">Helpful Links</a></li>
        <li><a href="https://www.webmd.com/">webmd.com</a></li>
        <li><a href="https://www.nih.gov/">National Institutes of Health</a></li>
        <li><a href="https://www.medicinenet.com/script/main/hp.asp">MedicineNet.com</a></li>
        

        
      </ul><br>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>

      
     <div class="bmiblock">
       <form class="form-group bmi" name="cal" action="" >
            <h4>Calculate your BMI</h4>
            
            <input class="form-control" type="text" name="weight"  placeholder="Weight(kg)">
            
             
            <input class="form-control" type="text" name="height"   placeholder="Height(cm)">
             
            </br>
           
            <button  class="btn btn-default" type="button" name="submit" onClick='bmi()'>Calculate</button>
            
            </br>

          
            <span><input class="form-control" type="text" name="result" value="0"> <a style="color: black; font-size: 16px;" href="/login">reset</a></span>
            
            </form> 


            <p class="pe" > 
                <b>BMI Categories:</b><br>
                #Underweight = < 18.5<br>
                #Normal weight = 18.5–24.9 <br>
                #Overweight = 25–29.9 <br>
                #Obesity = BMI of 30 or greater
            </p>
     </div>

      
      
    </div>
    <div class="col-sm-2 sidenav">

      
</div>



</body>
</html>
