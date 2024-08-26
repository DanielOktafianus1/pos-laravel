@extends('layouts.app')
@section('title', 'Tansaksi Penjualan')

@section('content')
    <form action="">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kode Transaksi</label>
                    <input type="text" class="form-control" readonly value="" name="kode_transaksi">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Tanggal Transaksi</label>
                    <input type="text" class="form-control" readonly value="<?= date('d/M/Y') ?>"
                        name="tanggal_transaksi">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kategori Produk</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Pilih Kategori Produk</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat['category_name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Nama Produk</label>
                    <select class="form-control" name="product_id" id="product_id">
                        <option value="">Pilih Nama Produk</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Qty Produk</label>
                    <input type="number" class="form-control" placeholder="" id="qty_product" min="0">
                </div>
            </div>
        </div>

        <input type="hidden" value="" id="product_price">
        <input type="hidden" value="" id="product_name">

        <div class="table-transaction mt-5">
            <div align="right" class="mb-3">
                <button type="button" class="btn btn-primary tambah-produk">Tambah Produk</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Sub Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="row mt-2">
                    <div class="col-sm-8">
                        <h3>Total:</h3>
                    </div>
                    <div class="col-sm-4">
                        <h4 class="total_price"></h4>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-8">
                        <h3>Di Bayar:</h3>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="dibayar">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-sm-8">
                        <h3>Kembalian:</h3>
                    </div>
                    <div class="col-sm-4">
                        <input type="number" class="form-control bg-white " readonly id="kembali" style="border: none; ">
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
