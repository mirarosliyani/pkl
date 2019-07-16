@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    {{-- <form action="">


                    </form> --}}
                    <div class="form-group">
                        <label>masukan nama</label>
                        <input type="text" name="namasiswa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success tombol-simpan">Simpan</button>
                    </div>
                    <div>
                        <ul class="data-siswa">
                                        </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
