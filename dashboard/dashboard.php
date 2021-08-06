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

    <!-- /جدول عدد الكتب  -->
    <div class="show-cat">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">الرقم</th>
                <th scope="col">عنوان الكتاب</th>
                <th scope="col">مؤلف الكتاب</th>
                <th scope="col">تاريخ الإضافة</th>
                <th scope="col">الإجراء</th>

            </tr>
            </thead>
            <tbody>
            <!-- Fetch books from database -->
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $limit = 10;
            $start = ($page - 1) * $limit;
            $query = "SELECT * FROM books ORDER BY id DESC LIMIT $start, $limit";
            $res = mysqli_query($con, $query);
            $sNo = 0;
            while ($row = mysqli_fetch_assoc($res)) {
                $sNo++;
                ?>

                <tr>
                    <td><?php echo $sNo; ?></td>
                    <td><?php echo $row['bookTitle']; ?></td>
                    <td><?php echo $row['bookAuthor']; ?></td>
                    <td><?php echo $row['bookDate']; ?></td>

                    <td>
                        <a href="edit-book.php?id=<?php echo $row['id']; ?>" class="custom-btn">تعديل</a>
                        <a href="books.php?id=<?php echo $row['id']; ?>" class="custom-btn confirm">حذف</a>
                    </td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>


    <!-- Start pagination -->

        <?php
        $query = "SELECT * FROM books";
        $result = mysqli_query($con, $query);
        $total_cat = mysqli_num_rows($result);
        $total_pages = ceil($total_cat / $limit);
        ?>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="books.php?page=<?php if (($page - 1) > 0) {
                        echo  $page - 1;
                    } else {
                        echo 1;
                    }

                    ?>">السابق</a></li>
                <?php
                for ($i = 1; $i <= $total_pages; $i++) {
                    ?>
                    <li class="page-item"><a class="page-link" href="books.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                }
                ?>
                <li class="page-item"><a class="page-link" href="books.php?page=<?php
                    if (($page + 1) < $total_pages) {
                        echo $page + 1;
                    } elseif (($page + 1) >= $total_pages) {
                        echo $total_pages;
                    }
                    ?>">التالي</a></li>
            </ul>
        </nav>
        <!-- End pagination -->
    </div>

    <?php
    include 'footer.php';
    ?>

    <?php
}