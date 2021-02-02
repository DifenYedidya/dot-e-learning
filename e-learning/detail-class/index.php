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
    
    $result = mysqli_fetch_assoc($showClassName)
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
    <title>Detail Class</title>
  </head>
  <body>
  <?php include'../connection/navbar.php';?>
    <div class="global-container">
      <h2 class="class-name"><?= $_GET["class"]?></h2>
      <div class="content-container">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                Week 1
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-module">Module week 1</div>
                  <div class="card-body">
                    <h5 class="card-title">Module 1</h5>
                    <a
                      href="../data/moduleNameHere.txt"
                      class="btn btn-primary"
                      download="ModuleDownloaded"
                      >Download here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-forum">Forum week 1</div>
                  <div class="card-body">
                    <h5 class="card-title">Forum 1</h5>
                    <a href="../forum/index.php?class=<?=$result['NAMA_MK']?>" class="btn btn-primary"
                      >Access forum here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-quiz">Quiz week 1</div>
                  <div class="card-body">
                    <h5 class="card-title">Quiz 1</h5>
                    <a href="../quiz/index.php" class="btn btn-primary"
                      >Access quiz here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-task">Task week 1</div>
                  <div class="card-body">
                    <h5 class="card-title">Task 1</h5>
                    <a href="../task/index.php" class="btn btn-primary"
                      >Access Task here</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                Week 2
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-module">Module week 2</div>
                  <div class="card-body">
                    <h5 class="card-title">Module 2</h5>
                    <a
                      href="../data/moduleNameHere.txt"
                      class="btn btn-primary"
                      download="ModuleDownloaded"
                      >Download here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-forum">Forum week 2</div>
                  <div class="card-body">
                    <h5 class="card-title">Forum 2</h5>
                    <a href="../forum/index.php?class=<?=$result['NAMA_MK']?>" class="btn btn-primary"
                      >Access forum here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-quiz">Quiz week 2</div>
                  <div class="card-body">
                    <h5 class="card-title">Quiz 2</h5>
                    <a href="../quiz/index.php" class="btn btn-primary"
                      >Access quiz here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-task">Task week 2</div>
                  <div class="card-body">
                    <h5 class="card-title">Task 2</h5>
                    <a href="../task/index.php" class="btn btn-primary"
                      >Access task here</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Week 3
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-module">Module week 3</div>
                  <div class="card-body">
                    <h5 class="card-title">Module 3</h5>
                    <a
                      href="../data/moduleNameHere.txt"
                      class="btn btn-primary"
                      download="ModuleDownloaded"
                      >Download here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-forum">Forum week 3</div>
                  <div class="card-body">
                    <h5 class="card-title">Forum 3</h5>
                    <a href="../forum/index.php?class=<?=$result['NAMA_MK']?>" class="btn btn-primary"
                      >Access forum here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-quiz">Quiz week 3</div>
                  <div class="card-body">
                    <h5 class="card-title">Quiz 3</h5>
                    <a href="../quiz/index.php" class="btn btn-primary"
                      >Access quiz here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-task">Task week 3</div>
                  <div class="card-body">
                    <h5 class="card-title">Task 3</h5>
                    <a href="../task/index.php" class="btn btn-primary"
                      >Access task here</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >
                Week 4
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-module">Module week 4</div>
                  <div class="card-body">
                    <h5 class="card-title">Module 4</h5>
                    <a
                      href="../data/moduleNameHere.txt"
                      class="btn btn-primary"
                      download="ModuleDownloaded"
                      >Download here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-forum">Forum week 4</div>
                  <div class="card-body">
                    <h5 class="card-title">Forum 4</h5>
                    <a href="../forum/index.php?class=<?=$result['NAMA_MK']?>" class="btn btn-primary"
                      >Access forum here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-quiz">Quiz week 4</div>
                  <div class="card-body">
                    <h5 class="card-title">Quiz 4</h5>
                    <a href="../quiz/index.php" class="btn btn-primary"
                      >Access quiz here</a
                    >
                  </div>
                </div>
              </div>
              <div class="accordion-body">
                <div class="card text-center">
                  <div class="card-header-task">Task week 4</div>
                  <div class="card-body">
                    <h5 class="card-title">Task 4</h5>
                    <a href="../task/index.php" class="btn btn-primary"
                      >Access task here</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/script.js"></script>
  </body>
</html>
