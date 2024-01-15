<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Blogsite</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <form action="" class="d-flex align-items-center gap-3">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create Blog
              </button>
          </form>
        </div>
      </nav>
      <div class=" d-flex flex-column align-items-center p-3 gap-3 blog-container" >
        <?php
          include 'php/connection.php';

          $query = mysqli_query($conn, "SELECT * FROM posts");
          while($row = mysqli_fetch_assoc($query)) {
        ?>
        <article class="blog-post">
            <h2>Author: <?= $row['author']?></h2>
            <h6>Title: <?= $row['title']?></h6>
            <p><?= $row['content']?></p>
        </article>
        <?php } ?>
        
      </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="php/create.php" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create your Blog</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Author</span>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="author">
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Title</span>
                <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" name="title">
              </div>
              <div>
              <textarea style="width:470px; border-radius: 5px;" rows="4" placeholder="What's on your mind" name="content"></textarea>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" name="create">Create</button>
        </div>
        </form>
      </div>
    </div>
  </div>
    <script src="bootstrap/js/bootstrap.min.js" ></script>
  </body>
</html>