@section('title', 'Edit Images ')

<x-app-layout>
    <x-slot name="header"></x-slot>

    <div id="main" role="main">
        <!-- RIBBON -->
        <div id="ribbon"></div>
        <!-- END RIBBON -->
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('images') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('images-list') }}">
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
                    <h2>{{ __('images Category') }}</h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox"></div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-images', $encryptedId) }}" method="POST"
                            enctype="multipart/form-data" class="smart-form" id="image-form">
                            @csrf
                            @method('PUT')

                            <fieldset>
                                <div class="row">
                                    <!-- Category -->
                                    <section class="col col-4">
                                        <label class="label">Category</label>
                                        <label class="select">
                                            <select name="category_id" id="category_id" class="form-control" disabled>
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $category->id == $firstImage->category_id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select><i></i>
                                        </label>
                                    </section>


                                    <!-- Subcategory -->
                                    <section class="col col-4">
                                        <label class="label">Subcategory</label>
                                        <label class="select">
                                            <select name="subcategory_id" id="subcategory_id" class="form-control"
                                                disabled>
                                                <option value="">Select Subcategory</option>
                                                @foreach ($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}"
                                                        {{ $subcategory->id == $firstImage->subcategory_id ? 'selected' : '' }}>
                                                        {{ $subcategory->sub_category_name }}
                                                    </option>
                                                @endforeach
                                            </select><i></i>
                                        </label>
                                    </section>
                                </div>

                                <div id="image-upload-section">
                                    @foreach ($images as $index => $image)
                                        <div class="row image-upload-wrapper">
                                            <input type="hidden" name="images[{{ $index }}][id]"
                                                value="{{ $image->id }}">

                                            <section class="col col-4">
                                                <label class="label">Current Image</label>
                                                <img src="{{ asset('storage/app/' . $image->image_name) }}"
                                                    alt="" class="img-responsive" width="150">
                                            </section>

                                            <section class="col col-2">
                                                <label class="label">Order <span style="color: red;">*</span></label>
                                                <label class="input">
                                                    <input type="number" name="images[{{ $index }}][order]"
                                                        value="{{ $image->order ?? 0 }}" class="form-control"
                                                        min="0" max="255" required>
                                                </label>
                                            </section>

                                            @if ($index !== 0)
                                                <section class="col col-2"
                                                    style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                                    <button type="button"
                                                        class="btn-sm btn-danger remove-image">Remove</button>
                                                </section>
                                            @endif
                                        </div>
                                    @endforeach



                                </div>

                                <div class="row">

                                    <section class="col col-2"
                                        style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                        <button type="button" class="btn-sm btn-success" id="add-image-row">Add More
                                            Images</button>
                                    </section>
                                </div>
                            </fieldset>
                            <input type="hidden" name="category_id" value="{{ $firstImage->category_id }}">
                            <input type="hidden" name="subcategory_id" value="{{ $firstImage->subcategory_id }}">
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
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(function() {
                $('#image-form').parsley();
            });

            let imageIndex = {{ count($images) }};
            // Add new image input row
            document.getElementById('add-image-row').addEventListener('click', function() {
                const wrapper = document.createElement('div');
                wrapper.classList.add('row', 'image-upload-wrapper');
                wrapper.innerHTML = `
        <input type="hidden" name="images[${imageIndex}][id]" value="">
    <section class="col col-4">
        <label class="label">New Image <span style="color: red;">*</span></label>
        <label class="input">
            <input type="file" name="images[${imageIndex}][image_name]" class="form-control" required>
        </label>
    </section>
    <section class="col col-2">
        <label class="label">Order <span style="color: red;">*</span></label>
        <label class="input">
            <input type="number" name="images[${imageIndex}][order]" class="form-control" min="0" max="255" required>
        </label>
    </section>
    <section class="col col-2" style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
        <button type="button" class="btn-sm btn-danger remove-image" style="width: 70px;">Remove</button>
    </section>
`;

                document.getElementById('image-upload-section').appendChild(wrapper);
                imageIndex++;
            });

            // Remove image row
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-image')) {
                    e.target.closest('.image-upload-wrapper').remove();
                }
            });

            setTimeout(() => $('.alert').fadeOut(), 5000);
        </script>
    </x-slot>
</x-app-layout>
