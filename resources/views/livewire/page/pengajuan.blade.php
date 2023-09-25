<div class="container-fluid" style="height: 90vh;overflow-y: auto;">
    {{-- <livewire:logic.search></livewire:logic.search> --}}
    <div class="upload-doc bg-white d-flex">
        <h1>Upload Dokumen</h1>
        <!-- @if (session()->has('action'))
                <div class="alert alert-success alert-dismissible fade show m-0 me-auto" role="alert"
                    style="width: 600px;padding:10px 10px !important;">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>{{ session('action') }}</span>
                        <button type="button" class="btn-close p-0" data-bs-dismiss="alert" aria-label="Close"
                            style="position: unset !important"></button>
                    </div>
                </div>
            @endif -->
        <button wire:click='openModal("upload", "active")' onclick="wireClick('spinerUpload', 'eyeUpload')"
                type="button" class="btn box-radius-10 mybutton" style="background-color: #ED2B2A;">
            <div class="d-flex">
                <div id="spinerUpload" class="d-none">
                    <span class="spinner-border spinner-border-sm  me-2" role="status" aria-hidden="true"></span>
                </div>
                <div id="eyeUpload">
                    <i class="bi bi-file-earmark-arrow-up-fill me-1"></i>
                </div>
                UPLOAD
            </div>
        </button>
    </div>

    <div class="center">
      <div class="collapsible">
        <input type="checkbox" name="" id="toggle" />
        <label for="toggle" class="head px-2"><i class="bi bi-funnel px-1"></i> Filter</label>
        <div class="content-bwh">
            <form wire:submit.prevent='fun_search' class="filter p-3 box-radius-10">
                @csrf
                <input type="hidden" wire:model='search'>
                <div class="row">
                    <div class="col">
                        <label for="namanomor" onmouseup="formInput('o', 'inpnamanomor')">Judul Dokumen</label>
                        <div id="inpnamanomor" class=" namanomor box-radius-10 border mt-2">
                            <input type="text" id="namanomor" wire:model.defer="judul" class="form-control px-2"
                                placeholder="Nama / Nomor Dokumen">
                        </div>
                    </div>
                    <div class="col">
                        <label for="statusdokumen">Status Dokumen</label>
                        <select id="statusdokumen" class="form-select-filter mt-2 box-radius-10" aria-label="Default select example"
                            style="padding: 10px;" wire:model.defer='status'>
                            <option value="" selected>Semua</option>
                            <option value="Ditinjau">Ditinjau</option>
                            <option value="Selesai">Selesai</option>
                            <option value="Dikembalikan">Dikembalikan</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="datepicker">Tanggal</label>
                        <div class="mt-2 box-radius-10">
                            <!-- <a wire:click='clear' class="btn btn-outline-secondary" type="button" id="button-addon1"
                                style="padding: 10px;margin: auto;">Clear
                            </a> -->
                            <input id="dateinput" wire:model.defer='tanggal' type="date"
                                class="inputTanggal form-control" placeholder="Semua"
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <button type="submit" class="btn-cari mt-2 box-radius-10" style="padding: 10px;">Cari</button>
                    </div>
                    <div class="col-1">
                        <input type="reset" value="Reset" class="btn-reset mt-2">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    
    <!-- <form wire:submit.prevent='fun_search' class="filter bg-white p-3 box-radius-10">
        @csrf
        <input type="hidden" wire:model='search'>
        <div class="row">
            <div class="col-4">
                <label for="namanomor" onmouseup="formInput('o', 'inpnamanomor')">Judul Dokumen</label>
                <div id="inpnamanomor" class=" namanomor box-radius-10 border mt-2">
                    <span id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="text" id="namanomor" wire:model.defer="judul" class="form-control ps-0"
                        placeholder="Nama / Nomor Dokumen">
                </div>
            </div>
            <div class="col-3">
                <label for="statusdokumen">Status Dokumen</label>
                <select id="statusdokumen" class="form-select mt-2 box-radius-10" aria-label="Default select example"
                    style="padding: 10px;" wire:model.defer='status'>
                    <option value="" selected>Semua</option>
                    <option value="Ditinjau">Ditinjau</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Dikembalikan">Dikembalikan</option>
                </select>
            </div>
            <div class="col-3">
                <label for="datepicker">Tanggal</label>
                <div class="mt-2 box-radius-10">
                     <a wire:click='clear' class="btn btn-outline-secondary" type="button" id="button-addon1"
                        style="padding: 10px;margin: auto;">Clear
                    </a> 
                    <input id="dateinput" wire:model.defer='tanggal' type="date"
                        class="inputTanggal form-control" placeholder="Semua"
                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </div>
            <div class="col-2">
                <div class="d-flex flex-column justify-content-between" style="height: 100%;">
                    <div class="bg-white p-1"></div>
                    <button type="submit" class="btn btn-primary" style="padding: 10px;">Terapkan</button>
                </div>
            </div>
        </div>
    </form> -->
    <div class="bg-white box-radius-10 mt-3 semua-dokumen">
        <h1 class="title me-4 px-2">Semua Dokumen</h1>
            
            <!-- <button wire:click='openModal("upload", "active")' onclick="wireClick('spinerUpload', 'eyeUpload')"
                type="button" class="btn btn-primary box-radius-10 mybutton">
                <div class="d-flex">
                    <div id="spinerUpload" class="d-none">
                        <span class="spinner-border spinner-border-sm  me-2" role="status" aria-hidden="true"></span>
                    </div>
                    <div id="eyeUpload">
                        <i class="bi bi-file-earmark-arrow-up-fill me-1"></i>
                    </div>
                    Upload PDS
                </div>
            </button> table-bordered  -->
        
        <table class="table table-sm table-striped">
            <thead class="bg-tabel">
                <tr class="pengajuan">
                    <th scope="col" class="py-2 px-2">No</th>
                    <th scope="col" class="py-2">Nomor Dokumen</th>
                    <th scope="col" class="py-2">Nama Dokumen</th>
                    <th scope="col" class="py-2 px-2">Status</th>
                    <th scope="col" class="py-2 px-4">Tgl Upload</th>
                    <th scope="col" class="py-2 px-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($dokumen->isEmpty())
                    <tr>
                        <td colspan="6">Tidak ada dokumen</td>
                    </tr>   
                @else
                    @foreach ($dokumen as $item)
                        <tr class="pengajuan" style="line-height: 2;">
                            <td class="py-2 px-3 pe-0">{{ $loop->iteration }}</td>
                            <td class="py-2">{{ $item->nomor }}</td>
                            <td class="py-2">{{ $item->judul }}</td>
                            <td class="py-2">
                                @if ($item->status == 'Ditinjau')
                                    <div id="{{ $item->id . 'ditinjau' }}"
                                        class="bg-primary-status text-center p-2 rounded-pill">
                                        Ditinjau
                                    </div>
                                @endif
                                @if ($item->status == 'Dikembalikan')
                                    <div id="{{ $item->id . 'dikembalikan' }}"
                                        class="bg-danger-status text-center p-2 rounded-pill">
                                        Dikembalikan
                                    </div>
                                @endif
                                @if ($item->status == 'Selesai')
                                    <div id="{{ $item->id . 'selesai' }}"
                                        class="bg-success-status text-center p-2 rounded-pill">
                                        Selesai
                                    </div>
                                @endif
                            </td>
                            <td class="py-2 px-4">{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                            <td class="py-2 px-3">
                                @if ($item->status == 'Ditinjau')
                                    <div class="d-flex">
                                        <div id="{{ $item->id . 'detail' }}"
                                            class="box-icon rounded-circle"
                                            wire:click='openModal("detail", {{ $item->id }})'
                                            onclick="wireClick('spinerDetail{{ $item->id }}', 'folderDetail{{ $item->id }}')">
                                            <span id="spinerDetail{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <i id="folderDetail{{ $item->id }}" class="bi">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.419 15.7321C21.419 19.3101 19.31 21.4191 15.732 21.4191H7.95C4.363 21.4191 2.25 19.3101 2.25 15.7321V7.93212C2.25 4.35912 3.564 2.25012 7.143 2.25012H9.143C9.861 2.25112 10.537 2.58812 10.967 3.16312L11.88 4.37712C12.312 4.95112 12.988 5.28912 13.706 5.29012H16.536C20.123 5.29012 21.447 7.11612 21.447 10.7671L21.419 15.7321Z" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7.48096 14.463H16.216" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Detail & History</span>
                                            </div>
                                        </div>
                                        {{-- wire:click='openModal("edit", {{ $item->id }})' --}}
                                        {{-- onclick="wireClick('spinerEdit{{ $item->id }}', 'penEdit{{ $item->id }}')" --}}
                                        <div id="{{ $item->id . 'edit' }}" wire:click='openModal("edit", {{ $item->id }})' onclick="wireClick('spinerEdit{{ $item->id }}', 'penEdit{{ $item->id }}')"
                                            class="box-icon rounded-circle ms-1">
                                            <span id="spinerEdit{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <!-- <i id="penEdit{{ $item->id }}" class="bi bi-pen-fill"></i> -->
                                            <i id="penEdit{{ $item->id }}" class="bi">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.4925 2.789H7.75349C4.67849 2.789 2.75049 4.966 2.75049 8.048V16.362C2.75049 19.444 4.66949 21.621 7.75349 21.621H16.5775C19.6625 21.621 21.5815 19.444 21.5815 16.362V12.334" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.9209L16.3011 3.44793C17.2321 2.51793 18.7411 2.51793 19.6721 3.44793L20.8891 4.66493C21.8201 5.59593 21.8201 7.10593 20.8891 8.03593L13.3801 15.5449C12.9731 15.9519 12.4211 16.1809 11.8451 16.1809H8.09912L8.19312 12.4009C8.20712 11.8449 8.43412 11.3149 8.82812 10.9209Z" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.1655 4.60254L19.7315 9.16854" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Edit</span>
                                            </div>
                                        </div>
                                        <div id="{{ $item->id . 'hapus' }}"
                                            class="box-icon rounded-circle ms-1"
                                            wire:click='openModal("delete", {{ $item->id }})'
                                            onclick="wireClick('spinerDelete{{ $item->id }}', 'penDelete{{ $item->id }}')">
                                            <span id="spinerDelete{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <i id="penDelete{{ $item->id }}" class="bi">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.3248 9.4682C19.3248 9.4682 18.7818 16.2032 18.4668 19.0402C18.3168 20.3952 17.4798 21.1892 16.1088 21.2142C13.4998 21.2612 10.8878 21.2642 8.27979 21.2092C6.96079 21.1822 6.13779 20.3782 5.99079 19.0472C5.67379 16.1852 5.13379 9.4682 5.13379 9.4682" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.708 6.23969H3.75" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.4406 6.23967C16.6556 6.23967 15.9796 5.68467 15.8256 4.91567L15.5826 3.69967C15.4326 3.13867 14.9246 2.75067 14.3456 2.75067H10.1126C9.53358 2.75067 9.02558 3.13867 8.87558 3.69967L8.63258 4.91567C8.47858 5.68467 7.80258 6.23967 7.01758 6.23967" stroke="#D21312" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Delete</span>
                                            </div>
                                        </div>
                                        <div id="{{ $item->id . 'perbaiki' }}"
                                            class="d-none  w-100 p-2 py-0 text-center fw-medium text-white rounded-pill"
                                            style="cursor: pointer;"
                                            wire:click='openModal("perbaiki", {{ $item->id }})'>
                                            Perbaiki
                                        </div>
                                    </div>
                                @endif
                                @if ($item->status == 'Dikembalikan')
                                    <div id="{{ $item->id . 'perbaiki' }}" class="d-flex">
                                        <div class="bg-danger w-100 p-2 py-1 text-center fw-medium text-white rounded-pill"
                                            style="cursor: pointer;"
                                            wire:click='openModal("perbaiki", {{ $item->id }})'
                                            onclick="wireClick('spinerPerbaiki{{ $item->id }}', 'folderPerbaiki{{ $item->id }}')">
                                            <span id="spinerPerbaiki{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <span id="folderPerbaiki{{ $item->id }}"></span>
                                            Perbaiki
                                        </div>
                                    </div>
                                @endif
                                @if ($item->status == 'Selesai')
                                    <div class="d-flex">
                                        <div id="{{ $item->id . 'detail' }}"
                                            class="box-icon rounded-circle bg-primary"
                                            wire:click='openModal("detail", {{ $item->id }})'
                                            onclick="wireClick('spinerDetail{{ $item->id }}', 'folderDetail{{ $item->id }}')">
                                            <span id="spinerDetail{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <i id="folderDetail{{ $item->id }}" class="bi bi-folder-fill"></i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Detail & History</span>
                                            </div>
                                        </div>
                                        <div id="{{ $item->id . 'edit' }}"
                                            class="box-icon disable rounded-circle bg-warning ms-1">
                                            <span id="spinerEdit{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <i id="penEdit{{ $item->id }}" class="bi bi-pen-fill"></i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Edit</span>
                                            </div>
                                        </div>
                                        <div id="{{ $item->id . 'delete' }}"
                                            class="box-icon disable rounded-circle bg-danger ms-1">
                                            <span id="spinerDelete{{ $item->id }}"
                                                class="spinner-border spinner-border-sm m-auto d-none" role="status"
                                                aria-hidden="true"></span>
                                            <i id="penDelete{{ $item->id }}" class="bi bi-trash-fill"></i>
                                            <div class="my-tooltip d-none">
                                                <div class="segitiga"></div>
                                                <span>Delete</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
    @if ($modal['for'] == 'upload')
    <livewire:logic.upload-pds :modalUpload="$modal['message']"></livewire:logic.upload-pds>
    @endif
    @if ($modal['for'] == 'detail')
        <livewire:logic.detail-history :idDokumen="$modal['message']"></livewire:logic.detail-history>
    @endif
    @if ($modal['for'] == 'edit')
        <livewire:logic.edit-pds :idDokumen="$modal['message']"></livewire:logic.edit-pds>
    @endif
    @if ($modal['for'] == 'perbaiki')
        <livewire:logic.perbaiki :idDokumen="$modal['message']"></livewire:logic.perbaiki>
    @endif
    @if ($modal['for'] == 'delete')
        <div class="position-absolute modal-custom modal-custom-perbaiki {{ $modal['delete'] }} d-flex"
            id="modal-delete-targeted" style="z-index: 100000;">
            <div class="close-modal position-absolute" wire:click='closeDelete'>
            </div>
            <div class="modal-content">
                <div class="header-modal border-bottom d-flex align-items-center justify-content-between">
                    <h1>Hapus Dokumen : {{ $deleteName }} ?</h1>
                    <i class="bi bi-x-lg" style="cursor: pointer;" wire:click='closeDelete'></i>
                </div>
                <div class="box-modal-content p-3 py-4 border-bottom" style="max-height: 85vh;overflow-y:auto">
                    <p class="fs-6">Konfirmasi Penghapusan PDS : <strong>{{ $deleteName }}</strong>?</p>
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
                        <button class="btn btn-danger p-2 px-4 rounded-pill ms-2" wire:loading.remove
                            wire:click='deletePds({{ $modal['message'] }}, {{ $deleteNomor }})'>Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
