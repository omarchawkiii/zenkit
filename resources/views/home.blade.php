
@extends('layouts.app')
@section('title') {{ __('message.Factures')}}  @endsection
@section('content')

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->

                <!-- end page title -->


                <div class="row justify-content-md-center">
                    <div class="col-lg-5 col-md-6 border-on-mobile">
                        <div class="card">
                            <div class="card-body row" style="margin:0px;padding:0px;overflow:hidden "  height="100%" width="100%" >

                                <iframe id="iframe" src="https://public.zenkit.com/f/e1Toduedq/form-havaleh?v=SKs0oca77"
                                        style="width: 100%; min-height: 920px;background: transparent; "
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
<div class="tecnoponto-whatsapp-icone">

    <div class="d-none d-md-block">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+971 55 226 0571&amp;text=Hello" title="Icone whatsapp">
            <img src="{{asset('/assets/images/icone-whatsapp-tecnoponto.png')}}" alt="" >
        </a>
    </div>

</div>

@endsection

@section('custom_css')
@endsection
