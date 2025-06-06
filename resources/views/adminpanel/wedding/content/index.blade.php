@section('title', 'Wedding Content')
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
                    <h2>{{ __('Wedding Page Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-wedding-content') }}" enctype="multipart/form-data" method="post"
                            id="wedding-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title1" name="title1" required maxlength="191"
                                                value="{{ $data->title1 }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description1" name="description1" rows="3" required>{{ $data->description1 }}</textarea>
                                            <span id="warning1" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title2" name="title2" required maxlength="191"
                                                value="{{ $data->title2 }}">
                                        </label>
                                    </section>

                                    <section class="col col-3">
                                        <label class="label">{{ __('Image') }} (800 x 1000) <span
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
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Wedding Venue Content Heading') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="wedding_venue_title" name="wedding_venue_title" maxlength="191"
                                                required value="{{ $data->wedding_venue_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Wedding Venue Content Description 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="wedding_venue_description1" name="wedding_venue_description1" rows="3"
                                                required>{{ $data->wedding_venue_description1 }}</textarea>
                                                
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Wedding Venue Content Description 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="wedding_venue_description2" name="wedding_venue_description2" rows="3"
                                                required>{{ $data->wedding_venue_description2 }}</textarea>
                                                <span id="warning2" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Wedding Package Title') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="wedding_package_title"
                                                name="wedding_package_title" required maxlength="191"
                                                value="{{ $data->wedding_package_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Wedding Package Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="wedding_package_description" name="wedding_package_description"
                                                rows="3" required>{{ $data->wedding_package_description }}</textarea>
                                            <span id="warning3" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Wedding Package Image') }} (800 x 800) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input"
                                                id="wedding_package_image" name="wedding_package_image"
                                                style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->wedding_package_image)
                                            <img id="preview-wedding_package_image"
                                                src="storage/app/{{ $data->wedding_package_image }}"
                                                alt="preview wedding_package_image" style="max-height: 250px;">
                                        @else
                                            <img id="preview-wedding_package_image"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview wedding_package_image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Cultinary Title') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="cultinary_title" name="cultinary_title" maxlength="191"
                                                required value="{{ $data->cultinary_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Cultinary Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="cultinary_description" name="cultinary_description" rows="3"
                                                required>{{ $data->cultinary_description }}</textarea>
                                            <span id="warning4" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Services Title') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="services_title" name="services_title" required maxlength="191"
                                                value="{{ $data->services_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Services Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="services_description" name="services_description" rows="3"
                                                required>{{ $data->services_description }}</textarea>
                                            <span id="warning5" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Services Image') }} (800 x 800) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="services_image"
                                                name="services_image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->services_image)
                                            <img id="preview-services_image"
                                                src="storage/app/{{ $data->services_image }}"
                                                alt="preview services_image" style="max-height: 250px;">
                                        @else
                                            <img id="preview-services_image"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}"
                                                alt="preview services_image" style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>

                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Plan Wedding Title') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="plan_wedding_title" name="plan_wedding_title" maxlength="191"
                                                required value="{{ $data->plan_wedding_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Plan Wedding Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="plan_wedding_description" name="plan_wedding_description"
                                                rows="3" required>{{ $data->plan_wedding_description }}</textarea>
                                            <span id="warning6" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
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

            document.getElementById('image').addEventListener('change', function() {
                previewImage(this, 'preview-image');
            });
            document.getElementById('wedding_package_image').addEventListener('change', function() {
                previewImage(this, 'preview-wedding_package_image');
            });
            document.getElementById('services_image').addEventListener('change', function() {
                previewImage(this, 'preview-services_image');
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
                        ['view', ['codeview']],
                         ['misc', ['clearAll']]
                    ],
                    buttons: {
                        clearAll: function(context) {
                            const ui = $.summernote.ui;
                            const button = ui.button({
                                contents: '<i class="note-icon-eraser"></i> Clear All',
                                tooltip: 'Remove all content',
                                click: function() {
                                    // Clears all content and formatting
                                    context.invoke('code', '');
                                }
                            });
                            return button.render();
                        }
                    }
                });

            });


            $('#button1id').click(function(event) {
                var descriptionContent1 = $('#description1').summernote('isEmpty') ? '' : $('#description1').summernote('code');
                var subdescriptionContent2 = $('#wedding_venue_description2').summernote('isEmpty') ? '' : $('#wedding_venue_description2').summernote('code');
                var subdescriptionContent3 = $('#wedding_package_description').summernote('isEmpty') ? '' : $('#wedding_package_description').summernote('code');
                var subdescriptionContent4= $('#cultinary_description').summernote('isEmpty') ? '' : $('#cultinary_description').summernote('code');
                var subdescriptionContent5 = $('#services_description').summernote('isEmpty') ? '' : $('#services_description').summernote('code');
                var subdescriptionContent6 = $('#plan_wedding_description').summernote('isEmpty') ? '' : $('#plan_wedding_description').summernote('code');

                var isValid = true;

                
                if (descriptionContent1.trim() === '') {
                    event.preventDefault(); 
                    $('#warning1').show(); 
                    isValid = false;
                } else {
                    $('#warning1').hide();
                }

               
                if (subdescriptionContent2.trim() === '') {
                    event.preventDefault(); 
                    $('#warning2').show(); 
                    isValid = false;
                } else {
                    $('#warning2').hide();
                }

                 if (subdescriptionContent3.trim() === '') {
                    event.preventDefault(); 
                    $('#warning3').show(); 
                    isValid = false;
                } else {
                    $('#warning3').hide();
                }

                 if (subdescriptionContent4.trim() === '') {
                    event.preventDefault(); 
                    $('#warning4').show(); 
                    isValid = false;
                } else {
                    $('#warning4').hide();
                }

                 if (subdescriptionContent5.trim() === '') {
                    event.preventDefault(); 
                    $('#warning5').show(); 
                    isValid = false;
                } else {
                    $('#warning5').hide();
                }

                 if (subdescriptionContent6.trim() === '') {
                    event.preventDefault(); 
                    $('#warning6').show(); 
                    isValid = false;
                } else {
                    $('#warning6').hide();
                }


                return isValid;
            });
            
        </script>
    </x-slot>
</x-app-layout>
