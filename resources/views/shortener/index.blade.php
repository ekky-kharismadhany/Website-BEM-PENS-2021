@extends('layout.app')
@section('body')
<section id="calendar" class="calendar">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h3>Pemendek Tautan</h3>
            <p>Jadikan Tautanmu Simpel</p>
            <form class="" action="/link/store" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tautan Panjang</label>
                    <input type="text" class="form-control" name="tautanPanjang" placeholder="Masukan Tautan Panjang" required>
                    <div class="input-group mt-3">
                        <span class="input-group-text" id="basic-addon1">https://bem.pens.ac.id/</span>
                        <input type="text" class="form-control" name="tautanPendek" placeholder="Tautan Pendek" aria-label="Username" aria-describedby="basic-addon1" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Buat Tautan Pendek</button>
                </div>
            </form>
</section><!-- End Hero -->
@endsection