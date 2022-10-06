<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add new recipe</title>
</head>
<body>
<?php include '..\src\include\header.html' ?>
        <form class="form" action=""  method="post">
                    <div>
                        <label for="title"></label><br>
                        <input id="title" type="text" name="title" placeholder="title"/>
                    </div>
                    <div>
                        <label for="description"></label><br>
                        <input id="description" type="text" name="description" placeholder="description" />
                    </div>
                  
                    <div >
                        <button type="submit">Send recipe!</button>
                    </div>
        </form>
</body>
</html>