<?php
include('session.php');
?>
<?php
include('header.php');
 ?>
    <div class="row">

        <nav class="col-md-3">
          <ol class="nav nav-pills nav-stacked">
          <?php
          while( $row = mysqli_fetch_assoc($result)){
            echo '<li><a href="http://localhost:8080/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
          }
          ?>
          </ol>
        </nav>
        <div class="col-md-9">

          <article>
          <?php
          if(empty($_GET['id']) === false ) {
              $sql = "SELECT topic.id,title,name,description FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id=".$_GET['id'];
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
          }
          ?>

          <form class="" action="update_process.php" method="post">
            <div class="form-group">
              <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="author" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="10" name="description"><?php echo strip_tags($row['description'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');?></textarea>
            </div>
            <input type="submit" name="name" class="btn btn-default  btn-lg">

          </form>

          </article>


          <hr>
          <div id="control">
            <div class="btn-group" role="group" aria-label="...">
              <input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default  btn-lg"/>
              <input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
            </div>
            <a href="http://localhost:8080/write.php" class="btn btn-success  btn-lg">쓰기</a>
          </div>
        </div>
    </div>


<?php
include('footer.php');
 ?>
