<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PERPUSTAKAAN</title>

      <link rel="shortcut icon" href="layouts/assets/img/icon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/perpustakaan.png" class="brand">
                  <div class="user">Pria Mitra Purba</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu 2.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=buku_tampil">
                                    <img class="icon" src="layouts/assets/img/menu 2.png" alt=""> Buku
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=anggota_tampil">
                                    <img class="icon" src="layouts/assets/img/menu 2.png" alt=""> Anggota
                              </a>
                        </li>
                 <li>
                              <a href="index.php?hal=peminjaman_tampil">
                                    <img class="icon" src="layouts/assets/img/menu 2.png" alt=""> Peminjaman
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by PRIA MITRA PURBA
            </footer>
      </main>

</body>

</html>