<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citrus</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="assets/style/hamburgers.css" rel="stylesheet">
</head>
<body>


<div class="fixed-top">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 collapse-content">
            <div class="container">
            <a class="navbar-brand float-left" href="#">CITRUS.</a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="views/admin.php">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-transparent">
        <div class="container">
            <button class="hamburger hamburger--spin ml-auto" type="button" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </nav>
</div>
<div class="header bg-light">
    <div class="container text-center">
        <h1 clas="">citrus</h1>
        <h3 class="">cocktails</h3>
    </div>
</div>
<div class="container main">
    <div class="row products mb-5 pb-5">
        <?php foreach($data['products'] as $product): ?>
        <div class="col-md-4 mb-5">
            <div class="card rounded-0 border-0 shadow">
                <div class="img-wrap">
                    <img src="<?= $product->image; ?>" class="card-img-top rounded-0" alt="<?= $product->name; ?>">
                </div>

                <div class="card-body text-center">
                    <h5 class="card-title"><?= $product->name; ?></h5>
                    <p class="card-text"><?= $product->description; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="comments border-top mt-5 pt-5 pb-5">
        <h2 class="blue">Comments</h2>
        <?php foreach($data['comments'] as $comment): ?>
        <div class="card rounded-0 mt-3">
            <div class="card-header">
               <?= $comment->name; ?>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p><?= $comment->message; ?></p>
                </blockquote>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="add-comment text-center">
        <h2 class="mb-5">Add Comment</h2>
        <form method="post" class="w-50 ml-auto mr-auto">
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                <small class="text-danger"><?= $data['addcomm']['name_err']; ?></small>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                <small class="text-danger"><?= $data['addcomm']['email_err'];  ?></small>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" id="exampleFormControlTextarea1" rows="3"></textarea>
                <small class="text-danger"><?=$data['addcomm']['message_err']; ?></small>
            </div>
            <button type="submit" class="btn btn-primary custom-btn" name="submit">Submit</button>
        </form>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });
</script>
</body>
</html>