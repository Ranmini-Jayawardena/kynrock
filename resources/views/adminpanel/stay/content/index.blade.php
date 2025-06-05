@section('title', 'Stay Content')
<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <style>
            .note-editable {
                min-height: 300px !important;
            }
            .note-editable ul{
                list-style: disc !important;
                list-style-position: inside !important;
            }

            .note-editable ol {
                list-style: decimal !important;
                list-style-position: inside !important;
            }
        </style>
    </x-slot>

    <div id="main" role="main">
        <!-- RIBBON -->
        <div id="ribbon">
        </div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <br><br>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Stay Content') }}</h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-stay-content') }}" enctype="multipart/form-data" method="post" id="stay-content-form" class="smart-form">
                        @csrf
                        @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 1') }}<span style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="text" id="heading_en" name="heading_en" required maxlength="191" value="{{ $data->heading_en }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11"  style="width: 100%;">
                                        <label class="label">{{ __('Description 1') }}<span style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description_en" name="description_en" rows="3" required>{{ $data->description_en }}</textarea>
                                            <span id="warning1" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 2') }}<span style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="text" id="heading2" name="heading2" required maxlength="191" value="{{ $data->heading2 }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11"  style="width: 100%;">
                                        <label class="label">{{ __('Description 2') }} </label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description2" name="description2" rows="3" >{{ $data->description2 }}</textarea>
                                            
                                        </label>
                                    </section>
                                </div>
                                 <div class="row">
                                    <section class="col col-11"  style="width: 100%;">
                                        <label class="label">{{ __('Description 3') }}<span style=" color: red;">*</span> </label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description3" name="description3" rows="3" required>{{ $data->description3 }}</textarea>
                                            <span id="warning3" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                 <div class = "row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Image') }} (800 x 800) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image"
                                                name="image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image)
                                            <img id="preview-image" src="storage/app/{{ $data->image }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @else
                                            <img id="preview-image" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}>">
                                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                {{-- <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    {{ __('Back') }}
                                </button> --}}
                            </footer>
                        </form>
                    </div>
                    <!-- end widget content -->
                </div>
                <!-- end widget div -->
            </div>
            <!-- end widget -->
        </div>
    </div>
    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script>
            $(function(){
                $('#stay-content-form').parsley();
            });

            $(document).ready(function() {

                $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'para']], // List options
                        // ['para', ['paragraph']],
                        ['height', ['height']],
                        // ['table', ['table']],
                        // ['insert', ['link', 'picture', 'hr']],
                        // ['view', ['fullscreen', 'codeview', 'help']]
                        ['view', ['codeview']]

                    ]
                });
            });
             function previewImage(input, previewId) {
                const file = input.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(previewId).src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            }

            document.getElementById('image').addEventListener('change', function() {
                previewImage(this, 'preview-image');
            });

            $('#button1id').click(function(event) {
                var descriptionContent = $('#description_en').summernote('isEmpty') ? '' : $('#description_en').summernote('code');
                var subdescriptionContent2 = $('#description3').summernote('isEmpty') ? '' : $('#description3').summernote('code');
                var isValid = true;

                
                if (descriptionContent.trim() === '') {
                    event.preventDefault(); 
                    $('#warning1').show(); 
                    isValid = false;
                } else {
                    $('#warning1').hide();
                }

               
               

                if (subdescriptionContent2.trim() === '') {
                    event.preventDefault(); 
                    $('#warning3').show(); 
                    isValid = false;
                } else {
                    $('#warning3').hide();
                }


                return isValid;
            });
            
        </script>
    </x-slot>
</x-app-layout>
