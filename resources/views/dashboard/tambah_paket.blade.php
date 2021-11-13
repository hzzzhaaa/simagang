@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <h1 class="mt-4">Tambah Paket</h1>
                <br>
            </div>
        </div>
        <form action="{{route('dashboard.paket.store')}}" method="POST" id="form_sample_3" enctype="multipart/form-data"
                            data-parsley-validate="" class="form-horizontal">

            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-1">

                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <button class="btn btn-primary btn-user btn-block">Submit</button>
                    </div>
                </div>
            </div>
        </form>




    </div>
</div>
@endsection
