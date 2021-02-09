<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>To-Doing List - Create List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="createList.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form>
    <h1 class="h3 mb-3 fw-normal">Create a new List?</h1>
    <h2>Enter a name for your list:</h2>
    <label for="listName" class="visually-hidden">List Name</label>
    <input type="listName" id="listName" class="form-control" placeholder="List Name" required autofocus>
    <h2>How many items would you like to add to the list?</h2>
    <label for="numItems" class="visually-hidden">Number of Items</label>
    <input type="numItems" id="numItems" class="form-control" placeholder="Number of Items" required autofocus>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>
</main>
  </body>
</html>
