<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $title; ?></title>
</head>

<body>
  <section id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Learning</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" aria-current="page" href="/Page">Home</a>
            <a class="nav-link" href="/Page/student">Student List</a>
            <a class="nav-link" href="/Page/learning">Learning List</a>
            <a class="nav-link ms-3" href="/login/logout">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <hr />
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Email</th>
          <th scope="col">Name</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $a = 1;
        foreach ($active as $act) :
          $status = $act['status'];
          if ($status == 'Online') : ?>
            <tr>
              <th scope="row"><?= $a++; ?></th>
              <td><?= $act['email']; ?></td>
              <td><?= $act['username']; ?></td>
              <td><?= $act['status']; ?></td>
            </tr>
        <?php
          endif;
        endforeach;
        ?>

      </tbody>
    </table>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>