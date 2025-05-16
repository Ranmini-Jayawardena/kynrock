@section('title', 'Wedding Features')
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
                        <a href="{{ route('wedding-features') }}">
                            <button
                                class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>
                        <a href="{{ route('wedding-features-list') }}">
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
                    <h2>{{ __('Wedding Features') }}</h2>
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
                        <form action="{{ route('new-wedding-features') }}" enctype="multipart/form-data"
                            method="post" id="wedding-features-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Feature Name') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="feature_name" name="feature_name" required
                                                value="">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <label class="label">{{ __('Order') }}<span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type ="number" id="order" name="order" value="" required>
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
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control " id="description" name="description" rows="3" required></textarea>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-3">
                                        <label class="label">{{ __('Icon') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="icon"
                                                name="icon" style="overflow: hidden;" required>
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-image-before-upload"
                                            src="{{ asset('public/back/img/whitebg.jpg') }}" alt="preview image"
                                            style="max-height: 250px;">
                                    </section>
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
                $('#wedding-features-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);
        </script>

        <script type="text/javascript">
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
         <script type="text/javascript">
            $(document).ready(function(e) {
                $('#icon').change(function() {
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
