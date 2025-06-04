@section('title', 'About Us Content')
<x-app-layout>
    <x-slot name="header">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <style>
            .note-editable {
                min-height: 300px !important;
            }

            .note-editable ul {
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
        <div id="content">
            <div class="row">
                <div class="col-lg-12"><br><br></div>
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
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('About Us Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-about-us-content') }}" enctype="multipart/form-data" method="post"
                            id="about-us-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title1" name="title1" required
                                                value="{{ $data->title1 }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="content1" name="content1" rows="3" required>{{ $data->content1 }}</textarea>
                                             <span id="warning1" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Heading 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title2" name="title2" required
                                                value="{{ $data->title2 }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="content2" name="content2" rows="3" required>{{ $data->content2 }}</textarea>
                                             <span id="warning2" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Image') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image1"
                                                name="image1" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-image1" src="storage/app/{{ $data->image1 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>

                                </div>
                                {{-- Feature1 --}}

                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __(' Icon 1') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="feature_icon1"
                                                name="feature_icon1" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-feature_icon1" src="storage/app/{{ $data->feature_icon1 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Name 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name1" name="feature_name1" required
                                                value="{{ $data->feature_name1 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="feature_description1" name="feature_description1" rows="3" required>{{ $data->feature_description1 }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                {{-- Feature2 --}}
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __(' Icon 2') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="feature_icon2"
                                                name="feature_icon2" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-feature_icon2" src="storage/app/{{ $data->feature_icon2 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Name 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name2" name="feature_name2" required
                                                value="{{ $data->feature_name2 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="feature_description2" name="feature_description2" rows="3" required>{{ $data->feature_description2 }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                {{-- Feature3 --}}
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __(' Icon 3') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="feature_icon3"
                                                name="feature_icon3" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-feature_icon3" src="storage/app/{{ $data->feature_icon3 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Name 3') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name3" name="feature_name3" required
                                                value="{{ $data->feature_name1 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 3') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="feature_description3" name="feature_description3" rows="3" required>{{ $data->feature_description3 }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                {{-- Feature4 --}}
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __(' Icon 4') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="feature_icon4"
                                                name="feature_icon4" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-feature_icon4" src="storage/app/{{ $data->feature_icon4 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Name 4') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name4" name="feature_name4" required
                                                value="{{ $data->feature_name4 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 4') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="feature_description4" name="feature_description4" rows="3" required>{{ $data->feature_description4 }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                {{-- Feature5 --}}
                                {{-- <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __(' Icon 5') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="feature_icon5"
                                                name="feature_icon5" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-feature_icon5" src="storage/app/{{ $data->feature_icon5 }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __(' Name 5') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name5" name="feature_name5" 
                                                value="{{ $data->feature_name5 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __(' Description 5') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="feature_description5" name="feature_description5" rows="3" >{{ $data->feature_description5 }}</textarea>
                                        </label>
                                    </section>

                                </div> --}}

                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                {{-- <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    {{ __('Back') }}
                                </button> --}}
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <x-slot name="script">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(function() {
                $('#about-us-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);

            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough']],
                        ['fontname', ['fontname']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'para']],
                        ['height', ['height']],
                        ['view', ['codeview']]
                    ]
                });

                $('#button1id').click(function(event) {
                var descriptionContent = $('#content1').summernote('isEmpty') ? '' : $('#content1').summernote('code');
                var subdescriptionContent = $('#content2').summernote('isEmpty') ? '' : $('#content2').summernote('code');
                var isValid = true;

                
                if (descriptionContent.trim() === '') {
                    event.preventDefault(); 
                    $('#warning1').show(); 
                    isValid = false;
                } else {
                    $('#warning1').hide();
                }

               
                if (subdescriptionContent.trim() === '') {
                    event.preventDefault(); 
                    $('#warning2').show(); 
                    isValid = false;
                } else {
                    $('#warning2').hide();
                }

                return isValid;
            });
            });

                // Image Preview Functionality
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

                // Event listeners for each file input
                document.getElementById('image1').addEventListener('change', function() {
                    previewImage(this, 'preview-image1');
                });
                document.getElementById('feature_icon1').addEventListener('change', function() {
                    previewImage(this, 'preview-feature_icon1');
                });
                document.getElementById('feature_icon2').addEventListener('change', function() {
                    previewImage(this, 'preview-feature_icon2');
                });
                document.getElementById('feature_icon3').addEventListener('change', function() {
                    previewImage(this, 'preview-feature_icon3');
                });
                document.getElementById('feature_icon4').addEventListener('change', function() {
                    previewImage(this, 'preview-feature_icon4');
                });
                document.getElementById('feature_icon5').addEventListener('change', function() {
                    previewImage(this, 'preview-feature_icon5');
                });

            
        </script>
    </x-slot>
</x-app-layout>
