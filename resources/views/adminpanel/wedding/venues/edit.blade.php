@section('title', 'Wedding Venues Edit')
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

    <div id="main" role="main">
        <!-- RIBBON -->
        <div id="ribbon">
        </div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('wedding-venue') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('wedding-venue-list') }}">
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
                    <h2>{{ __('Wedding Venues Edit') }}</h2>
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
                        <form action="{{ route('save-wedding-venue') }}" enctype="multipart/form-data" method="post"
                            id="wedding-venue-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Subcategory') }} <span
                                                style="color: red;">*</span></label>
                                        <label class="select">
                                            <select name="sub_category_id" required>
                                                <option value="">{{ __('Select Subcategory') }}</option>
                                                @foreach ($subCategories as $subCategory)
                                                    <option value="{{ $subCategory->id }}"
                                                        {{ isset($data) && $data->sub_category_id == $subCategory->id ? 'selected' : '' }}>
                                                        {{ $subCategory->sub_category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <i></i>
                                        </label>
                                    </section>

                                    <section class="col col-4">
                                        <label class="label">{{ __('Order') }}<span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type ="number" id="order" name="order" max="255"
                                                value="{{ $data->order }}" required>
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
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Icon') }} (512 x 512) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="icon"
                                                name="icon" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->icon)
                                            <img id="preview-image-before-upload"
                                                src="../storage/app/{{ $data->icon }}" alt="preview image"
                                                style="max-height: 250px;">
                                        @else
                                            <img id="preview-image-before-upload"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}" alt="default image"
                                                style="max-height: 250px;">
                                        @endif
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
                $('#wedding-venue-form').parsley();

                $('#icon').on('change', function() {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        $('#preview-image-before-upload').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });
           
        </script>

        <script>
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
