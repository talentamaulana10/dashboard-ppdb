<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="home.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>YPL</h3>
                <strong>BS</strong>
            </div>
            <div class="sidebar-header" style="display:flex;justify-content:flex-start;align-items:center;flex-direction:row" >
            <img src="https://ppdb.kliksekolah.com/static/media/logo-YPL.70e2b523.png" style="width:20%;" >    
            <p class="m-2" style="color:white" >Talenta</p>
            </div>


            <ul class="list-unstyled components">
            <li>
                <a href="home.php">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="pendaftaran.php">
                    <i class="fas fa-file"></i>
                        Pendaftaran
                    </a>
                </li>
                <li>
                    <a href="uploadDokumen.php">
                    <i class="fas fa-upload"></i>
                        Upload Dokumen
                    </a>
                </li> <li>
                    <a href="uploadBukti.php">
                    <i class="fas fa-upload"></i>
                        Upload Bukti Transfer
                    </a>
                </li> <li>
                    <a href="cetak.php">
                    <i class="fas fa-print"></i>
                        Cetak Kartu /Undangan
                    </a>
                </li> <li>
                    <a href="uploadBuktiUpp.php">
                    <i class="fas fa-book"></i>
                        Upload Bukti Transfer UPP
                    </a>
                </li>
            </ul>


          
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <!-- <span>Toggle Sidebar</span> -->
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                            <li class="nav-item">
                            <a href=""><i class="fas fa-cog"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav aria-label="breadcrumb">
                
                 <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pendaftaran</li>
  </ol>
  <div>
<form>
<select class="form-control form-control-sm">
  <option>- pilih jalur -</option>
  <option>Jalur Lomba</option>
  <option>Jalur Olimpiade</option>
  <option>Jalur Prestasi Akademik</option>
  <option>Jalur Prestasi Non Akademik</option>
  <option>Jalur Test</option>
</select> <br>
<button style="width: 100%;" type="button" class="btn btn-primary">Submit</button>
</form>
  </div>

  
</nav>

        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>