@extends('layout.master')

@section('content')
<div class="container pt-100" style="min-height: calc(107vh - 30px);">
    <div class="row" style="padding-top: 100px;">
        <div class="col-8 offset-2">
            <h5 class="text-center text-white fw-bold mb-4" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3); font-size: 1.5rem;">
                Edit Profile
            </h5>
            <div style="background-color: rgba(0, 0, 0, 0.4); padding: 30px; border-radius: 10px;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/Blue eyes.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid white;">
                    <h5 class="text-white mt-2" style="cursor: pointer;">Change Picture</h5>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label text-white">Nama Donatur</label>
                        <input type="text" class="form-control" id="username" value="Jikustik" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label text-white">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" value="Laki-laki" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="No" class="form-label text-white">Nomor Telepon</label>
                        <input type="text" class="form-control" id="No" value="087736473838" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <input type="text" class="form-control" id="email" value="Jikustik1508@gmail.com" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="donation" class="form-label text-white">Jumlah Donasi</label>
                        <input type="text" class="form-control" id="donation" value="Rp 15,750,000" readonly>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success btn-lg rounded-pill py-3 px-5">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
