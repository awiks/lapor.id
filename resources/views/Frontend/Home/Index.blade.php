@extends('Template.Frontend')
@push('title',$title)
@section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container">
        <h2>Layanan Pengaduan Online Masyarakat</h2>
        <p>Sampaikan laporan Anda langsung kepada kami</p>
        <div class="row mt-4">
            <div class="col-12 col-lg-8 m-auto">

            </div>
        </div>
       <div class="row">
        <div class="col-md-8 m-auto">
            <form action="" class="complaint-form">
                    <div class="mb-3">
                        <label class="form-label">Pilih Klasifikasi Laporan</label><br>
                        <div class="btn-group btn-complaint-type" data-toggle="buttons">
                            <label class="btn btn-default rounded-0 ">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked><span>Pengaduan</span>
                            </label>
                            <label class="btn btn-default rounded-0 active">
                              <input type="radio" name="options" id="option2" autocomplete="off"> <span>Aspirasi</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control rounded-0" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Isi Pengaduan anda</label>
                        <textarea class="form-control rounded-0" name="" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="text" class="form-control rounded-0" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi kejadian</label>
                        <input type="text" class="form-control rounded-0" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input type="text" class="form-control rounded-0" >
                    </div>

                    <div class="complaint-form-attachments" style="display: block;">
    
                        <div class="responsiv-uploader-fileupload style-file-multi is-multi " data-control="fileupload" data-template="#uploaderTemplatefileUploader" data-unique-id="fileUploader" data-file-types=".jpg,.jpeg,.bmp,.png,.webp,.gif,.svg,.js,.map,.ico,.css,.less,.scss,.ics,.odt,.doc,.docx,.ppt,.pptx,.pdf,.swf,.txt,.xml,.ods,.xls,.xlsx,.eot,.woff,.woff2,.ttf,.flv,.wmv,.mp3,.ogg,.wav,.avi,.mov,.mp4,.mpeg,.webm,.mkv,.rar,.xml,.zip">
                    
                        <!-- Field placeholder -->
                        <input type="hidden" name="_uploader[attachments]" value="">
                    
                        <!-- Upload Button -->
                        <button type="button" class="ui button btn btn-default oc-icon-upload upload-button dz-clickable">
                            Upload Lampiran (max 2MB)
                        </button>
                    
                        <!-- Existing files -->
                        <div class="upload-files-container">
                                </div>
                    </div>
                    </div>

                    <div class="complaint-form-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex justify-content-start p-2">
                                    <a href="#" data-toggle="slidetoggle" class="" data-target=".complaint-form-attachments">
                                        <i class="fa fa-fw fa-paperclip position-relative"><span class="position-absolute top-0 start-0 translate-middle badge rounded-pill bg-danger">0</span></i> 
                                        <span class="label-attachment" data-toggle="tooltip" data-placement="top" data-title="Upload lampiran pendukung laporan Anda" data-original-title="" title="">Upload Lampiran</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-primary rounded-0">Laporkan!</button>
                                </div>
                            </div>
                        </div>
                    </div>
 
            </form>
        </div>
       </div>

       

    </div>
    
</section>


<section class="block block-counter"  style="color:white; padding: 40px 0 40px;">
    <div class="container">
        <div class="text-center  h3 mg-0 mg-b-30" style="color: white">JUMLAH LAPORAN SEKARANG</div>

        <div class="row-flex flex-tablet text-center">
            <div class="post post-counter" style="margin-left: auto;margin-right: auto;">
                <div class="counter-count">
                    <span class="numscroller roller-title-number-1 scrollzip isShown" data-min="0" data-max="837537" data-delay="2" data-increment="1000" data-slno="1">837,537</span></div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('Modal')
@include('Template.ModalLogin')
@endpush

@push('Javascript')
<script type="text/javascript">

</script>
@endpush