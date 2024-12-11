@extends('layout.master')

@section('content')
<div class="position-relative" style="margin-bottom: 30px;">
    <img src="{{ asset('images/tourist.png') }}" class="img-fluid" alt="" style="filter:brightness(75%); padding-top: 100px; width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h5 class="text-white fw-bold" style="font-size: 500%; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
            LIFE BELOW THE WATER
        </h5>
    </div>
</div>

<div class="container pt-100">
    <div class="row" style="padding-top: 20px; text-align: left;">
        <div class="col-12">
            <div style="background-color: rgba(0, 0, 0, 0.4); padding: 20px; border-radius: 10px;">
                <p style="text-align: justify; color: white; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
                    Selamat datang di Babu Pantai!
                    <br><br>
                    Kami adalah platform donasi yang bertujuan untuk menjaga keindahan pantai-pantai Indonesia dari ancaman sampah dan polusi. Dengan bergotong-royong, kita dapat melindungi ekosistem laut, mendukung komunitas lokal, dan mewariskan pantai-pantai bersih untuk generasi mendatang.
                    <br><br>
                    Misi Kami:
                    <br>🌊 Mengurangi sampah di pantai melalui aksi bersih-bersih rutin.
                    <br>🌱 Memberdayakan masyarakat setempat dalam menjaga lingkungan mereka.
                    <br>💙 Meningkatkan kesadaran akan pentingnya menjaga kebersihan laut dan pesisir.
                    <br><br>
                    Setiap kontribusi Anda, besar atau kecil, akan berdampak besar dalam memulihkan keindahan alam Indonesia. Mari bergerak bersama untuk pantai yang lebih bersih dan kehidupan laut yang lebih sehat!
                    <br><br>
                    “Karena setiap butir pasir yang bersih adalah langkah menuju masa depan yang lebih baik.”
                </p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-4 text-center">
            <!-- Gambar kurakura yang lebih besar dan memaksa ukuran -->
            <img src="{{ asset('images/kurakura.png') }}" alt="" class="d-block mx-auto" style="width: 350px; height: auto;">
        </div>
        <div class="col-3 text-right">

            <h2 class="text-white">Bersama Kita Bisa Menyelamatkan Laut dan Makhluk Hidupnya!</h2>
            <p class="text-white">Setiap sampah plastik yang dibuang ke laut merusak ekosistem dan membahayakan hewan-hewan laut. Dengan donasi Anda, kita dapat membersihkan pantai dan menyelamatkan kehidupan laut.</p>
            <div class="row mt-3">
            <div class="col-4"></div>
        <div class="col-2 text-center">
            <a type="button" href="/artic/1" class="btn btn-success btn-lg rounded-pill py-3 px-5 mt-4 l-2">Donate</a>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
