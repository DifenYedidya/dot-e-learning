<?php
    $showClassName2 = mysqli_query($conn, "SELECT mk.NAMA_MK ,k.KODE_MK , k.SESI_KELAS FROM matakuliah AS mk 
    JOIN kelas AS k ON mk.KODE_MK = k.KODE_MK 
    JOIN kelas_mahasiswa AS km ON k.KODE_KELAS = km.KODE_KELAS 
    JOIN user_mahasiswa AS um ON um.NIM = km.NIM
    WHERE um.username ='$_SESSION[username]'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../data/favicon.jpg">
</head>
<body>
<nav
      class="navbar navbar-expand-lg navbar-light"
      style="background-color: #0db8de"
    >
      <div class="container-fluid">
        <a class="navbar-brand">E-learning Esa Unggul</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="../dashboard/index.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../profile/index.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../grade/index.php">Grade</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Class
              </a>
              <ul
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
              <?php while( $rows = mysqli_fetch_assoc($showClassName2) ) : ?>
                <li>
                  <a class="dropdown-item" href="../detail-class/index.php?class=<?=$rows['NAMA_MK']?>"
                    ><?=$rows['NAMA_MK']?></a
                  >
                </li>
              <?php endwhile;?> 
              </ul>
            </li>
            <li class="nav-item">
              <div class="sign-out">
                <a class="nav-link" href="../login/logout.php">Sign out</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</body>
</html>