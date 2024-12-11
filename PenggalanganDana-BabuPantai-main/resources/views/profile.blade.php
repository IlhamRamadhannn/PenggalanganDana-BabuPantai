@extends('layout.master')

@section('content')
<div class="container pt-100" style="min-height: calc(100vh - 88px);">
    <div class="row" style="padding-top: 100px;">
        <div class="col-8 offset-2">
            <h5 class="text-center text-white fw-bold mb-4" style="text-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3); font-size: 2.5rem;">
                Profile
            </h5>
            <div style="background-color: rgba(0, 0, 0, 0.4); padding: 30px; border-radius: 10px;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/Blue eyes.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid white;">
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Nama Donatur:</span>
                        <span class="fw-bold">John Doe</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Jenis Kelamin:</span>
                        <span class="fw-bold">Laki-laki</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Tanggal Lahir:</span>
                        <span class="fw-bold">15 Agustus 1990</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Umur:</span>
                        <span class="fw-bold">34 Tahun</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center text-white mb-3" style="font-size: 2rem;">
                        <span class="fw-bold">Jumlah Donasi:</span>
                        <span class="fw-bold">Rp 1,000,000</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="/profile_update" class="btn btn-success btn-lg rounded-pill py-3 px-5">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
