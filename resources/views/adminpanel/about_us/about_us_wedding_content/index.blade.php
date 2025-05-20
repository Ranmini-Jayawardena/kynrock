@section('title', 'About Us Wedding Content')
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
                    <h2>{{ __('About Us Wedding Content') }}</h2>
                </header>
                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-about-us-wedding-content') }}" enctype="multipart/form-data"
                            method="post" id="about-us-wedding-content-form" class="smart-form">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Heading 1') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <input type="text" id="title1" name="title1" required
                                                value="{{ $data->title1 }}">
                                        </label>
                                    </section>
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description 1 ') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control" id="title2" name="title2" rows="3" required>{{ $data->title2 }}</textarea>
                                        </label>
                                    </section>

                                </div>
                                <div class="row">
                                    <section class="col col-11" style="width: 100%;">
                                        <label class="label">{{ __('Description 2') }}<span
                                                style=" color: red;">*</span></label>
                                        <label class="input">
                                            <textarea class="form-control summernote" id="description" name="description" rows="3" required>{{ $data->description }}</textarea>
                                        </label>
                                    </section>
                                </div>



                            </fieldset>
                            <footer>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button id="button1id" name="button1id" type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                                {{-- <button type="button" class="btn btn-default" onclick="window.history.back();">
                                    {{ __('Back') }}
                                </button> --}}
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
                $('#about-us-wedding-content-form').parsley();
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

            $('#about-us-wedding-content-form').on('submit', function(e) {
                // Get Summernote HTML content
                var content = $('#description').summernote('code');

                // Create a temporary DOM to manipulate it
                var tempDiv = $('<div>').html(content);

                // Add class to all <p> tags
                tempDiv.find('p').addClass('text-light');

                // Set the updated content back to Summernote
                $('#description').summernote('code', tempDiv.html());
            });
        </script>
    </x-slot>
</x-app-layout>
