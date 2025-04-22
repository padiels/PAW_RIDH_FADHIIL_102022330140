@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
         

                <img src="{{asset("logo-ead.png")}}" alt="Foto Profil" class="img-thumbnail rounded-circle" width="150">
            </div>
        
             <tr>
                <td><b>Nama<b><td>
                </td>{{$mahasiswa['nama']}}</td>
                </tr>

                <tr>
                <td><b>NIM<b><td>
                </td>{{$mahasiswa['nim']}}</td>
                </tr>

                <tr>
                <td><b>Email<b><td>
                </td>{{$mahasiswa['email']}}</td>
                </tr>

                <tr>
                <td><b>Jurusan<b><td>
                </td>{{$mahasiswa['jurusan']}}</td>
                </tr>

                <tr>
                <td><b>Fakultas<b><td>
                </td>{{$mahasiswa['fakultas']}}</td>
                </tr>            
        </table>
    </div>
</div>
@endsection
