<html>
<head>
<title>
Login to contiue</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css">
</head>
<body background="http://localhost/p/img/back.jpg">
<div class="pure-g-r" style="background:rgba(60,105,163,0.9);">
<div class="pure-u-1-3"><br><span  style="font-family:sans-serif;color:#631313;font-size:40px;">Login as Teacher</span><br>
<img src="../p/img/teacher.gif" style="width:120;height:150;">
</div>
<div id="teacher" style="height:46%;" class="pure-u-1-4">
  <form name="loginForm" action="<?php echo base_url(); ?>verifylogin" method="POST" class="pure-form ">
        <fieldset>
                    <br>
                    <label style="font-family:sans-serif;color:#D1BA52;font-size:16px;font-weight:bold;">Login Id</label>
                    <input id="loginform_username" type="text" placeholder="Enter login Id" name="username" required><br>
                    <br>
                    <label style="font-family:sans-serif;color:#D1BA52;font-size:16px;font-weight:bold;">Password</label>
                    <input id= "loginform_pwd" type="password" placeholder="Enter your password" name="password" required>
                    <br><br>
                    <input type="hidden" name="type" value="teacher">
                    
          			<button id="loginn_button" class="pure-button pure-button-secondary">Login</button>
        </fieldset>
      </form>
</div>
<div class="pure-u-1-3">
<button class="pure-button" style="font-size: 125%;background: rgb(223, 117, 20);margin:20%">Skip to Courses</button>
</div>
</div>
<div id="middle" style="width:100%;height:8%;background:rgba(82,209,201,0.99);">
  <center><span style="font-family:sans-serif;color:#3B0F39;font-size:30px;">LOGIN TO CONTINUE</span></center>
</div>
<div class="pure-g-r" style="background:rgba(92,209,82,0.9);">
<div class="pure-u-1-3"><br>
<br>
<button class="pure-button" style=" background: rgb(202, 60, 60); margin:20%">I THINK</button>
</div>
<div id="student" style="height:46%;" class="pure-u-1-4">
  <form name="loginForm" action="<?php echo base_url(); ?>verifylogin" method="POST" class="pure-form">
        <fieldset>
                    <br>
                    <label style="font-family:sans-serif;color:#3B350F;font-size:16px;font-weight:bold;">Login Id</label>
                    <input id="loginform_username" type="text" placeholder="Enter login Id" name="username" required><br>
                    <br>
                    <label style="font-family:sans-serif;color:#3B350F;font-size:16px;font-weight:bold;">Password</label>
                    <input id= "loginform_pwd" type="password" placeholder="Enter your password" name="password" required>
                    <br><br>
                    <input type="hidden" name="type" value="student">
                    
                <button id="loginn_button" class="pure-button pure-button-secondary">Login</button>
        </fieldset>
      </form>
</div>
<div class="pure-u-1-3"><br>
<span  style="font-family:sans-serif;color:#140F3B;font-size:40px;">Login as Student</span><br>
</div>
</div>

</body>
</html>
