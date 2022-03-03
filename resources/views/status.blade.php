@extends("Layout/main")
@section('konten')
    <div class="container">
        <!-- content area -->
        <h1>STATUS PENDAFTARAN</h1>
        <div class="col-10 table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>Mark</td>
                        <td>Otto</td>
                        <td><span class="badge bg-success">Terdaftar</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
