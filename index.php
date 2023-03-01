<!DOCTYPE html>
<html>
    <head>
    <title>
Enroll
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="java.js"></script>

</head>
<body>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="container">
    <h2 class="reg">REGISTER</h2><br>
    <form method="post" action="insert.php">
        
            <fieldset >
             <label for="fname">Firstname:</label><br>
            <input type="text"  id="fname" name="fname" ><br><br>
             <label for="lname">Lastname:</label><br>
            <input  type="text"  id="lname" name="lname"><br><br>
            <label for="workerid">Worker ID:</label><br>
            <input type="text"  id="workerid" name="workerid"><br><br>
            <label for="department">Department:</label><br>
            <input type="text"  id="department" name="department"><br><br>
            <label for="gender">Gender:</label><br>
            <label for="male">Male</label>
            <input type="radio" id="gender" name="gender" value="male">
            <label for="female">Female</label>
            <input type="radio" id="gender" name="gender" value="female"><br><br>
            <label for="face">Face:</label>
            <input type="button" value="Capture Image" onclick="captureImage()">
      <canvas id="canvas" width="640" height="480"></canvas><br><br>
      <img id="img" src="">


            <input type="submit" value="submit" class="submitbtn">
        </fieldset>
        </form>
        <video id="videoelement"></video>

</div>
</body>
</html>