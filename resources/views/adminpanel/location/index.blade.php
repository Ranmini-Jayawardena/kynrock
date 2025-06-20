@section('title', 'Location')
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
        <div id="ribbon"></div>
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('locations') }}">
                            <button class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>
                        <a href="{{ route('location-list') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('View All') }}</button>
                        </a>
                    </div>
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

            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Location List') }}</h2>
                </header>

                <div>
                    <div class="jarviswidget-editbox"></div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-location') }}" enctype="multipart/form-data" method="post" id="location-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Location Name') }}<span style="color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="location_name" name="location_name" required maxlength="191" value="">
                                        </label>
                                    </section>

                                    <section class="col col-4">
                                        <label class="label">{{ __('Status') }}</label>
                                        <label class="select">
                                            <select name="status" id="status">
                                                <option value="Y">{{ __('Active') }}</option>
                                                <option value="N">{{ __('Inactive') }}</option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </section>

                                    <section class="col col-2">
                                        <label class="label">{{ __('Order of the Location') }}<span style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="number" id="order" name="order" value="" min="0" max="255" required>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span style="color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description" name="description" rows="3" required></textarea>
                                            <span id="warning" style="display:none; color:red;">This value is required.</span>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Home Image') }} (1920 x 1080) <span style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="home_image" name="home_image" required>
                                            <small id="file-error" style="color: red; display: none;"></small>
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-image-before-upload" src="{{ asset('public/back/img/whitebg.jpg') }}" alt="preview image" style="max-height: 250px;">
                                    </section>
                                </div>

                                <div id="image-upload-section">
                                    <div class="row image-upload-wrapper">
                                        <section class="col col-2">
                                            <label class="label">{{ __('Image') }} (1920 x 1080) <span style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="file" class="form-control form-input image-input" name="images[0][image_name]" required>
                                                <small class="image-error" style="color: red; display: none;"></small>
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} <span style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="number" class="form-control form-input" name="images[0][order]" min="0" max="255" value="" required>
                                            </label>
                                        </section>
                                        <section class="col col-2" style="margin-top: 15px; padding: 10px 20px;">
                                            <button type="button" class="btn-sm btn-success add-image" style="width:70px">{{ __('Add More') }}</button>
                                        </section>
                                    </div>
                                </div>
                            </fieldset>

                            <footer>
                                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    {{ __('Back') }}
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
                $('#location-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);

            function validateImageInput(input) {
                const file = input.files[0];
                const errorElement = input.closest('label').querySelector('.image-error');

                if (file && file.size > 10 * 1024 * 1024) {
                    errorElement.textContent = "Image file size must be 10MB or less.";
                    errorElement.style.display = 'block';
                    input.value = '';
                } else {
                    errorElement.textContent = '';
                    errorElement.style.display = 'none';
                }
            }

            $(document).on('change', '.image-input', function() {
                validateImageInput(this);
            });

            $(document).on('click', '.add-image', function() {
                var imageIndex = $('#image-upload-section .image-upload-wrapper').length;
                var newImageUploadWrapper = `
                    <div class="row image-upload-wrapper">
                        <section class="col col-2">
                            <label class="label">Image (1920 x 1080) <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="file" class="form-control form-input image-input" name="images[${imageIndex}][image_name]" required>
                                <small class="image-error" style="color: red; display: none;"></small>
                            </label>
                        </section>
                        <section class="col col-2">
                            <label class="label">Order <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="number" class="form-control form-input" name="images[${imageIndex}][order]" min="0" max="255" required>
                            </label>
                        </section>
                        <section class="col col-2" style="margin-top: 15px; padding: 10px 20px;">
                            <button type="button" class="btn-sm btn-danger remove-image" style="width:70px">Remove</button>
                        </section>
                    </div>`;
                $('#image-upload-section').append(newImageUploadWrapper);
            });

            $(document).on('click', '.remove-image', function() {
                $(this).closest('.image-upload-wrapper').remove();
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
                        ['para', ['ul', 'ol', 'para']],
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
                                    context.invoke('code', '');
                                }
                            });
                            return button.render();
                        }
                    }
                });
            });

            $('#home_image').change(function(e) {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview-image-before-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            document.getElementById('home_image').addEventListener('change', function() {
                const file = this.files[0];
                const errorElement = document.getElementById('file-error');

                if (file && file.size > 10 * 1024 * 1024) {
                    errorElement.textContent = "File size is too large.";
                    errorElement.style.display = 'block';
                    this.value = '';
                } else {
                    errorElement.textContent = '';
                    errorElement.style.display = 'none';
                }
            });

            $('#button1id').click(function(event) {
                if ($('.summernote').summernote('isEmpty')) {
                    $('#warning').show();
                    event.preventDefault();
                } else {
                    $('#warning').hide();
                }
            });
        </script>
    </x-slot>
</x-app-layout>
