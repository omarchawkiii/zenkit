
@extends('admin.layouts.app')

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @if (session('message'))

                <div class="toast fade show position-absolute bottom-0 end-0 z-3 m-3 shadow  bg-white  " role="alert" data-bs-autohide="false" aria-atomic="true">
                    <div class="toast-header">
                        <span class="fw-semibold me-auto">{{ __('message.Notification')}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('message') }}
                    </div>
                </div>
                @endif
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
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary" ><i class="las la-plus me-1"></i>{{ __('message.Créer un nouveau Utilisateur')}}</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-hover table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="text-muted text-uppercase">

                                                <th scope="col">{{ __('message.Nom d\'utilisateur')}} </th>
                                                <th scope="col">{{ __('message.Email')}} </th>
                                                <th scope="col">{{ __('message.Role')}} </th>
                                                <th scope="col" style="width: 12%;">{{ __('message.Option')}}</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($users as $user )
                                            <tr>
                                                <td><img src="{{asset('/assets/admin/images/users/user-dummy-img.jpg')}}" alt="" class="avatar-xs rounded-circle me-2">
                                                    <a href="#javascript: void(0);" class="text-body align-middle fw-medium">{{ $user->name }}</a>
                                                </td>

                                                <td>{{ $user->email }} </td>
                                                <td>{{ $user->role }} </td>


                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="View" data-bs-original-title="View">
                                                            <a   data-bs-toggle="modal" data-bs-target="#show_user_modal-{{ $user->id }}" href="#" class="btn btn-primary btn-sm d-inline-block">
                                                                <i class="las la-eye fs-17 align-middle"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Display iFrame" data-bs-original-title="Display iFrame">
                                                            <a   data-bs-toggle="modal" data-bs-target="#display_iframe_modal-{{ $user->id }}" href="#" class="btn btn-primary btn-sm d-inline-block">
                                                                <i class="las la-code fs-17 align-middle"></i>
                                                            </a>
                                                        </li>

                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit" data-bs-original-title="Edit">
                                                            <a   href="{{ route('admin.users.edit',$user) }}" class="btn btn-primary btn-sm d-inline-block" >
                                                                <i class="las la-pen fs-17 align-middle"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Edit Password" data-bs-original-title="Edit Password">
                                                            <a   href="{{ route('admin.users.edit_password',$user) }}" class="btn btn-primary btn-sm d-inline-block" >
                                                                <i class=" las la-key fs-17 align-middle"></i>
                                                            </a>
                                                        </li>
                                                        @if(Auth::user()->id  != $user->id)
                                                            <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Remove" data-bs-original-title="Remove">
                                                                <a  data-bs-toggle="modal" data-bs-target="#delete_user_modal-{{ $user->id }}" href="#"  class="btn btn-soft-danger btn-sm d-inline-block">
                                                                    <i class="bi bi-trash-fill fs-17 align-middle"></i>
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </td>
                                                <!-- show modal -->
                                                <div class="modal fade modal-md" id="show_user_modal-{{ $user->id }}" tabindex="-1" role="dialog"  aria-labelledby="show_user_modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content border-0">
                                                            <div class="modal-header p-4 pb-0">
                                                                <h5 class="modal-title" id="createMemberLabel">{{ __('message.Utilisateur')}} : </h5>
                                                                <button type="button" class="btn-close" id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body p-4">
                                                                <p class="text-muted mb-1">{{ __('message.name')}} :<span class="fw-medium" > {{ $user->name }}</span></p>
                                                                <p class="text-muted mb-1">{{ __('message.email')}} :<span class="fw-medium" > {{ $user->email }}</span></p>
                                                                <p class="text-muted mb-1">{{ __('message.iframe Link')}} :<span class="fw-medium" > {{ $user->iframe_link }}</span></p>
                                                                <p class="text-muted mb-1">{{ __('message.Role')}} :<span class="fw-medium" > {{ $user->role }}</span></p>
                                                            </div>
                                                        </div>
                                                    <!--end modal-content-->
                                                    </div>
                                                </div>

                                                @if(Auth::user()->id  != $user->id)
                                                    <div class="modal fade " id="delete_user_modal-{{ $user->id }}" tabindex="-1" role="dialog"  aria-labelledby="delete_user_modalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content border-0">
                                                                <div class="modal-header p-4 pb-0">
                                                                    <h5 class="modal-title" id="createMemberLabel">{{ __('message.Supprimer définitivement')}} : </h5>
                                                                    <button type="button" class="btn-close" id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body text-center p-4">

                                                                    <i class="fa fabi bi-trash-fill fs-17 align-middle fa-2xl text-danger"></i>
                                                                    <div class="">
                                                                        <h4 class="mb-5">{{ __('message.Etes - vous sûr de vouloir supprimer')}} {{ $user->name }} ?</h4>

                                                                        <div class="hstack gap-2 justify-content-center">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">{{ __('message.Annuler')}} </button>

                                                                            <form id="memberlist-form" class="needs-validation" action="{{ route('admin.users.destroy',$user) }}" method="post">
                                                                                @csrf
                                                                                @method('delete')
                                                                                <button type="submit"  class="btn btn-danger">{{ __('message.Supprimer')}} </a>
                                                                            </form>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        <!--end modal-content-->
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="modal fade " id="display_iframe_modal-{{ $user->id }}" tabindex="-1" role="dialog"  aria-labelledby="delete_user_modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content border-0">
                                                            <div class="modal-header p-4 pb-0">
                                                                <h5 class="modal-title" id="createMemberLabel">Display iFrame: </h5>
                                                                <button type="button" class="btn-close" id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body text-center p-4">

                                                                <iframe src="{{ $user->iframe_link }}"
                                                                    style="width: 100%; min-height: 950px;background: transparent; padding: 0 ; "
                                                                    allowfullscreen>

                                                                </iframe>


                                                            </div>
                                                        </div>
                                                    <!--end modal-content-->
                                                    </div>
                                                </div>

                                                <!-- end delete modal -->
                                            </tr>
                                            @endforeach
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
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

