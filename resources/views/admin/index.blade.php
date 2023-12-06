@extends('layouts.appadmin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="width 100;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Mobil</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <a href="/createmobil" class="btn btn-primary m-1 p-1">Tambah Mobil</a>
      <div class="container-fluid">
        <div class="row">
            <table class="table table-bordered table-hover table-responsive">
                <thead>
                  <tr>
                    <th scope="col">Foto Mobil</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek Mobil</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Tahun Mobil</th>
                    <th scope="col">Cc Mobil</th>
                    <th scope="col">Plat Nomer</th>
                    <th scope="col">Warna Mobil</th>
                    <th scope="col">Status Mobil</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($posts as $post)
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
                        </td>
                        <td>{{ $post->nama }}</td>
                        <td>{{ $post->merek }}</td>
                        <td>{{ $post->jenis }}</td>
                        <td>{{ $post->tahun }}</td>
                        <td>{{ $post->cc }}</td>
                        <td>{{ $post->plat }}</td>
                        <td>{{ $post->warna }}</td>
                        @if ($post->status = 'true')
                        <td><span class="badge rounded-pill text-bg-success">Success</span></td>
                        @elseif ($post->status = 'false')
                        <td><span class="badge text-bg-danger">Kosong</span></td>
                        @endif
                        {{-- <td>{{ $post->status }}</td> --}}
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destroy.mobil', $post->id) }}" method="POST">
                                <a href="{{ route('show.mobil', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('edit.mobil', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                  @empty
                      <div class="alert alert-danger">
                          Data Post belum Tersedia.
                      </div>
                  @endforelse
                </tbody>
              </table>
              {{ $posts->links() }}
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<style>
.content-wrapper{
    margin: 0;
}
    </style>
@endsection

