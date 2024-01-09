
@extends('layouts.app')
@section('title') {{ __('message.Factures')}}  @endsection
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body row" style="margin:0px;padding:0px;overflow:hidden "  height="100%" width="100%" >

                                <iframe id="iframe" src="https://public.zenkit.com/f/e1Toduedq/form-havaleh?v=SKs0oca77"
                                        style="width: 100%; min-height: 850px;background: transparent; "
                                        allowfullscreen>

                                    </iframe>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
</div>


@endsection


@section('custom_css')
    <style>

    </style>
@endsection
