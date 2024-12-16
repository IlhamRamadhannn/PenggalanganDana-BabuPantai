@extends('layout.master')

@section('content')
<div class="container pt-100" style="min-height: calc(107vh - 30px);">
    <div class="row justify-content-center" style="padding-top: 100px;">
        <div class="col-md-6">
            <h5 class="text-center text-white fw-bold mb-4" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3); font-size: 1.5rem; margin-top: 20px;">
                Edit Profile
            </h5>
            <div class="card bg-dark text-white" style="border-radius: 10px; padding: 30px;">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/Blue eyes.jpg') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover; border: 3px solid white;">
                    <h5 class="text-white mt-3" style="cursor: pointer;">Change Picture</h5>
                </div>

                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Donatur</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan nama Anda" value="Jikustik">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="gender">
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="No" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="No" placeholder="Masukkan nomor telepon Anda" value="087736473838">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" value="Jikustik1508@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="donation" class="form-label">Jumlah Donasi</label>
                        <input type="text" class="form-control" id="donation" placeholder="Masukkan jumlah donasi" value="Rp 15,750,000">
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
