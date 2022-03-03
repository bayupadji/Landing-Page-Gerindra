@extends("layout")
@section('konten')
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl- px-sm-2 px-0 sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-dark min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><img class="profil mx-auto d-block"
                                src="{{ asset('img/haris.jpg') }}" alt=""></span>
                    </a>
                    <p>Haris Adiyatma Farhan</p>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span
                                    class="ms-1 d-none d-sm-inline text-dark">Profile</span>
                            </a>
                        </li>
                        <!-- <li>
                                                                                                                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                                                                                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                                                                                                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                                                                                                        <li class="w-100">
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </li> -->
                        <!-- <li>
                                                                                                                    <a href="#" class="nav-link px-0 align-middle">
                                                                                                                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                                                                                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                                                                                                                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                                                                                                        <li class="w-100">
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </li> -->
                        <!-- <li>
                                                                                                                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                                                                                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                                                                                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                                                                                                        <li class="w-100">
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                                                                                                        </li>
                                                                                                                        <li>
                                                                                                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                                                                                                        </li>
                                                                                                                    </ul>
                                                                                                                </li> -->
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                </i> <span class="ms-1 d-none d-sm-inline text-dark">Document</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <span class="ms-1  d-none d-sm-inline text-dark">Status Pendaftaran</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <span class=" badge bg-danger ms-1 d-none d-sm-inline">Pengajuan Pendaftaran</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <!-- <div class="dropdown pb-4">
                                                                                                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                                    <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                                                                                                    <span class="d-none d-sm-inline mx-1">loser</span>
                                                                                                                </a>
                                                                                                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                                                                                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                                                                                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                                                                                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                                                                                                    <li>
                                                                                                                        <hr class="dropdown-divider">
                                                                                                                    </li>
                                                                                                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                                                                                                </ul>
                                                                                                            </div> -->
                </div>
            </div>


            <!-- content area -->
            <div class="col py-5">
                <div class="container">
                    <h3 class="my-4">Pengajuan Pendaftaran</h3>
                    <div class="form-check rad">
                        <input class="form-check-input " type="radio" name="exampleRadios" id="exampleRadios1"
                            value="option1" checked>

                        <div class="d-flex justify-content-between">
                            <div class="row">
                                <label class="form-check-label" for="exampleRadios1">
                                    <b>Default radio</b>
                                </label>

                                <label class="form-check-label" for="exampleRadios1">
                                    Default radio
                                </label>
                            </div>

                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div>
                    </div>

                    {{-- button submit --}}
                    <button type="submit" class="btn tombol my-3" style="width: 100%;">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
