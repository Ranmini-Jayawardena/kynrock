@section('title', 'Gallery Images')
<x-app-layout>
    <x-slot name="header"></x-slot>

    <div id="main" role="main">
        <div id="ribbon"></div>
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('images') }}">
                            <button class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>
                        <a href="{{ route('roomtypeimages-list') }}">
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
                    <h2>{{ __('Images') }}</h2>
                </header>

                <div>
                    <div class="jarviswidget-editbox"></div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-roomtypeimages') }}" enctype="multipart/form-data" method="post" id="image-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">Room Type</label>
                                        <label class="select">
                                            <select name="roomtypes_id" required>
                                                <option value="">Select Room Type</option>
                                                @foreach($roomtypes as $room_types)
                                                    <option value="{{ $room_types->id }}">{{ $room_types->room_name }}</option>
                                                @endforeach
                                            </select>
                                            <i></i>
                                        </label>
                                    </section>
                                    
                                        
                                </div>
                                
                                <div id="image-upload-section">
                                    <div class="row image-upload-wrapper">
                                        <section class="col col-4">
                                            <label class="label">{{ __('Image') }} (1200 x 800) <span style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="file" class="form-control form-input image-input" name="images[][image_name]" required>
                                            </label>
                                        </section>
                                        
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} <span style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="number" class="form-control form-input" name="images[][order]" min="0" required>
                                            </label>
                                        </section>
                                        <section class="col col-2" style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                            <button type="button" class="btn-sm btn-success add-image" style="width:70px">{{ __('Add More') }}</button>
                                        </section>
                                    </div>
                                </div>
                            
                            </fieldset>
                            <footer>
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                <button type="button" class="btn btn-default" onclick="window.history.back();">{{ __('Back') }}</button>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(function(){
                $('#image-form').parsley();

                // Add more image upload fields
                $(document).on('click', '.add-image', function() {
                    var imageUploadSection = $('#image-upload-section');
                    var newImageUploadWrapper = `
                        <div class="row image-upload-wrapper">
                            <section class="col col-4">
                                <label class="label">{{ __('Image') }} (1200 x 800) <span style="color: red;">*</span></label>
                                <label class="input">
                                    <input type="file" class="form-control form-input image-input" name="images[][image_name]" required>
                                </label>
                            </section>
                            <section class="col col-2">
                                <label class="label">{{ __('Order') }} <span style="color: red;">*</span></label>
                                <label class="input">
                                    <input type="number" class="form-control form-input" name="images[][order]" min="0" required>
                                </label>
                            </section>
                            <section class="col col-2" style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                <button type="button" class="btn-sm btn-danger remove-image" style="width:70px">{{ __('Remove') }}</button>
                            </section>
                        </div>`;
                    imageUploadSection.append(newImageUploadWrapper);
                });

                // Remove image upload field
                $(document).on('click', '.remove-image', function() {
                    $(this).closest('.image-upload-wrapper').remove();
                });

                setTimeout(function() {
                    $('.alert').fadeOut('fast');
                }, 5000);
            });
        </script>
    </x-slot>
</x-app-layout>
