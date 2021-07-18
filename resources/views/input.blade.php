@extends('sidebar')
  @section("content")
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
        <div class="card-header ">Input Pengeluaran</div>
            <form action="../public/storePengeluaran" method="post">
                {{ csrf_field() }}
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput2" class="form-label">No Barang</label>
                    <input type="number" name="no_brg" class="form-control" id="exampleFormControlInput2"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <input type="submit" class="btn-primary" value="Simpan Data" style="border-radius:3px;margin-top:5px;margin-bottom:10px;margin-left:315pt;">
            </form>
        </div>
    </div>

  @stop