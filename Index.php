<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>

<?php
# الاتصال مع قاعدة البيانات
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pdfbooks';
$con = mysqli_connect ($host,$user,$pass,$db);
include 'header.php';
include 'connection.php';
?>

<!--Start  Banner -->
<div class="banner">
    <div class="lib-info">
        <h4>حمل عشرات الكتب مجانا</h4>
        <p>من أجل نشر المعرفه والثقافة وغرس حب القراءة بين المتحدثين باللغه العربية</p>
    </div>
</div>
<!--End  Banner -->

<!-- Start Books -->
<div class="books">
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM books ORDER BY id DESC";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-6 col-lg-2">
                        <div class="card text-center">
                            <div class="img-cover">
                                <img src="uploads\bookCovers/<?php echo $row['bookCover']; ?>" alt="Book Cover" class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="book.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat']; ?>"><?php echo $row['bookTitle']; ?></a>
                                </h4>
                                <p class="card-text"><?php echo mb_substr($row['bookContent'], 0, 150, "UTF-8"); ?></p>
                                <a href="book.php?id=<?php echo $row['id']; ?>&&category=<?php echo $row['bookCat']; ?>">
                                    <button class="custom-btn">تحميل الكتاب</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="text-center">لاتوجد أي كتب</div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- End Books -->

<!--start  footer -->
<?php
include 'footer.html';
?>
<!--End  Footer -->

<!--jQuery -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="Bootstrap V.4/jquery.js"></script>

<!--Bootstrap javascript -->
<script src="js/bootstrap.min.js"></script>
<script src="Bootstrap V.4/javascript.js"></script>
</body>
</html>
