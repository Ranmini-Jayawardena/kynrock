@section('title', 'Experience Content')
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
                    <h2>{{ __('Home Page - Venue Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-experience-content') }}" enctype="multipart/form-data"
                            method="post" id="experience-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="heading" name="heading" required maxlength="191"
                                                value="{{ $data->heading }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description" name="description" rows="3" required>{{ $data->description }}</textarea>
                                            <span id="warning" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>
                                <div class = "row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Image') }} (1920 x 1080) <span
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
                $('#experience-content-form').parsley();
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



            document.getElementById('image').addEventListener('change', function() {
                previewImage(this, 'preview-image');
            });
        </script>
    </x-slot>
</x-app-layout>
