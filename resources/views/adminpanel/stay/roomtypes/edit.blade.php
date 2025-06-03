@section('title', 'Rooms')
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
                        <a href="{{ route('roomtypes') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('roomtypes-list') }}">
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
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Room Types') }}</h2>
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
                        <form action="{{ route('save-roomtypes') }}" enctype="multipart/form-data" method="post"
                            id="roomtypes-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Room Name') }}<span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type="text" id="room_name" name="room_name" required
                                                value="{{ $data->room_name }}">
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
                                            <i></i>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Title') }}
                                        </label>
                                        <label class="input">
                                            <input type="text" id="title" name="title"
                                                value="{{ $data->title }}" >
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description_en" name="description_en" rows="3" required>{{ $data->description_en }}</textarea>

                                        </label>
                                    </section>
                                </div>


                                <div class="row">
                                    <section class="col col-12">
                                        <label class="label">{{ __('Room Features') }}</label>
                                        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                                            @foreach ($features as $feature)
                                                <label class="checkbox"
                                                    style="display: flex; align-items: center; gap: 10px;">
                                                    <input type="checkbox" name="features[{{ $feature->id }}]"
                                                        value="{{ $feature->id }}"
                                                        @foreach ($roomFeatures as $roomFeature)
                                                    @if ($feature->id == $roomFeature->feature_id)
                                                    {{ 'checked' }}
                                                    @endif @endforeach><i></i>
                                                    {{ $feature->feature_name }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12">
                                        <label class="label">{{ __('Room Amenities') }}</label>
                                        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                                            @foreach ($amenities as $amenity)
                                                <label class="checkbox"
                                                    style="display: flex; align-items: center; gap: 10px;">
                                                    <input type="checkbox" name="amenities[{{ $amenity->id }}]"
                                                        value="{{ $amenity->id }}"
                                                        @foreach ($roomAmenities as $roomAmenity)
                                                            @if ($amenity->id == $roomAmenity->amenities_id)
                                                                {{ 'checked' }}
                                                            @endif @endforeach>
                                                    <i></i>
                                                    {{ $amenity->amenties_name }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Stay Page Title') }} <span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="home_title" name="home_title" required
                                                value="{{ $data->home_title }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Stay Page Content 1') }} <span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control" id="home_content1" name="home_content1" rows="3" required>{{ $data->home_content1 }}</textarea>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __('Stay Page Content 2') }} <span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="home_content2" name="home_content2" value="{{$data->home_content2}}" required>
                                        </label>
                                    </section>
                                    <section class="col col-12">
                                        {{-- <label class="label">{{ __('Show in the Home page') }}</label> --}}
                                        <div style="display:  flex-wrap: wrap; gap: 100px;">
                                            <label class="checkbox"
                                                style="display: flex; align-items: center;  gap: 100px;">

                                                <input type="checkbox" name="checkbox" value="{{ $data->checkbox }}"
                                                    @if ($data->checkbox == 1) {{ 'checked' }} @endif>
                                                <i></i>Display this room type on the homepage as well
                                            </label>
                                            <span id="checkbox-warning" style="display:none; color:red;"> Title and content
                                                 are required to display this section on the homepage.</span>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Home Image ') }} (1200 x 800) </label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="home_image"
                                                name="home_image" style="overflow: hidden;">
                                        </label>
                                    </section>

                                    <section class="col col-2">
                                        @if ($data->home_image)
                                            <img id="preview-home_image" src="../storage/app/{{ $data->home_image }}"
                                                alt="preview image" style="max-height: 250px;">
                                        @else
                                            <img id="preview-home_image"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}" alt="default image"
                                                style="max-height: 250px;">
                                        @endif

                                    </section>


                                </div>

                            

                                <header style="margin-top: 70px; margin-bottom: 35px;">
                                    {{ __('Meta Tags for Room Types') }}
                                </header>


                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="description" name="description"
                                                value="{{ $metaTag->description ?? '' }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('Keywords') }}</label>
                                        <label class="input">
                                            <input type="text" id="keywords" name="keywords"
                                                value="{{ $metaTag->keywords ?? '' }}">
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Title') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="og_title" name="og_title"
                                                value="{{ $metaTag->og_title ?? '' }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Type') }} <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="og_type" name="og_type"
                                                value="{{ $metaTag->og_type ?? '' }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Tag') }} <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="og_tag" name="og_tag"
                                                value="{{ $metaTag->og_tag ?? '' }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Url') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="og_url" name="og_url"
                                                value="{{ $metaTag->og_url ?? '' }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Image') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="og_image"
                                                name="og_image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-4">
                                        @if ($metaTag && $metaTag->og_image)
                                            <img id="preview-image-before-upload"
                                                src="../storage/app/{{ $metaTag->og_image }}" alt="preview image"
                                                style="max-height: 250px;">
                                        @else
                                            <img id="preview-image-before-upload"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}" alt="default image"
                                                style="max-height: 250px;">
                                        @endif
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Sitename') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="og_sitename" name="og_sitename"
                                                value="{{ $metaTag->og_sitename ?? '' }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-12" style="width: 100%;">
                                        <label class="label">{{ __('OG Description') }}</label>
                                        <label class="input">
                                            <input type="text" id="og_description" name="og_description"
                                                value="{{ $metaTag->og_description ?? '' }}">
                                        </label>
                                    </section>
                                </div>

                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}>">
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
                //window.ParsleyValidator.setLocale('ta');
                $('#roomtypes-form').parsley();
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


            document.getElementById('home_image').addEventListener('change', function() {
                previewImage(this, 'preview-home_image');
            });
            document.getElementById('og_image').addEventListener('change', function() {
                previewImage(this, 'preview-image-before-upload');
            });
        </script>

        <script>
            $(document).ready(function() {

                // Check initial conditions when the page loads
                checkFields();

                // Event listener to check fields and toggle submit button based on checkbox
                $('input[type="checkbox"]').change(function() {
                    checkFields();
                });

                // Function to check if Home Title or Home Content is empty and toggle submit button and message
                function checkFields() {
                    const homeTitle = $('#home_title').val();
                    const homeContent1 = $('#home_content1').val();
                    const homeContent2 = $('#home_content2').val();
                    const checkbox = $('input[name="checkbox"]');
                    const checkboxWarning = $('#checkbox-warning');
                    const submitButton = $('#button1id');

                    if (checkbox.is(':checked') && (!homeTitle || !homeContent1 || !homeContent2)) {
                        // If checkbox is checked and Home Title or Home Content is empty, show warning and disable submit button
                        checkboxWarning.show();
                        submitButton.prop('disabled', true);
                    } else {
                        // If conditions are met, hide warning and enable submit button
                        checkboxWarning.hide();
                        submitButton.prop('disabled', false);
                    }
                }

                // Event listeners to check on keyup or change
                $('#home_title, #home_content1, #home_content2').on('keyup change', function() {
                    checkFields();
                });
            });
        </script>
    </x-slot>
</x-app-layout>
