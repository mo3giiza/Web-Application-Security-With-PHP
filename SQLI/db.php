<?php

    // 0pen The Connection
   $con = mysqli_connect("localhost","root","","testSQLI");
   if(!$con){ die("Connection Failed") . mysqli_error(); exit; }