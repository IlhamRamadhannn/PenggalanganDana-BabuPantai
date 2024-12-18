@extends('layout.master')

@section('content')
<div class="position-relative" style="margin-bottom: 30px;">
    <img src="{{ asset('images/sea.png') }}" class="img-fluid" alt="" style="filter:brightness(75%); width: 100%;">
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h5 class="text-white fw-bold" style="font-size: 500%; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
            LIFE BELOW THE WATER
        </h5>
        <a type="button" href="#" class="btn btn-light" style="font-weight: bold; padding: 12px; margin-top:40px">Take Action ></a>
    </div>
</div>

<div class="container">

</div>


<div class="container mt-md-10">
            <!-- Three columns of text below the carousel -->
            <div class="row">
            <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">WHO WE ARE</h4>
                            <small class="text-muted">&horbar; is the largest international advocacy organization focused solely on ocean conservation. Oceana’s mission is to protect and restore our oceans.</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">Get to Know Babu Pantai</a>
                            </p>
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">THE IMPACT</h4>
                            <small class="text-muted">&horbar; is the largest international advocacy organization focused solely on ocean conservation. Oceana’s mission is to protect and restore our oceans.</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">See the changes we made</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-5 text-center">
                    <div class="card">
                        <!-- <div class="card-title mt-2">
                            <div class="rounded-circle mx-auto" style="width:150px; height:150px; background:url({{ asset('images/kurakura.png') }}) center no-repeat ; background-size :cover;" ></div>
                        </div> -->
                        <div class="card-body">
                            <h4 class="fw-bold mb-0" style="color:rgb(0, 90, 192);">OUR ACTION</h4>
                            <small class="text-muted">&horbar; is the largest international advocacy organization focused solely on ocean conservation. Oceana’s mission is to protect and restore our oceans.</small>
                            <p class="text-italic fw-light my-2">
                                <a type="button" href="#" class="btn btn-light" style=" color:rgb(0, 90, 192); font-weight: bold; padding: 12px; margin-top:40px ">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="row my-md-5 mt-5 mt-md-5">
                <div class="col-md-7">
                <div style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
                    <h2 class="heading" style="color:white;">OCEAN IS IN DANGER</h2>
                    <p class="lead" style="color:white;" >Babu Pantai Helps in publishing and graphic design, 
                        Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document 
                        or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</p>
                </div>
</div>
                <div class="col-md-5">
                    <img class="rounded mx-auto img-fluid mx-auto" src="{{ asset('images/pollutedbeach.jpg') }}"
                        alt="">
                </div>
              </div>

<!-- <div class="container pt-100">
    <div class="row" style="padding-top: 20px; text-align: left;">
        <div class="col-12">
            <div style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
                <p style="font-size: 17.5px; text-align: justify; color: white; text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.3);">
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
    </div> -->

    <div class="row mt-5" >
        <div class="col-2" ></div>
        <div class="col-4 text-center">
            <!-- Gambar kurakura yang lebih besar dan memaksa ukuran -->
            <img src="{{ asset('images/kurakura.png') }}" alt="" class="d-block mx-auto" style="width: 350px; height: auto;">
        </div>
        <div class="col-3 text-right" style="backdrop-filter: blur(5px); background-color: rgba(0, 0, 0, 0.4); padding: 40px; border-radius: 10px;">
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
