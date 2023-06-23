@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3 style="text-align: center">Selamat{{ Auth::user()->name }} Berhasil Melakukan Registrasi </h3>
        <h5 style="text-align: center">Silahkan Logout & login kembali untuk masuk ke dashboard admin</h5>
    </div>
</div>
@endsection
