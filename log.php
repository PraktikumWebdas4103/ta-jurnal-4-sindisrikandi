<?php
if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $pswd=$_POST['psw'];

}
?>


<!DOCTYPE html>
<html>
<body>
<head>

	<title>Login </title>

	<style type="text/css">
  *{
    padding: 0; margin: 0;
}
h2{
  color:#50626C;
  text-align: center;
  font-family: arial;
  text-transform: uppercase;
  border: 3px solid #f1f1f1;
  padding: 5px;
  width: 490px;
  margin: auto;
  margin-bottom: 10px;
    margin-top: 20px;
}
form {
    border: 3px solid #f1f1f1;
    font-family: arial;
    width: 500px;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
label{
  color:#50626C;
  text-transform: uppercase;
  }
button {
    background-color: #ff6699;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f03434;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.container {
    padding: 16px;
}

</style>
</head>
<body background="no.jpg">

<h2>SILAHKAN LOGIN</h2>

<form action="proses.php" method="">
  <div class="imgcontainer">
  
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="nama" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Masuk</button>
    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
  </div>

  <div class="container" style="background-color:#ff6699">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Lupa <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
vb<!DOCTYPE html>
<html>
<head>
  <title>Login </title>
  <style type="text/css">
  *{
    padding: 0; margin: 0;
}
h2{
  color:#50626C;
  text-align: center;
  font-family: arial;
  text-transform: uppercase;
  border: 3px solid #f1f1f1;
  padding: 5px;
  width: 490px;
  margin: auto;
  margin-bottom: 10px;
    margin-top: 20px;
}
form {
    border: 3px solid #f1f1f1;
    font-family: arial;
    width: 500px;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
label{
  color:#50626C;
  text-transform: uppercase;
  }
button {
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f03434;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.container {
    padding: 16px;
}

</style>
</head>
</body>
