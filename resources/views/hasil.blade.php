@extends('sidebar')
  @section("content")
  <div style="padding-left:20px;">
  <div class="card container mt-3" style="width:810pt; background:#FFC947">
    <div class="card container ">
        <div class="card-header">Analisa</div>
        <?php
       function rupiah($angka){
	
        $hasil_rupiah =  "Rp " .number_format($angka,2,',','.');
        return $hasil_rupiah;
       
      }
        ?>
        <div class="card-body">
        <?php if($data-$data2>0){?>
          <h5> 1.Jumlah Saldo:</h5> <h5 style="color: green;"> <?php echo rupiah($data-$data2);?></h5>
          <?php }else{?>
           <h5> 1.Jumlah Saldo:</h5> <h5 style="color: red;"> <?php echo rupiah($data-$data2);?></h5>
          <?php } ?>
          <h5>2.Pengeluranan terbesar: </h5><h5 style="color:green">  <?php echo rupiah($data3);?></h5>
          <h5>3.Pengeluranan terkecil: </h5><h5 style="color:green">  <?php echo rupiah($data4);?></h5>
</div>
    </div>

  @stop