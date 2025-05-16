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
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('about-us-features-list') }}">
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
                    <h2>{{ __('About Us Features Edit') }}</h2>
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
                        <form action="{{ route('save-about-us-features') }}" enctype="multipart/form-data"
                            method="post" id="about-us-features-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>

                                <div class="row">

                                    <section class="col col-4">
                                        <label class="label">{{ __('Feature Name') }} <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title" name="title"
                                                value="{{ $data->title }}"required>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">{{ __('Order') }}<span style=" color: red;">*</span>
                                        </label>
                                        <label class="input">
                                            <input type ="number" id="order" name="order"
                                                value="{{ $data->order }}" required>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description') }}<span
                                                style="color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $data->description }}</textarea>
                                        </label>
                                    </section>
                                </div>
                                <div class="row">
                                    <section class="col col-2">
                                        <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="file" class="form-control form-input" id="image"
                                                name="image" style="overflow: hidden;">
                                        </label>
                                    </section>
                                    <section class="col col-2">
                                        @if ($data->image)
                                            <img id="preview-image-before-upload"
                                                src="../storage/app/{{ $data->image }}" alt="preview image"
                                                style="max-height: 250px;">
                                        @else
                                            <img id="preview-image-before-upload"
                                                src="{{ asset('public/back/img/whitebg.jpg') }}" alt="default image"
                                                style="max-height: 250px;">
                                        @endif
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
        <script>
            $(function() {
                $('#main-slider-form').parsley();

                $('#image').on('change', function() {
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
        </script>
    </x-slot>
</x-app-layout>
