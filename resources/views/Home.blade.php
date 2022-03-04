@extends("layout")
@section('konten')
    <section class="user1 my-5">
        <div class="container">
            <img class="profil mx-auto d-block" src="{{ asset('img/Foto.png') }}" alt="">
            <div class="db">
                <p class="fw-bold">Haris Adiyatma Farhan</p>
            </div>
            <div class="container1">
                <a href="">
                    <div class="box">
                        <div class="row row-cols-1">
                            <div class="col">
                                <p>Profile</p>
                            </div>
                            <div class="col"><button type="button" class="btn1">*Lengkapi
                                    Dokumen</button></div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="row row-cols-1">
                            <div class="col">
                                <p>Document</p>
                            </div>
                            <div class="col">
                                <button type="button" class="btn2">*Lengkapi Dokumen</button>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="row row-cols-1">
                            <div class="col">
                                <p>Pendaftaran</p>
                            </div>
                            <div class="col"><button type="button" class="btn2">*Lengkapi
                                    Dokumen</button></div>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="box">
                        <div class="row row-cols-1">
                            <div class="col">Status Pendaftaran</div>
                            <div class="col">
                                <div class="col"><button type="button" class="btn2">*Lengkapi
                                        Dokumen</button></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
    </section>
@endsection
