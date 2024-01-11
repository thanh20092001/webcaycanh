<?php require_once "./mvc/views/block/admin_header.php" ?>




<body  class="app sidebar-mini rtl">
<style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
 <?php require_once "./mvc/views/block/admin_navbar.php" ?>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  
  <?php require_once "./mvc/views/block/admin_sidebar.php" ?>

   <?php require_once "./mvc/views/pages/".$data["Page"].".php" ?>
   <?php require_once "./mvc/views/block/admin_sidebar.php" ?>
   <!-- Essential javascripts for application to work-->
  <script src="./public/js/jquery-3.2.1.min.js"></script>
  <script src="./public/js/popper.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <script src="./public/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="./public/js/plugins/pace.min.js"></script>

</body>
  
  

</html>