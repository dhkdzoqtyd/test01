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
            <form action="write_process.php" method="post">

              <div class="form-group">
                <label for="form-title">제목</label>
                <input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
              </div>

              <div class="form-group">
                <label for="form-author">작성자</label>
                <input type="text" class="form-control" name="author" id="form-author" placeholder="작성자를 적어주세요.">
              </div>

              <div class="form-group">
                <label for="form-author">본문</label>
                <textarea class="form-control" rows="10" name="description"  id="form-author" placeholder="본문을 적어주세요."></textarea>
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
