<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login | Learning</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center text-center mt-5">
      <div class="col-md-6 mt-5 border shadow-sm">
        <form action="/login/login" method="POST" style="max-width:600px;margin:auto;">
          <?= csrf_field(); ?>
          <h3 class="h3 text-center">Login</h3>
          <input type="email" name="Email" placeholder="Email Address" class="form-control mb-2" required autofocus>
          <input type="password" name="Password" placeholder="Password" class="form-control mb-2" required>
          <?php if (session()->getFlashdata('error')) { ?>
            <div class="alert alert-danger">
              <?= session()->getFlashdata('error'); ?>
            </div>
          <?php } ?>
          <input type="checkbox" name="Remember" id="Remember" class="mb-2">
          <label for="Remember">Remember Me</label>
          <div class="mt-2">
            <button class="btn btn-primary mb-2" name="signin" type="submit">Sign In</button>
          </div>
          <div class="mb-2">
            <h7>Create An Account <a href="/Page/register">Click Here</a></h7>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>