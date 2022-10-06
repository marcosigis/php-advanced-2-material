<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title><?= $recipe['title'] ?></title>
    </head>
    <body>
    <?php include '..\src\include\header.html' ?>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $recipe['title'] ?></h5>
        <p class="card-text"><?= $recipe['description'] ?></p>
         <a href="/delete" class="btn btn-primary">Delete</a>    <!-- this doesnt work, TO FIX -->
      </div>
    </div>

       
        <?php echo $id ?>
    </body>
</html>
