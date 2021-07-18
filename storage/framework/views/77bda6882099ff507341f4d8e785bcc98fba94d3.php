<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background:#f1f2f6;
        }
      .sd {
        color:black;
        text-decoration:none;
      }
       a:hover{
        color:#FD8469;
        text-decoration:none;
      }
      .content{
        width:852pt;
        height:68pt;
        background:#ffffff;
    }
    .header{
        height:438pt;
        width:230px;
        background:#ffffff;
  
    }
    .footer{
        width:100%;
        height:73px;
        background:#FFC947;
    }
    .data{
      width:300px;
      height:80px;
    }
    h6{
      color:#bdc3c7;
      padding-left:60px;
      font-size:8pt;
    }
    </style>
    <title>Kas KU</title>
  </head>
  <body>
  <div class="footer">
  <div style="position:absolute;left:1270px; top:16px;color:#FD8469;"><a href="<?php echo e(route('logout')); ?>" class="btn btn-danger">Keluar</a></div>
<div style="padding-left:30px; padding-top: 10px;">
    <img width="40px" height="40px" src="../resources/views/kas.png">
<br>
</div>
     <div style="padding-left:36px; color:#FD8469;">Kas</div>
     <hr style="color:white; height: 3px;"> </hr>
     
  </div>
  <div style="display: flex;">
   <div class="header">
<!--admintrasi--> 
<div style="padding-left:80px; padding-top:20px;">      
<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#FD8469" class="bi bi-person-circle" viewBox="0 0 16 16" >
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></svg></div>
<div class="sd" style="padding-left:15px;"><?php echo e(Auth::user()->name); ?>

</div>
<hr><h5 style="padding-left: 55px;">Navigasi</h5><hr></hr></hr>
<!----dashboard---->
<div class="card-header btn-primary" style="background:#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FD8469" class="bi bi-speedometer2" viewBox="0 0 16 16" >
  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
</svg>
<a href="../public/dashboard" class="sd">Dashboard</a>
</div>
<!----Input Pengeluaran---->
<div class="card-header btn-primary"style="background:#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FD8469" class="bi bi-layers-half" viewBox="0 0 16 16">
  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
</svg>
<a href="../public/input" class="sd">Input Pengeluaran</a>
</div>
<!----data Pengeluaran---->
<div class="card-header btn-primary"style="background:#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FD8469" class="bi bi-layers-half" viewBox="0 0 16 16">
  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
</svg>
<a href="../public/data" class="sd">Data Pengeluaran</a>
</div>
<!---Kas--->
<div class="card-header btn-primary"style="background:#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FD8469" class="bi bi-cash" viewBox="0 0 16 16">
  <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
  <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
</svg>
<a href="../public/kas" class="sd">Kas</a>
</div>
<!----Hasil---->
<div class="card-header btn-primary"style="background:#ffffff">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FD8469" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg>
<a href="../public/hasil" class="sd">Hasil</a>
</div>
</div>
  <?php echo $__env->yieldContent('content'); ?>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH /opt/lampp/htdocs/uasLar/resources/views/sidebar.blade.php ENDPATH**/ ?>