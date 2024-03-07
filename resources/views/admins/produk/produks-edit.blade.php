@extends('back.layout.dashboard2-layout')
@section('title', isset($pageTitle) ? $pageTitle : 'Edit Produk')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="mt-3 d-flex justify-content-center">
    <h2><i class="bi bi-trophy"></i>Edit Produk</h2>
</div>

<div class="mobile-menu-overlay"></div>
		<div class="main-container">
            <h2 style="margin-top: 20px;">Edit Produk</h2>
            <form action="{{ route('produk.update',['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <label for="produkID" class="form-label mt-4">produkID</label>
                  <input type="text" name="produkID" id="produkID" class="form-control" placeholder="produkID" value="{{ $data->produkID}}">
                </div>
                <div class="col">
                    <label for="namaProduk" class="form-label mt-4">namaProduk</label>
                  <input type="text" name="namaProduk" id="namaProduk" class="form-control" placeholder="namaProduk" value="{{ $data->namaProduk}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="harga" class="form-label mt-4">harga</label>
                  <input type="text" name="harga" id="harga" class="form-control" placeholder="harga" value="{{ $data->harga}}">
                </div>
                <div class="col">
                    <label for="stock" class="form-label mt-4">stock</label>
                  <input type="text" name="stock" id="stock" class="form-control" placeholder="stock" value="{{ $data->stock}}">
                </div>
            </div>
            <div class="xs-pd-20-10 pd-ltr-20">
                <button class="btn btn-primary float-right" type="submit">Simpan</button>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
