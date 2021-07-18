@extends('sidebar')
  @section("content")
  <div style="padding-left:20px;">
  <div class="card container mt-3" style="width:810pt; background:#FFC947">
    <div class="card container ">
        <div class="card-header">Kas Pengeluaran</div>
        <div class="card-body">
        <table class="table table-bordered border-primary">
        <a class="btn  btn-primary" href="../public/tambahKas" style="margin-left:657pt;margin-bottom:4px;">Input Kas</a>
        <?php
       function rupiah($angka){
	
        $hasil_rupiah =  "Rp " .number_format($angka,2,',','.');
        return $hasil_rupiah;
       
      }
        ?>
                <tr>
                    <th>No</th>
                    <th>No Kas</th>
                    <th>Jumlah Kas</th>
                    <th>Tanggal Kas</th>
                    <th width="130px">Action</th>
                </tr>
                <?php $no = 1; $jumlah=0;?>
                @foreach($data as $RS)
                <tr>
                    <td>{{ $no}}</td>
                    <?php $no++; ?>
                    <td>{{ $RS->no_kas}}</td>
                    <td><?php echo rupiah($RS->jumlah_kas);?></td>
                    <td>{{ $RS->tgl_kas }}</td>
                    <?php $no++;$jumlah=$RS->jumlah_kas+$jumlah; ?>
                    <td><a class="btn btn-primary" href="../public/editKas/{{ $RS->id_kas }}" style="width:45px; height:30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"  fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="margin-bottom:20px;">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>
                     @csrf
                     @method('DELETE')
                     <a class="btn btn-danger" href="../public/hapusKas/{{ $RS->id_kas }}" style="width:45px; height:30px;"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="margin-bottom:20px;">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg></a></td>
                </tr>
                @endforeach
            </table>
        </div>
       
        <div class="card-body" >
          <h5>Jumlah kas:</h5><h5 style="color:green"> <b> <?php echo rupiah($jumlah);?></b>
</div>
    </div>

  @stop