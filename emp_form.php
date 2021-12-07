




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Employee Form</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php

    include 'navbar.php';

    ?>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="Index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        

        

        <?php
        include 'side_bar.php';

        ?>

      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Employee Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Index.php">Home</a></li>
                <li class="breadcrumb-item active">Employee Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Employee Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="emp_actions/emp_form_action.php" id="myform" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="emp_name" id="exampleInputEmail1" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1" >Gender</label>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" name="emp_gender" value="Male">
                        <label for="customRadio1" class="custom-control-label">Male</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" name="emp_gender" value="Female">
                        <label for="customRadio2" class="custom-control-label">Female</label>
                      </div>  
                      <script>
                       document.querySelector('input[name=emp_gender][value=Male]').checked = true;
                     </script>
                   </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="emp_mobile" placeholder="Number">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label><br>
                        <small>
                          Upload an image between 2MB in JPG,PNG,JPEG and GIF format.
                        </small>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fileToUpload" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>

                      </div>
                    </div>
                  </div>

                </div>


                <div class="card-footer">
                  <button  class="btn btn-primary" type="submit" value="submit" id="submit">Submit</button>
                </div>
              </form>
              <pre>
                <div id="res" class="res"></div>
              </pre>
            </div>

          </div>

          <div class="col-md-6">

          </div>

        </div>
        
      </div>
    </section>

  </div>
  

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

<script>
  $(document).ready(function () {
    $("#submit").click(function (e) {
      e.preventDefault();

      var myform = document.getElementById("myform");
      var fd = new FormData(myform);
      $.ajax({
        url: "emp_actions/emp_form_action.php",
        data: fd,
        cache: false,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (dataofconfirm) {
                                        // alert(dataofconfirm);
                                        $("#res").html(dataofconfirm);
                                        // $(".res").fadeOut(3000);
                                        

                                      }
                                    });

    });
// $(".reset").click(function() {
//     $(this).closest('form').find("input[type=text], textarea").val("");
// });
//   $('#submit').click(function() {
// // trigger("reset");
//    setTimeout(function(){location.reload();},1000);
//    });
});
  // location.reload(true);


</script><script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
