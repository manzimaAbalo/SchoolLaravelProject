@extends('espace-admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Commentaires</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Liste des commentaires</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="/admin/dist/images/breadcrumb/emailSv.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card overflow-hidden chat-application">
            <div class="d-flex w-100">
                <div class="d-flex w-100">
                    <div class="w-100">
                        <div class="chat-container h-100 w-100">
                            <div class="app-chat">
                                <ul class="chat-users" style="height: calc(100vh - 100px)" data-simplebar>
                                    @foreach ($comments as $key=> $item)
                                        <li>
                                            <a href="javascript:void(0)"
                                                class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user bg-light"
                                                id="chat_user_1" data-user-id="1">
                                                <div class="form-check mb-0">
                                                    {{ ++$key }}
                                                </div>
                                                <div class="position-relative w-100 ms-2">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h6 class="mb-0">{{ $item->profile->nom }} {{ $item->profile->prenoms }} </h6>
                                                        <span class="badge text-bg-primary fs-2 rounded-4 py-1 px-2">{{ $item->school->name }}</span>
                                                    </div>
                                                    <h6 class="fw-semibold text-dark">{{ $item->comment }}</h6>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <span><i class="ti ti-star fs-4 me-2 text-dark"></i></span>
                                                            <span class="d-block"><i class="ti ti-alert-circle text-muted"></i></span>
                                                        </div>
                                                        <p class="mb-0 fs-2 text-muted">{{ $item->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
