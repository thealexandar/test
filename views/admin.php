<?php require_once "../core.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citrus</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="../assets/style/hamburgers.css" rel="stylesheet">
</head>
<body>


<div class="fixed-top">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4 collapse-content">
            <div class="container">
            <a class="navbar-brand float-left" href="#">CITRUS.</a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="../index.php">Home</a>
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
        <h2>Admin panel</h2>
    </div>
</div>
<div class="container main">
    <div class="comments border-top mt-5 pt-5 pb-5">
        <h2>Pending Comments</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($unnaprovedComments as $unnaproved): ?>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-<?= $unnaproved->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog rounded-0">
                    <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Comment id #<?= $unnaproved->id; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Name: <?= $unnaproved->name; ?></h5>
                        <p>Comment: <?= $unnaproved->message; ?></p>
                    </div>
                    <div class="modal-footer">
                        <form method="post">
                            <button type="button" class="btn btn-secondary custom-btn" data-dismiss="modal">Close</button>
                            <input type="hidden" name="update_id" value="<?= $unnaproved->id; ?>">
                            <button type="submit" class="btn btn-success custom-btn" name="approve">Approve</button>
                            <button type="submit" class="btn red-bg custom-btn" name="delete">Trash</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
                <tr>
                    <th scope="row"><?= $unnaproved->id; ?></th>
                    <td><?= $unnaproved->name; ?></td>
                    <td><?= $unnaproved->email; ?></td>
                    <td><?= $unnaproved->message; ?></td>
                    <td><?= $unnaproved->created_at; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary custom-btn mt-0" data-toggle="modal" data-target="#exampleModal-<?= $unnaproved->id; ?>">
                            view
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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



