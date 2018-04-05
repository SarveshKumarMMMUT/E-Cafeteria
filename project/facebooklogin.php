<html>

<head>
    <link rel="stylesheet" type="text/css" href="./facebooklogin.css">

</head>

<body id="grad">
    <div class="header">
        <div style="position: absolute;height: 100px;width: 50%;left:0px;">
            <p id="fb">facebook</p>
        </div>
        <div style="position: absolute;height: 100px;width: 50%;background: rgb(59, 89, 152);right:0px;">
            <div style="float:left;margin-right:25px ;">
                <p class="email">Email or Phone<br><input type="text" style="width:130px;"><br><input type="checkbox" style="height: 15px;width: 15px;margin-top:1px;">
                    <span style="font-size: 0.7em;margin-top:1px;">keep me logged in</span>
                </p>
            </div>
            <div style="float:left;">
                <p class="email">Password<br><input type="password" style="width:130px;"><br><span style="font-size: 0.7em;cursor: pointer;margin-left: 0px; " class="r">Forget my password?</span></p>
            </div>
            <div style="background: rgb(59, 89, 152);position: absolute;right:260px;height:100px;width: 100px;">
                <input type="submit" style="height: 22;width:70;margin-top: 37px;margin-left: 30px;color:white;background: silver; " value="Login" ;>
            </div>
        </div>
    </div>
    <div style="position: absolute;height: 550px;background: ;width: 50%;left: 0px;margin-top: 100px;">
        <div style="width: 85%;">
            <p id="ab">Facebook help you connect and share with the people in life</p>
            <div style="height: 240px;width: 630px;margin-left: 70px;margin-top: 20px;"><img src="./fb.png" style="background-blend-mode: luminosity;"> </div>
        </div>
    </div>
    <div style="position: absolute; height:550px;;width: 50%;right: 0px;margin-top: 100px;">
        <div style="height: 80px;">
            <p style="margin-top: 30px;margin-left: 30px;font-weight:bolder;;font-family: sans-serif;font-size: 35px;color: rgb(59, 89, 152);">Sign Up<br><span style="font-size: 25px;font-weight: 0px;">It's free,and always be.</span></p>
        </div>
        <form method="post" action="facebook.php">
            <div id="reg" style="margin-left: 70px;color:rgb(59, 89, 152); font-family: monospace;letter-spacing: -.5px;font-weight: bolder;text-align: right;font-size: 1.2em;">
                <div class="row">
                    <p style="display: table-cell;margin-top: 2px;">First name:<input type="text" name="firstname" style="margin-top: 2px;display: table-cell;"></p>
                </div><br>
                <div class="row">
                    <p style="display: table-cell;margin-top: 2px;">Last name:<input type="text" name="lastname" style="margin-top: 2px;display: table-cell;"></p>
                </div><br>
                <div class="row">
                    <p style="display: table-cell;margin-top: 2px;">Your Email:<input type="email" name="email" style="margin-top: 2px;display: table-cell;"></p>
                </div><br>
                <div class="row">
                    <p style="display: table-cell;margin-top: 2px;">
                        Re-enter Email:<input type="email" name="remail" style="margin-top: 2px;display: table-cell;"></p>
                </div><br>
                <div class="row">
                    <p style="display: table-cell;margin-top: 2px;">New Password:<input type="password" name="password" style="margin-top: 2px;display: table-cell;"> </p>
                </div>
                <div class="row">Select Gender:<select style="margin-left:70px; width: 90px;height: 25px;display: table-cell;margin-top: 5px;">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
                </select><br>
                    <div class="row">
                        <p style="display: table-cell;margin-top: 5px;float: left;margin-left: 50px;">Birthday: <input type="date" name="bday" style="height: 19px" ;width:290px;><br><br><span style="font-size: .8em;margin-left: 100px;">why i need to provide date of birth?</span></p>
                    </div>
                    <div><input type="submit" value="Create account" style="float: left;height: 45px;width: 200px;border-radius: 5px  5px 5px 5px;margin-left: 180px;margin-top: 20px;margin-bottom:10px;color:white; font-family: sans-serif;font-size: 1.2em;padding: 2px 2px;box-sizing: border-box;background:#5d974a;border: 1px solid black; ">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        <div>
            <p style="padding: 5px 90px;box-sizing: border-box;font-size: .9em;">English (UK)&emsp;हिन्दी&emsp;اردو &emsp;मराठी&emsp;தமிழ்&emsp;తెలుగు &emsp;മലയാളം &emsp;ಕನ್ನಡ</p>

            <hr style="width:40%;margin-left: 70px;">
            <br>
            <p class="i" style="padding: 5px 90px;box-sizing: border-box;font-size: 1.1em;">Sign&emsp; UpLog&emsp; InMessenger&emsp;Facebook Lite &emsp;Mobile&emsp;Find Friends&emsp;People&emsp;Pages</p>
            <div>

            </div>
</body>

</html>
