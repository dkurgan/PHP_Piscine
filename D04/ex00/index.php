<?php
    session_start();
    if ($_GET['submit'] == "OK")
    {
      $_SESSION['login'] = $_GET['login'];
      $_SESSION['passwd'] = $_GET['passwd'];
    }
 ?>
  </head>
  </style>
  <center>
  <body>
    <form method="get" action="index.php">
      Username:<br />
      <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>"/>
      <br />
      Password:<br />
      <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>"/>
      <br /> <br />
      <input type="submit" value="submit" />
    </form>
    </center>
  </body>
</html>
