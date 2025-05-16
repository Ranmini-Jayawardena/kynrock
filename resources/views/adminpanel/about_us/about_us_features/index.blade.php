@section('title', 'About Us Features')
<x-app-layout>
    <x-slot name="header">
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
                        <a href="{{ route('about-us-features') }}">
                            <button
                                class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('about-us-features-list') }}">
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
                    <h2>{{ __('About Us Features') }}</h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                    </div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-about-us-features') }}" enctype="multipart/form-data" method="post"
                            id="about-us-features-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Feature Name') }}<span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title" name="title" required value="">
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __('Order') }}<span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type ="number" id="order" name="order" value="" required>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                        </label>
                                    </section>
                                </div>

                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image"
                                                name="image" style="overflow: hidden;" required>
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        <img id="preview-image-before-upload"
                                            src="{{ asset('public/back/img/whitebg.jpg') }}" alt="preview image"
                                            style="max-height: 250px;">
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
                $('#about-us-features-form').parsley();
            });

            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);


            $(document).ready(function() {
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
                document.getElementById('image').addEventListener('change', function() {
                    previewImage(this, 'preview-image-before-upload');
                });
            });
        </script>
    </x-slot>
</x-app-layout>
