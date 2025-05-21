@section('title', 'Location List')
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
        <div id="ribbon"></div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('locations') }}">
                            <button class="btn cms_top_btn top_btn_height">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('location-list') }}">
                            <button class="btn cms_top_btn top_btn_height">{{ __('View All') }}</button>
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
            <!-- Widget ID (each widget will need unique ID) -->
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Location List') }}</h2>
                </header>
                <!-- widget div -->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->
                    </div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-location') }}" enctype="multipart/form-data" method="post"
                            id="location-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <section class="col col-4">
                                    <label class="label">{{ __('location Name') }}<span
                                            style="color: red;">*</span></label>
                                    <label class="input">
                                        <input type="text" id="location_name" name="location_name"
                                            value="{{ $data->location_name }}" required>
                                    </label>
                                </section>
                                <section class="col col-4">
                                    <label class="label">{{ __('Status') }}</label>
                                    <label class="select">
                                        <select name="status" id="status">
                                            <option value="Y" {{ $data->status == 'Y' ? 'selected' : '' }}>
                                                {{ __('Active') }}</option>
                                            <option value="N" {{ $data->status == 'N' ? 'selected' : '' }}>
                                                {{ __('Inactive') }}</option>
                                        </select>
                                     
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="label">{{ __('Order of the Location') }}<span
                                            style=" color: red;">*</span>
                                    </label>
                                    <label class="input">
                                        <input type ="number" id="order" name="order" value="{{ $data->order }}"
                                            required>
                                    </label>
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
                                    <label class="label">{{ __('Home Image') }} (1920 x 1080) <span
                                            style=" color: red;">*</span></label>
                                    <label class="input">
                                        <input type="file" class="form-control form-input" id="home_image"
                                            name="home_image" style="overflow: hidden;">
                                    </label>
                                </section>
                                <section class="col col-2">
                                    @if ($data->home_image)
                                        <img id="preview-image-before-upload"
                                            src="../storage/app/{{ $data->home_image }}" alt="preview image"
                                            style="max-height: 250px;">
                                    @else
                                        <img id="preview-image-before-upload"
                                            src="{{ asset('public/back/img/whitebg.jpg') }}" alt="default image"
                                            style="max-height: 250px;">
                                    @endif
                                </section>
                            </div>

                            <div id="image-upload-section">
                                @foreach ($images as $image)
                                    <div class="row image-upload-wrapper">
                                        <section class="col col-2">
                                            <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="file" class="form-control form-input image-input"
                                                    name="images[{{ $loop->index }}][image_name]"
                                                    style="overflow: hidden;">
                                                <img src="{{ asset('storage/app/' . $image->image_name) }}"
                                                    alt="image preview" style="max-height: 100px; margin-top: 10px;">
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="number" class="form-control form-input"
                                                    name="images[{{ $loop->index }}][order]" min="0"
                                                    value="{{ $image->order }}" required>
                                            </label>
                                            
                                        </section>
                                        <section class="col col-2" style=" margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                            <input type="hidden" name="images[{{ $loop->index }}][id]"
                                                value="{{ $image->id }}">
                                            <button type="button" class="btn-sm btn-danger remove-image"
                                                data-image-id="{{ $image->id }}">{{ __('Remove') }}</button>
                                        </section>
                                    </div>
                                @endforeach
                                <div class="row image-upload-wrapper">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Image') }} (1920 x 1080)</label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input image-input"
                                                name="images[][image_name]" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <label class="label">{{ __('Order') }}</label>
                                        <label class="input">
                                            <input type="number" class="form-control form-input"
                                                name="images[][order]" min="0" value="">
                                        </label>
                                    </section>
                                    <section class="col col-2" style=" margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                        <button type="button"
                                            class="btn-sm btn-success add-image">{{ __('Add More') }}</button>
                                    </section>
                                </div>
                            </div>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}">
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
                $('#location-form').parsley();
            });

            $(document).on('click', '.add-image', function() {
                var imageUploadSection = $('#image-upload-section');
                var newImageUploadWrapper = `
                    <div class="row image-upload-wrapper">
                        <section class="col col-2">
                            <label class="label">{{ __('Image') }} (1920 x 1080) <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="file" class="form-control form-input image-input" name="images[][image_name]" style="overflow: hidden;" required>
                            </label>
                        </section>
                        <section class="col col-2">
                            <label class="label">{{ __('Order') }} <span style="color: red;">*</span></label>
                            <label class="input">
                                <input type="number" class="form-control form-input" name="images[][order]" min="0" value="" required>
                            </label>
                        </section>
                        <section class="col col-2" style=" margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                            <button type="button" class="btn-sm btn-danger remove-image">{{ __('Remove') }}</button>
                        </section>
                    </div>`;
                imageUploadSection.append(newImageUploadWrapper);
            });

            // Remove image upload field
            $(document).on('click', '.remove-image', function() {
                var imageId = $(this).data('image-id');
                if (imageId) {
                    $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', 'delete_images[]')
                        .attr('value', imageId)
                        .appendTo('#location-form');
                }
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
        </script>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut('fast');
                sessionStorage.removeItem('success');
            }, 5000);
        </script>
        <script type="text/javascript">
            $(document).ready(function(e) {
                $('#home_image').change(function() {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $('#preview-image-before-upload').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });
        </script>
    </x-slot>
</x-app-layout>
