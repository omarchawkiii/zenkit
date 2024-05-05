
@extends('admin.layouts.app')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ __('message.Utilisateurs')}}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('message.Utilisateurs')}}</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row pb-4 gy-3">
                    <div class="col-sm-4">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary" ><i class="las la-plus me-1"></i>{{ __('message.Créer un nouveau utilisateur')}}</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form id="memberlist-form" class="needs-validation" action="{{ route('admin.users.update_password', $user) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class=" row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">{{ __('message.Mot de passe')}}</label>
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="{{ __('message.Mot de passe')}}" >
                                                    @error('password')
                                                        <div class="text-danger mt-1 ">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">{{ __('message.Confirmez le mot de passe')}}</label>
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{ __('message.confirm password')}}" >
                                                    @error('password_confirmation')
                                                        <div class="text-danger mt-1 ">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="hstack gap-2 justify-content-end">
                                                <a href="{{ route('admin.users') }}" class="btn btn-primary" >{{ __('message.Annuler')}}</a>
                                                <button type="submit" class="btn btn-success" id="addNewMember">{{ __('message.Sauvgarder')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


@endsection

