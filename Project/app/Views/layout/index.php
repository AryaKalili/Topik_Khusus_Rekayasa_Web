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
  <?php $data = session()->get('data'); ?>
  <!-- Navbar -->
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
            <a class="nav-link" href="#"><?= $data['username']; ?></a>
            <a class="nav-link ms-3" href="/login/logout">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
  </section>

  <section id="header">
    <!-- Header page -->
    <div class="container">
      <hr />
      <div class="row text-center">
        <div class="col">
          <img src="/asset/img/download.jfif" class="img-fluid shadow-sm bg-body rounded" style="width: 1280px;heigth: 450px;;">
        </div>
      </div>
      <hr />
    </div>
  </section>

  <section id="main" class="mb-3">
    <!-- main page -->
    <div class="container">
      <div class="row">
        <div class="col">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, maiores incidunt! Neque, sed repudiandae? Distinctio laborum nulla earum obcaecati qui deleniti laudantium voluptate sequi rerum, vero dolorum omnis tempore incidunt? Adipisci omnis id perferendis neque voluptatem nisi soluta autem placeat nesciunt magni, provident aliquam, alias libero, cupiditate eligendi repellat a!
        </div>
        <div class="col">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. A, corrupti rerum repellendus accusantium distinctio recusandae nisi facilis inventore veniam porro maiores tenetur soluta aut eveniet magni ipsum consectetur aperiam? Quo, eaque quibusdam? Itaque aut a fugiat! Quam beatae labore quaerat sit eius consequuntur temporibus, hic, esse alias, facere corrupti ut.
        </div>
        <div class="col">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus accusantium omnis, non quaerat ipsum repellendus, maxime aspernatur error aut earum dolorem exercitationem tempore adipisci natus vel voluptate. Illo ullam velit enim, quasi iusto quisquam earum esse? Eveniet quos similique quidem architecto quod, minima ut cum magni explicabo quas. Commodi, tenetur.
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <hr />
    <footer class="d-flex flex-wrap justify-content-center text-center align-items-center p-5 border-top bg-dark">
      <div class="container">
        <p class="text-muted">© 2021 Company, Inc</p>
      </div>
    </footer>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>