@section('title', 'About Us Below Content')
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
                    <h2>{{ __('About Us Below Section Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-about-us-below-content') }}" enctype="multipart/form-data"
                            method="post" id="about-us-below-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Locations Section Heading') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="location_title" name="location_title" required
                                                value="{{ $data->location_title }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Locations Section Description ') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="location_description" name="location_description" rows="3" required>{{ $data->location_description }}</textarea>
                                             <span id="warning" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Locations Image') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="location_image"
                                                name="location_image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-location_image" src="storage/app/{{ $data->location_image }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Book Now Section Heading') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="booknow_title" name="booknow_title" required
                                                value="{{ $data->booknow_title }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Book Now Section Description ') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="booknow_description" name="booknow_description" rows="3" required>{{ $data->booknow_description }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Book Now Image') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="booknow_image"
                                                name="booknow_image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-booknow_image" src="storage/app/{{ $data->booknow_image }}"
                                            alt="preview image" style="max-height: 250px;">
                                    </section>

                                </div>


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
                $('#about-us-below-content-form').parsley();
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
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'para']],
                        ['height', ['height']],
                        ['view', ['codeview']]
                    ],
                    callbacks: {
                        onInit: function() {
                            // Add text-light to editable area
                            $('.note-editable').addClass('text-light');
                        }
                    }
                });

                 $('#button1id').click(function(event) {
                    var summernoteContent = $('.summernote').summernote('isEmpty') ? '' : $('.summernote')
                        .summernote('code');

                    if (summernoteContent.trim() === '') {
                        event.preventDefault(); // Prevent form submission
                        $('#warning').show(); // Show the warning message
                    } else {
                        $('#warning').hide();
                    }
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
            document.getElementById('location_image').addEventListener('change', function() {
                previewImage(this, 'preview-location_image');
            });
            document.getElementById('booknow_image').addEventListener('change', function() {
            previewImage(this, 'preview-booknow_image');
            });



            });
        </script>
    </x-slot>
</x-app-layout>
