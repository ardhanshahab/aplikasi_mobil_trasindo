@extends('layouts.appadmin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="width 100;">
        <form action="{{ route('store.mobil') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <input type="text" value="true" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Masukkan status Mobil">

            <div class="form-group">
                <label class="font-weight-bold">Foto Mobil</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                <!-- error message untuk title -->
                @error('image')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Nama Mobil</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Mobil">
                <!-- error message untuk nama -->
                @error('nama')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Merek Mobil</label>
                <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek') }}" placeholder="Masukkan Merek Mobil">
                <!-- error message untuk merek -->
                @error('merek')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Jenis Mobil</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis') }}" placeholder="Masukkan Jenis Mobil">
                <!-- error message untuk jenis -->
                @error('jenis')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Tahun Pembuatan</label>
                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" placeholder="Masukkan Tahun Pembuatan">
                <!-- error message untuk tahun -->
                @error('tahun')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">CC Mobil</label>
                <input type="text" class="form-control @error('cc') is-invalid @enderror" name="cc" value="{{ old('cc') }}" placeholder="Masukkan CC">
                <!-- error message untuk cc -->
                @error('cc')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Plat Nomer</label>
                <input type="text" class="form-control @error('plat') is-invalid @enderror" name="plat" value="{{ old('plat') }}" placeholder="Masukkan Plat Nomer">
                <!-- error message untuk plat -->
                @error('plat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Warna Mobil</label>
                <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" value="{{ old('warna') }}" placeholder="Masukkan Warna Mobil">
                <!-- error message untuk warna -->
                @error('warna')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        <div class="my-4 p-1">
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </div>


        </form>
    </div>
<!-- ./wrapper -->

<style>
.content-wrapper{
    margin: 0;
}
    </style>
@endsection

