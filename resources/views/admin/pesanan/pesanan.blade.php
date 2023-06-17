@extends('admin.layout.app')
{{-- orang tua/parent sari setiap halaman --}}
{{-- extend itu perintah agar kita dapat menggunakan semua code yang ada di dalam file yang di extend --}}

{{-- halaman dashboard adalah anak dari si parent/orangtua --}}
{{-- @section('dashboard')   --}}
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            {{-- <i class="fas fa-table me-1">Data Pesanan</i> --}}
            <a href="{{url('admin/pesanan/create')}}">Tambah Pesanan</a> 
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama Pemesan</th>
                      <th>Alamat</th>
                      <th>No HP</th>
                      <th>Email</th>
                      <th>Jumlah Pesanan</th>
                      <th>Deskripsi</th>
                      <th>Nama Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    @foreach ($pesanan as $pes)
                    <tr>
                        <td>{{ $pes->tanggal }}</td>
                        <td>{{ $pes->nama_pemesan }}</td>
                        <td>{{ $pes->alamat_pemesan }}</td>
                        <td>{{ $pes->no_hp }}</td>
                        <td>{{ $pes->email }}</td>
                        <td>{{ $pes->jumlah_pesanan }}</td>
                        <td>{{ $pes->deskripsi }}</td>
                        <td>{{ $pes->nama_produk}}</td>
                        <td><a href="{{ url('admin/pesanan/edit/'. $pes->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/pesanan/delete/'. $pes->id) }}" class="btn btn-danger">Delete</a></td>
                    </td>
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection