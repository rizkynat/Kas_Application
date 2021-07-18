@extends('sidebar')
  @section("content")
<div style="padding-left:20px;">
<div class="card container mt-3" style="width:810pt;">
     
        <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Keluar</a>
                </div>
      
    </div>

  @stop