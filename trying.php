<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Parking Survey</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Query About Parking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


</nav>

  	<div class= "container">





<br>

<body style='background-color:#fff5d7;class='solid'>

<style> 
form {
  	
  width: 100%;
  height: 100%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 25px 25px 25px 25px;
  background-color: white;
  font-size: 16px;
  resize: none;
}

@font-face {
   font-family: verdana;
  

}
</style>
<center><img src="GITAM.png" class="img-rounded" alt="GITAM"> </center>
<br>

<form action="test.php" method="post">
<div class="container">
  <div class="jumbotron">
    <h1><center>Commuting Survey Form</center></h1>      
    <p></p>
  </div>
<h1 style="color:MidnightBlue; text-align:center; font-size:200%; font-family:verdana;"></h1>
<h2 style="color:MidnightBlue; font-size:200%; font-family:verdana;">Objective</h2>
<p style="font-size:100%; font-family:Helvetica;"> The purpose of the survey is to understand the parking requirements in the campus and to design an optimal solution by taking valuable feedback from you, it takes few minutes of your valuable time.</p>
<h3 style="color:MidnightBlue; font-size:170%; font-family:Helvetica;">Personal information</h3>

<P style="color:#ff414e; font-size:100%; font-family:Helvetica;">1. Are you a:<BR></p>
<label class="radio-inline">
      <input type="radio" name="optradio" value="Student" checked>Student
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Research Scholor">Research Scholar
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Teaching Faculty">Teaching Faculty
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Non-Teaching Staff">Non-Teaching Staff
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Employee of contractor">Employee of Contractor
    </label>



</p>

<p style="color:#ff414e; font-size:100%; font-family:Helvetica;">2. Where are you living:<BR></p>
<input type="radio" name="q2" value="yes">Outside GITAM Campus<BR>
<input type="radio" name="q2" value="no">Inside GITAM Campus<BR>
</p>

<center><input type="submit" class="btn btn-info" value="Submit" name="submit"></center>
</form>

</body>
</html>
