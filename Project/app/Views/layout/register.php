<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $title; ?></title>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center text-center mt-5">
      <div class="col-md-6 mt-5 border shadow-sm">
        <form action="/login/register" method="POST" style="max-width:600px;margin:auto;">
          <?= csrf_field(); ?>
          <h3 class="h3 text-center">Register</h3>
          <input type="text" name="Username" placeholder="Username" class="form-control mb-2" required autofocus>
          <input type="email" name="Email" placeholder="Email Address" class="form-control mb-2" required>
          <input type="password" name="Password" placeholder="Password" class="form-control mb-2" required>
          <input type="password" name="Password1" placeholder="Confirm Password" class="form-control mb-2" required>
          <div class="mt-2">
            <button class="btn btn-primary mb-2" type="submit">Sign In</button>
          </div>
          <div class="mb-2">
            <h7>Have An Account Sign Up<a href="/Page/login">Here</a></h7>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>