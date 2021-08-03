<?php
# الاتصال مع قاعدة البيانات
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pdfbooks';
$con = mysqli_connect ($host,$user,$pass,$db);


include 'header.php';
if (isset($_GET['id'])){
    $id=$_GET['id'];
}
?>

<!--Start Show Book -->
<div class="books">
    <div class="container">
        <div class="book">
            <div class="row">
                <?
                $query="SELECT*FROM books WHERE id='$id'";
                $result=mysqli_query($con,$query);
                $row=mysqli_fetch_assoc($result);
                ?>
                <div class="col-md-4">
                    <div class="book-cover">
                        <img src="uploads\bookCovers/<?php echo $row['bookCover'];?>"alt="Book Cover">
                    </div>
                </div>
                    <div class="col-md-8">
                        <div class="book-content">
                            <h4><?php echo $row['bookTitle'];?> </h4>
                            <h5><a href="author.php?author=<?php echo $row['bookAuthor'];?>"><?php echo $row['bookAuthor'];?></a></h5>

                            <hr>
                         <p><?php echo $row['bookContent'];?></p>
                            <button class="custom-btn">
                                <a href="uploads\books/<?php echo $row['book'];?>"download> تحميل الكتاب</a>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!--end Show Book -->

<!--Start Related Books -->
<div class="related-books ">
    <div class="container">
        <h2>كتب ذات صله</h2>
        <div class="row">
            <?php
            if(isset($_GET['category'])){
                $bookCat=$_GET['category'];
            }
            //Fetch Related Books
            $query="SELECT*FROM books WHERE bookCat='$bookCat' AND id !='$id'";
            $res=mysqli_query($con,$query);
            while ($row=mysqli_fetch_assoc($res)){
               ?>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="related-book text-center">
                        <div class="cover">
                            <a href="book.php?id=<?php echo $row['id'];?>&&category=<?php echo $row['bookCat'];?>">
                                <img src="uploads/bookCovers/<?php echo $row['bookCover'];?>" alt="Book cover">
                            </a>
                        </div>
                        <div class="title">
                            <h5>
                                <a href="book.php?id=<?php echo $row['id'];?>&&category=<?php echo $row['bookCat'];?>"><?php echo $row['bookTitle'];?></a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>



<!--End Related Books -->




