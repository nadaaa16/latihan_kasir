@extends('layout.dashboard2-layouts')
@section('title', isset($pageTitle) ? $pageTitle : 'Tambah Produk')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Tambah Produk</h2>
</div>

<div class="mobile-menu-overlay"></div>
		<div class="main-container">
            <h2 style="margin-top: 20px;">Tambahkan Produk</h2>
            <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="produkID" class="form-label mt-4">Produk ID</label>
                  <input type="text" name="produkID" id="produkID" class="form-control" placeholder="Produk ID" aria-label="First name">
                </div>
                <div class="col">
                    <label for="namaProduk" class="form-label mt-4">Nama Produk</label>
                  <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="Nama Produk" aria-label="First name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="harga" class="form-label mt-4">Harga</label>
                  <input type="text" name="harga" id="harga" class="form-control" placeholder="Harga" aria-label="First name">
                </div>
                <div class="col">
                    <label for="stock" class="form-label mt-4">Stock</label>
                  <input type="text" name="stock" id="stock" class="form-control" placeholder="Stock" aria-label="First name">
                </div>
            </div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="submit">Tambah</button>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection