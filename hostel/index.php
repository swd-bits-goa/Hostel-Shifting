<html>
<head>
  <title>Hostel Allotment</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="login.css">
  <script src = "login.js"></script>
</head>

<body>
  <div id = "php_container"></div>
  <div id = "upper_container">
    <div id = "login_box">
      <div id = "login_heading">Hostel Allotment</div>
      <div class = "login_container" id = user_container>
        <div class = "login_text" id = "user_text">ID:</div>
        <div class = "login_field" id = "user_field" contenteditable="true" spellcheck="false"></div>
      </div>
      <div class = "login_container" id = pswd_container>
        <div class = "login_text" id = "pswd_text">Password:</div>
        <div class = "login_field" id = "pwd_data" contenteditable="true" spellcheck="false" ></div>
      </div>
      <div id = "submit_button">Login</div>
    </div>
  </div>

  <div id = "overlay"></div>
  <div id="dialog-box">
    <div class = "dialog-text" id = "dialog-text-id">PLACEHOLDER</div>
    <input type = "submit" value = "Confirm" class = "dialog-continue" id = "dialog-confirm">
    <input type = "submit" value = "Cancel" class = "dialog-continue" id = "dialog-cancel">
  </div>

</body>

</html>
