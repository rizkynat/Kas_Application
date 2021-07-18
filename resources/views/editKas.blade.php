@extends('sidebar')
  @section("content")
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
        <div class="card-header ">Edit data Kas</div>
             @foreach($data as $RS)
            <form action="../updateKas" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_kas"  value="{{ $RS->id_kas }}">
                <div class="mb-1">
                    <label for="exampleFormControlInput1" class="form-label">No Kas</label>
                    <input type="text" name="no_kas" value="{{ $RS->no_kas }}" class="form-control" id="exampleFormControlInput1" style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput2" class="form-label">Jumlah Kas</label>
                    <input type="number" name="jumlah_kas" value="{{ $RS->jumlah_kas }}" class="form-control" id="exampleFormControlInput2"style="height:30px;">
                </div>
                <div class="mb-1">
                    <label for="exampleFormControlInput3" class="form-label">Tanggal Kas</label>
                    <input type="date" name="tgl_kas" value="{{ $RS->tgl_kas }}" class="form-control" id="exampleFormControlInput3"style="height:30px;">
                </div>
                <input type="submit" class="btn-primary" value="Simpan Data" style="border-radius:3px;margin-top:5px;margin-bottom:10px;margin-left:315pt;">
            </form>
            @endforeach
        </div>
    </div>

  @stop