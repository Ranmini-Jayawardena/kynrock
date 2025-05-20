@section('title', 'About Us Dining Content')
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
                    <h2>{{ __('About Us - Dining Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-about-us-dining-content') }}" enctype="multipart/form-data"
                            method="post" id="about-us-dining-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title" name="title" required
                                                value="{{ $data->title }}">
                                        </label>
                                    </section>

                                    <section class="col col-3">
                                        <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image6"
                                                name="image6" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image6)
                                            <img id="preview-image6" src="storage/app/{{ $data->image6 }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @else
                                            <img id="preview-image6" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description" name="description" rows="3" required>{{ $data->description }}</textarea>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Slider Image 1') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image1"
                                                name="image1" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image1)
                                            <img id="preview-image1" src="storage/app/{{ $data->image1 }}"
                                                alt="preview image" style="max-height: 250px;">
                                            {{-- <button type="button" class="btn btn-danger btn-sm remove-image"
                                                data-input="image1"
                                                style="display: flex; justify-content: center; align-items: center; margin: auto;"
                                                data-preview="preview-image1"
                                                data-hidden="remove-image1">Remove</button>
                                            <input type="hidden" name="remove_image1" id="remove-image1"
                                                value="0"> --}}
                                        @else
                                            <img id="preview-image1" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif

                                    </section>
                                    <section class="col col-3">
                                        <label class="label">{{ __('Slider Image 2') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image2"
                                                name="image2" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image2)
                                            <img id="preview-image2" src="storage/app/{{ $data->image2 }}"
                                                alt="preview image" style="max-height: 250px;">
                                            {{-- <button type="button" class="btn btn-danger btn-sm remove-image"
                                                data-input="image1"
                                                style="display: flex; justify-content: center; align-items: center; margin: auto;"
                                                data-preview="preview-image2"
                                                data-hidden="remove-image2">Remove</button>
                                            <input type="hidden" name="remove_image2" id="remove-image2"
                                                value="0"> --}}
                                        @else
                                            <img id="preview-image2" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Slider Image 3') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image3"
                                                name="image3" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image3)
                                            <img id="preview-image3" src="storage/app/{{ $data->image3 }}"
                                                alt="preview image" style="max-height: 250px;">
                                            {{-- <button type="button" class="btn btn-danger btn-sm remove-image"
                                                data-input="image3"
                                                style="display: flex; justify-content: center; align-items: center; margin: auto;"
                                                data-preview="preview-image3"
                                                data-hidden="remove-image3">Remove</button>
                                            <input type="hidden" name="remove_image3" id="remove-image3"
                                                value="0"> --}}
                                        @else
                                            <img id="preview-image3" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                    <section class="col col-3">
                                        <label class="label">{{ __('Slider Image 4') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image4"
                                                name="image4" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image4)
                                            <img id="preview-image4" src="storage/app/{{ $data->image4 }}"
                                                alt="preview image" style="max-height: 250px;">
                                            <button type="button" class="btn btn-danger btn-sm remove-image"
                                                data-input="image4"style="display: block; margin-top: 10px; width: 70px;"
                                                data-preview="preview-image4"
                                                data-hidden="remove-image4">Remove</button>
                                            <input type="hidden" name="remove_image4" id="remove-image4"
                                                value="0">
                                        @else
                                            <img id="preview-image4" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Slider Image 5') }} (1920 x 1080) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image5"
                                                name="image5" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image5)
                                            <img id="preview-image5" src="storage/app/{{ $data->image5 }}"
                                                alt="preview image" style="max-height: 250px;">
                                            <button type="button" class="btn btn-danger btn-sm remove-image"
                                                data-input="image5"
                                                style="display: block; margin-top: 10px; width: 70px;"
                                                data-preview="preview-image5"
                                                data-hidden="remove-image5">Remove</button>
                                            <input type="hidden" name="remove_image5" id="remove-image5"
                                                value="0">
                                        @else
                                            <img id="preview-image5" src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
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
                $('#about-us-dining-content-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);
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

            document.getElementById('image1').addEventListener('change', function() {
                previewImage(this, 'preview-image1');
            });
            document.getElementById('image2').addEventListener('change', function() {
                previewImage(this, 'preview-image2');
            });
            document.getElementById('image3').addEventListener('change', function() {
                previewImage(this, 'preview-image3');
            });
            document.getElementById('image4').addEventListener('change', function() {
                previewImage(this, 'preview-image4');
            });
            document.getElementById('image5').addEventListener('change', function() {
                previewImage(this, 'preview-image5');
            });
            document.getElementById('image6').addEventListener('change', function() {
                previewImage(this, 'preview-image6');
            });

            $(document).ready(function() {
                $('.remove-image').click(function() {
                    let inputName = $(this).data('input');
                    let previewImage = $(this).data('preview');
                    let hiddenInput = $(this).data('hidden');

                    // Hide the image preview
                    $('#' + previewImage).attr('src', "{{ asset('public/back/img/whitebg.jpg') }}");

                    // Set hidden input value to mark for removal
                    $('#' + hiddenInput).val('1');

                    // Hide the remove button itself
                    $(this).hide();
                });
            });




            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold',
                            'italic',
                            'underline',
                            'clear',
                            'strikethrough'
                        ]],
                        ['fontsize', [
                            'fontsize'
                        ]],
                        ['color', ['color']],
                        ['para', ['ul', 'ol',
                            'para'
                        ]],
                        ['height', ['height']],
                        ['view', ['codeview']]
                    ]
                });
            });
        </script>
    </x-slot>
</x-app-layout>
