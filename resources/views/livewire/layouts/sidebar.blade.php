<div class="sidebar expand position-relative" style="height: 100vh;z-index:100000000;">
    <div class="bg-prof-sidebar">
        <div class="contain-logo d-flex">
            <div class="logo d-flex m-auto mt-4 justify-content-center">
                <!-- <div class="svg">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="19.9997" cy="21.0525" rx="19.2727" ry="18.9475" fill="white" />
                        <ellipse cx="19.9999" cy="21.053" rx="17.4882" ry="17.1931" fill="#3a4248" />
                        <path
                            d="M6.63803 29.1235C6.63803 30.7773 5.27204 32.1324 3.56902 32.1324C1.86599 32.1324 0.5 30.7773 0.5 29.1235C0.5 27.4698 1.86599 26.1147 3.56902 26.1147C5.27204 26.1147 6.63803 27.4698 6.63803 29.1235Z"
                            fill="#3a4248" stroke="white" />
                        <path
                            d="M39.4998 29.1235C39.4998 30.7773 38.1339 32.1324 36.4308 32.1324C34.7278 32.1324 33.3618 30.7773 33.3618 29.1235C33.3618 27.4698 34.7278 26.1147 36.4308 26.1147C38.1339 26.1147 39.4998 27.4698 39.4998 29.1235Z"
                            fill="#3a4248" stroke="white" />
                        <path
                            d="M23.0692 3.5088C23.0692 5.16253 21.7032 6.51761 20.0002 6.51761C18.2971 6.51761 16.9312 5.16253 16.9312 3.5088C16.9312 1.85507 18.2971 0.5 20.0002 0.5C21.7032 0.5 23.0692 1.85507 23.0692 3.5088Z"
                            fill="#3a4248" stroke="white" />
                        <ellipse cx="20.0003" cy="3.5088" rx="1.78451" ry="1.7544" fill="white" />
                        <ellipse cx="36.431" cy="29.1231" rx="1.78451" ry="1.7544" fill="white" />
                        <ellipse cx="3.56869" cy="29.1231" rx="1.78451" ry="1.7544" fill="white" />
                        <path d="M19.9562 8.83301C13.58 18.974 13.6093 24.6684 19.9562 34.9212" stroke="white" />
                        <path d="M30.9062 28.5249C19.0405 28.8835 14.2756 25.8407 8.79737 15.223" stroke="white" />
                        <path d="M30.7548 28.565C25.458 17.7886 20.6592 14.9363 8.83739 15.3783" stroke="white" />
                        <path d="M30.832 15.1577C25.3683 25.9814 20.4627 28.7785 8.76524 28.5331" stroke="white" />
                        <path d="M30.7927 15.3128C19.0483 14.8274 14.2884 17.7475 8.91691 28.5724" stroke="white" />
                        <path
                            d="M17.9599 23.1868C15.258 21.0186 13.8695 19.677 11.5264 17.1489C14.9047 17.8101 16.7052 18.3733 19.7347 19.7691C22.9153 18.4198 24.7338 17.8335 28.0539 17.1489C25.9524 19.7074 24.5569 21.0252 21.7313 23.1868C21.3507 26.5111 20.8996 28.38 19.7347 31.731C18.724 28.3936 18.3023 26.524 17.9599 23.1868Z"
                            fill="white" />
                        <path d="M19.8457 8.71924C26.1447 19.0531 25.9968 24.8137 19.8457 35.0353" stroke="white" />
                        <ellipse cx="19.8457" cy="22.0475" rx="1.88569" ry="1.93668" fill="#3a4248" />
                    </svg>
                </div> -->
                <div class="circle-logo"></div>
                <div class="txt-logo ms-2 font-logo text-center">
                    <h1>PDS</h1>
                    <p>Online</p>
                </div>
            </div>
        </div>
        
    </div>
    <ul class="nav flex-column sidebar-menu">
        <p class="pref px-3">Main Menu</p>
        <li class="nav-item">
            <a class="nav-link px-5 @if ($title == 'Overview') active @endif" href="{{ route('overview') }}"><i
                    class="nav-icon bi bi-grid-fill"></i> Overview</a>
        </li>
        @if ($peninjauan)
            <li class="nav-item">
                <a class="nav-link px-5 @if ($title == 'Peninjauan') active @endif" href="{{ route('peninjauan') }}"><i
                        class="nav-icon bi bi-file-earmark-arrow-down"></i>
                    Peninjauan</a>
            </li>
        @endif
        <li class="nav-item">
                <a class="nav-link px-5 @if ($title == 'Peninjauan') active @endif" href="{{ route('peninjauan') }}"><i
                        class="nav-icon bi bi-file-earmark-arrow-down"></i>
                    Peninjauan</a>
            </li>
        <li class="nav-item">
            <a class="nav-link px-5 @if ($title == 'Pengajuan') active @endif" href="{{ route('pengajuan') }}"><i
                    class="nav-icon bi bi-file-earmark-arrow-up"></i>
                Pengajuan</a>
        </li>
        <!-- <div class="notification">
            <div class="notification-content">
                <li class="nav-item">
                    <a class="nav-link @if ($title == 'Notification' || $title == 'Notification') active @endif" href="{{route('pengguna') }}"><i
                        class="bi bi-person-circle"></i>
                    Pengguna</a>
            </div>
        </div> -->
        @if ($pengguna)
            <li class="nav-item">
                <a class="nav-link px-5  @if ($title == 'Pengguna' || $title == 'Detail Pengguna') active @endif" href="{{ route('pengguna') }}"><i
                        class="nav-icon bi bi-person-circle"></i>
                    Pengguna</a>
            </li>
        @endif
        <p class="pref px-3">Preferensi</p>
        <li class="nav-item">
            <a class="nav-link px-5  @if ($title == 'Pengaturan') active @endif" href="{{ route('pengaturan') }}"><i
                    class="nav-icon bi bi-gear"></i> Pengaturan</a>
        </li>
        <li class="nav-item">
            <!-- <a class="nav-link px-5" href="{{ route('logout') }}"><i class="nav-icon bi bi-box-arrow-left"></i> Keluar</a> -->
            <a class="nav-link px-5" onclick="return confirm('Apakah anda yakin akan meninggalkan pds?')" href="{{ route('logout') }}"><i class="nav-icon bi bi-box-arrow-left"></i> Keluar</a>
            <!-- <a type="button" href="#logoutModal" class="nav-link px-5" data-toggle="modal" data-target="logoutModal"><i class="nav-icon bi bi-box-arrow-left"></i> Keluar</a> -->
        </li>
    </ul>
    <div class="container">
        <div class="isi-help m-auto">
            <i class="icon-help bi bi-question-circle"></i>
            <h1>Butuh Bantuan?</h1>
            <p>Tim dukungan kami siap membantu Anda.</p>
            <a type="button" class="btn-help" href="{{ route('pengaturan') }}">Dapatkan Bantuan</a>
        </div>
    </div>

    <!-- modal -->
    <!-- 
        <div class="position-absolute modal-custom modal-custom-perbaiki d-flex"
            id="modal-delete-targeted" style="z-index: 100000;">
            <div class="close-modal position-absolute" wire:click='closeDelete'>
            </div>
            <div class="modal-content">
                <div class="header-modal border-bottom d-flex align-items-center justify-content-between">
                    <h1>Hapus Dokumen : pppp?</h1>
                    <i class="bi bi-x-lg" style="cursor: pointer;" wire:click='closeDelete'></i>
                </div>
                <div class="box-modal-content p-3 py-4 border-bottom" style="max-height: 85vh;overflow-y:auto">
                    <p class="fs-6">Konfirmasi Penghapusan PDS : <strong>ppppppp</strong>?</p>
                </div>
                <div class="ms-auto p-3">
                    <div class="d-flex">
                        <button wire:loading wire:target='closeDelete' disabled
                            class="btn bg-primary-status p-2 px-4 rounded-pill">
                            <div class="d-flex m-auto align-items-center">
                                <div class="loader d-flex">
                                    <div class="point-loader rounded-circle point-loader1 bg-primary"></div>
                                    <div class="point-loader rounded-circle point-loader2 bg-primary"></div>
                                    <div class="point-loader rounded-circle point-loader3 bg-primary"></div>
                                </div>
                            </div>
                        </button>
                        <button class="btn bg-primary-status p-2 px-4 rounded-pill" wire:loading.remove
                            wire:click='closeDelete'>Batal</button>

                        <button wire:loading wire:target='deletePds' disabled
                            class="btn btn-danger p-3 px-4 rounded-pill ms-2">
                            <div class="d-flex m-auto align-items-center">
                                <div class="loader d-flex">
                                    <div class="point-loader rounded-circle point-loader1 bg-white"></div>
                                    <div class="point-loader rounded-circle point-loader2 bg-white"></div>
                                    <div class="point-loader rounded-circle point-loader3 bg-white"></div>
                                </div>
                            </div>
                        </button>
                        <button class="btn btn-danger p-2 px-4 rounded-pill ms-2" wire:loading.remove>Logout</button>
                    </div>
                </div>
            </div>
        </div>
    -->
</div>


<!-- <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin Logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <a href="{{ route('logout') }}" class="btn btn-primary"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>