<?php include "header.php";
if ($_SESSION["user_role"] == '0') {
    header("Location: {$hostname}/admin/post.php");
}
?>
  <div id="admin-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="adin-heading">Update Category</h1>
        </div>
        <div class="col-md-offset-3 col-md-6">
        <?php
include 'config.php';
$cat_id = $_GET['id'];
/* query record for modify*/
$sql = "SELECT * FROM category WHERE category_id ='{$cat_id}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {?>
              <!-- Form Start -->
              <form action="<?php $_SERVER['PHP_SELF'];?>" method ="POST">
                  <div class="form-group">
                      <input type="hidden" name="cat_id"  class="form-control" value="<?php echo $row['category_id']; ?>">
                  </div>
                  <div class="form-group">
                      <label>category Name</label>
                      <input type="text" name="cat_name" class="form-control" value="<?php echo $row['category_name']; ?>"  placeholder="" required>
                  </div>
                  <input type="submit" name="submit" class="btn btn-primary" value="Update" />
              </form>
               <!-- Form End-->
              <?php
}
}
?>
        </div>
      </div>
    </div>
  </div>
  <?php
if (isset($_POST['submit'])) {
    /* query for update category table */
    $sql1 = "UPDATE category SET category_id='{$_POST['cat_id']}', category_name='{$_POST['cat_name']}'  WHERE  category_id={$_POST['cat_id']}";

    if (mysqli_query($conn, $sql1)) {
        // redirect all category page
        header("location: {$hostname}/admin/category.php");
    }
}
?>
<?php include "footer.php";?>
