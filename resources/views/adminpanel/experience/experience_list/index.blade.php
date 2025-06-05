@section('title', 'Experience')
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
        <!-- RIBBON -->
        <div id="ribbon">
        </div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('experiences') }}">
                            <button
                                class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('experience-list') }}">
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

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Experience List') }}</h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                    </div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-experience') }}" enctype="multipart/form-data" method="post"
                            id="experience-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Experience Name') }}<span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="experience_name" name="experience_name" required
                                                value="" maxlength="191">
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
                                </div>

                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description" name="description" rows="3" required></textarea>
                                            <span id="warning" style="display:none; color:red;">This value is
                                                required.</span>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                <section class="col col-11" style="width: 100%;">
                                    <label class="label">{{ __('Description 2') }}<span
                                            style=" color: red;">*</span></label>
                                    <label class="input">
                                        <textarea class="form-control " id="description2" name="description2" rows="3" required></textarea>
                                    </label>
                                </section>
                            </div>

                                <div id="image-upload-section">
                                    <div class="row image-upload-wrapper">
                                        <section class="col col-2">
                                            <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="file" class="form-control form-input image-input"
                                                    name="images[0][image_name]" style="overflow: hidden;" required>
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="number" class="form-control form-input"
                                                    name="images[0][order]" min="0" max="255" value="" required>
                                            </label>
                                        </section>
                                        <section class="col col-2"
                                            style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                            <button type="button"
                                                class="btn-sm btn-success add-image" style="width:70px">{{ __('Add More') }}</button>
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
            $(function() {
                $('#experience-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);

            $(document).on('click', '.add-image', function() {
                var imageIndex = $('#image-upload-section .image-upload-wrapper').length;
                var newImageUploadWrapper = `
                    <div class="row image-upload-wrapper">
                        <section class="col col-2">
                            <label class="label">{{ __('Image') }} (1920 x 1080) <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="file" class="form-control form-input image-input" name= "images[${imageIndex}][image_name]" style="overflow: hidden;" required>
                            </label>
                        </section>
                        <section class="col col-2">
                            <label class="label">{{ __('Order') }} <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="number" class="form-control form-input" name="images[${imageIndex}][order]" min="0" max="255" value="" required>
                            </label>
                        </section>
                        <section class="col col-2" style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                            <button type="button" class="btn-sm btn-danger remove-image" style="width:70px">{{ __('Remove') }}</button>
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
                        ['view', ['codeview']]
                    ]
                });
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


        </script>
    </x-slot>
</x-app-layout>
