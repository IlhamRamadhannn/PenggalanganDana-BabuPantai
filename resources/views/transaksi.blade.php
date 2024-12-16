@extends('layout.master')

@section('content')
<div class="container pt-5" style="min-height: calc(100vh - 88px); padding-top: 120px;">
    <div class="row">
        <div class="col-8 offset-2">
            <h5 class="text-center text-white fw-bold mb-4" 
                style="text-shadow: 4px 4px 20px rgba(0, 0, 0, 0.3); font-size: 2.5rem; margin-top: 100px;">
                Transaksi Donasi
            </h5>

            <div style="background-color: rgba(0, 0, 0, 0.4); padding: 30px; border-radius: 10px;">
                <div class="mb-4">
                    <label class="text-white fw-bold" style="font-size: 1.2rem;">Jumlah Donasi (Rp):</label>
                    <input type="text" id="jumlah_donasi" class="form-control" placeholder="Masukkan jumlah uang" onkeyup="formatRupiah(this)">
                </div>

                <div class="mb-4">
                    <label class="text-white fw-bold" style="font-size: 1.2rem;">Pesan Untuk Penerima:</label>
                    <textarea class="form-control" rows="4" placeholder="Tulis pesan penguat atau ucapan terima kasih..."></textarea>
                </div>

                <div class="mb-4">
                    <label class="text-white fw-bold" style="font-size: 1.2rem;">Metode Pembayaran:</label>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="ovo">
                            <label class="form-check-label text-white fw-bold" for="ovo">
                                OVO
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="gopay">
                            <label class="form-check-label text-white fw-bold" for="gopay">
                                Gopay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="shopeepay">
                            <label class="form-check-label text-white fw-bold" for="shopeepay">
                                ShopeePay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metode_pembayaran" id="dana">
                            <label class="form-check-label text-white fw-bold" for="dana">
                                DANA
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="btn btn-success btn-lg rounded-pill py-3 px-5">Kirim Donasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function formatRupiah(element) {
    let value = element.value.replace(/\./g, ''); 
    value = value.replace(/\D/g, ''); 
    element.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, "."); 
}
</script>
@endsection
