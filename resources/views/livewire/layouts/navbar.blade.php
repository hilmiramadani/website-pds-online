<div>
    <header id="header-overview" class="bg-white container-fluid d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center justify-content-between" style="width: 64%!important;">
            <h1 class="title-page">{{ $title }}</h1>
            @can('manajemen')
                <h1 class="title-page">Hello</h1>
            @endcan
            <form action="" class="@if ($title != 'Overview') d-none @endif">
                <div class="input-group" id="form-search-header">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari dokumen" aria-label="Username"
                        aria-describedby="basic-addon1" wire:model='s_overview'>
                </div>
                {{-- onclick="formSearchHeader('o', 'form-search-header', 'header-overview', 'search-result')" --}}
            </form>
        </div>
        <div class="box-header d-flex align-items-center justify-content-between">
            <button class="sop  box-radius-10">
                <a href="{{ route('sop-pds') }}" target="_blank" class="d-flex">
                    <i class="bi bi-file-earmark-fill m-auto"></i>
                    <p class="m-auto ">SOP</p>
                </a> 
            </button>
            
            <div class="notif d-flex drop" style="margin-right: 15px;">
                <div class="ikon" id="bell">
                    <i class="bi bi-bell"></i>
                </div>
                <div class="notifications" id="box">
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="notifications-header" id="closeButton">
                            <h2>Notifications <span>2</span></h2>
                            <button class="close-btn">&times;</button>
                        </div>
                        <div class="notifications-item">
                            <img src="/assets/thomeas.png" alt="">
                            <div class="text">
                                <h2>Elon Musk</h2>
                                <p>pesan</p>
                                <small>  06.04.2023, 20.00</small>
                            </div>
                        </div>
                        <div class="notifications-item">
                            <img src="/assets/thomeas.png" alt="">
                            <div class="text">
                                <h2>Mark Zuckerberg</h2>
                                <p>pesan</p>
                                <small>  06.04.2023, 20.00</small>
                            </div>
                        </div>
                        <div class="markAll">
                            <a href="">Mark All As Read</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="prof-side d-flex justify-content-center">
                <div class="circle-prof circle-shadow m-auto d-flex">
                    <!-- 
                        <div class="profile m-auto"
                        style="background-image: url({{ env('URL_WEB_API') . 'storage/' . $user['photo'] }})"></div>
                     -->
                </div>
                <div class="detail-profil-sidebar text-center p-3">
                    <p class="nama-sidebar">{{ $user['name'] }}</p>
                    <p class="role-sidebar">{{ $user['role'] }}</p>
                </div>
            </div>
            <!-- <div class="jam d-flex">
                <div class="m-auto d-flex align-items-center">
                    <i class="bi bi-alarm-fill"></i>
                    <p class="text ms-3" id="realtime-clock"></p>
                </div>
            </div>
            <div class="tanggal d-flex">
                <div class="m-auto d-flex align-items-center">
                    <i class="bi bi-calendar-week-fill"></i>
                    <p class="text ms-3">{{ date('d/m/Y') }}</p>
                </div>
            </div> -->
        </div>
    </header>
    <div id="search-result" class="d-none position-absolute">

        {{-- onclick="formSearchHeader('c', 'form-search-header', 'header-overview', 'search-result')" --}}
        <div class="close-modal position-absolute" style="z-index: -5;"></div>
        <div class="row px-2" style="margin-top: 90px;">
            <div class="col-6">
                <div class="bg-white box-radius-10 overflow-hidden">
                    <h1 class="fw-semibold text-color p-3 fs-5 m-0">Peninjauan</h1>
                    <div class="data">
                        <div class="row text-color bg-secondary text-white px-3">
                            <div class="col-9">
                                Nama Dokumen
                            </div>
                            <div class="col-3">
                                Status
                            </div>
                        </div>
                        {{-- @foreach ($peninjauan as $item)
                            <div class="row align-items-center px-3 p-2 border-bottom">
                                <div class="col-9 text-color">
                                    {{ $item['judul'] }}
                                </div>
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary"
                                        onclick="modalTarget('open', 'modal-tinjau-targeted')">
                                        <i class="bi bi-eye-fill me-2"></i>Tinjau
                                    </button>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-white box-radius-10 overflow-hidden">
                    <h1 class="fw-semibold text-color p-3 fs-5 m-0">Pengajuan</h1>
                    <div class="data">
                        <div class="row text-color bg-secondary text-white px-3">
                            <div class="col-9">
                                Nama Dokumen
                            </div>
                            <div class="col-3">
                                Status
                            </div>
                        </div>
                        <div class="row align-items-center px-3 p-2 border-bottom">
                            <div class="col-9 text-color">
                                Lorem ipsum dolor sit amet consectetur
                            </div>
                            <div class="col-3">
                                <div class="bg-primary-status p-2 text-center rounded-pill">
                                    Ditinjau
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center px-3 p-2 border-bottom">
                            <div class="col-9 text-color">
                                Lorem ipsum dolor sit amet consectetur
                            </div>
                            <div class="col-3">
                                <div class="bg-danger-status p-2 text-center rounded-pill">
                                    Dikembalikan
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
