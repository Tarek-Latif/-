<?php
session_start();
include 'include/connection.php';
include 'header.php';
if (!isset($_SESSION['adminInfo'])) {
  header('Location:index.php');
} else {


?>

  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->

  <div class="container-fluid">
    <div class="content">
      <div class="statistics text-center">
        <div class="row">
          <div class="col-sm-6">
            <div class="statistic">
              <?php

              # الاتصال مع قاعدة البيانات
              $host = 'localhost';
              $user = 'root';
              $pass = '';
              $db = 'pdfbooks';
              $con = mysqli_connect ($host,$user,$pass,$db);


              $query = "SELECT id FROM books";
              $result = mysqli_query($con, $query);
              $bookNum = mysqli_num_rows($result);
              ?>
              <h3><?php echo $bookNum; ?></h3>
              <p>عدد الكتب</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="statistic">
              <?php
              $query = "SELECT id FROM categories";
              $result = mysqli_query($con, $query);
              $catNum = mysqli_num_rows($result);
              ?>
              <h3><?php echo $catNum; ?></h3>
              <p>عدد التصنيفات</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
    <?php
    include 'footer.php';
    ?>

<?php
}
?>