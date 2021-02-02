<?php
  require'../connection/conn.php';
  session_start();
    if ($_SESSION['loggedin'] != true) {
      header("Location:../login/index.php");
    }
   
    $showClassName = mysqli_query($conn, "SELECT mk.NAMA_MK ,k.KODE_MK , k.SESI_KELAS FROM matakuliah AS mk 
    JOIN kelas AS k ON mk.KODE_MK = k.KODE_MK 
    JOIN kelas_mahasiswa AS km ON k.KODE_KELAS = km.KODE_KELAS 
    JOIN user_mahasiswa AS um ON um.NIM = km.NIM    
    WHERE um.username ='$_SESSION[username]'");
    
    // $result = mysqli_fetch_assoc($showClassName)
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="asset/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <link rel="shortcut icon" href="../data/favicon.jpg">
    <title>Dashboard</title>
  </head>
  <body>
    <?php include'../connection/navbar.php';?>
    <div class="global-container">
      <div class="column">
        <?php while( $row = mysqli_fetch_assoc($showClassName) ) : ?>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?=$row['NAMA_MK']?></h5>
                <p class="card-text"><?=$row['SESI_KELAS']?></p>
                <a href="../detail-class/index.php?class=<?=$row['NAMA_MK']?>" class="btn btn-primary"
                  >Access the class</a
                >
              </div>
            </div>
          </div>
        <?php endwhile;?>
      </div>
    </div>
    <script src="asset/script.js"></script>
  </body>
</html>
