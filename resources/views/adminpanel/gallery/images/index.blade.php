@section('title', 'Gallery Images')
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
                            <button
                                class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>
                        <a href="{{ route('images-list') }}">
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

            <div class="jarviswidget" id="wid-id-1">
                <header>
                    <h2>{{ __('Images') }}</h2>
                </header>

                <div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-images') }}" enctype="multipart/form-data" method="post"
                            id="image-form" class="smart-form">
                            @csrf
                            <fieldset>

                                <div class="row">
                                    <!-- Category Dropdown -->
                                    <section class="col col-4">
                                        <label class="label">Category</label>
                                        <label class="select">
                                            <select id="category_id" name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <i></i>
                                        </label>
                                        @error('category_id')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </section>

                                    <!-- Subcategory Dropdown -->
                                    <section class="col col-4">
                                        <label class="label">Subcategory</label>
                                        <label class="select">
                                            <select id="subcategory_id" name="subcategory_id" class="form-control">
                                                <option value="">Select Subcategory</option>
                                            </select>
                                            <i></i>
                                        </label>
                                        @error('subcategory_id')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                        <!-- Error message container for duplicate category-subcategory combination -->
                                        <div id="category-subcategory-error" class="text-danger mt-1"></div>
                                    </section>


                                </div>
                                <!-- Image Upload Section -->
                                <div id="image-upload-section">
                                    <div class="row image-upload-wrapper">
                                        <section class="col col-4">
                                            <label class="label">{{ __('Image') }} (1920 x 1080) <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="file" class="form-control form-input image-input"
                                                    name="images[][image_name]" required>
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} <span
                                                    style="color: red;">*</span></label>
                                            <label class="input">
                                                <input type="number" class="form-control form-input"
                                                    name="images[][order]" min="0" required>
                                            </label>
                                        </section>
                                        <section class="col col-2"
                                            style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                            <button type="button" class="btn-sm btn-success add-image"
                                                style="width: 70px;">{{ __('Add More') }}</button>
                                        </section>
                                    </div>
                                </div>
                            </fieldset>

                            <footer>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default"
                                    onclick="window.history.back();">Back</button>
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
                    let imageIndex = 1;

                    $(document).on('click', '.add-image', function() {
                        const newInput = `
                        <div class="row image-upload-wrapper">
                            <section class="col col-4">
                                <label class="label">Image (1920 x 1080) <span style="color: red;">*</span></label>
                                <label class="input">
                                    <input type="file" name="images[${imageIndex}][image_name]" class="form-control" required>
                                </label>
                            </section>

                            <section class="col col-2">
                                <label class="label">Order <span style="color: red;">*</span></label>
                                <label class="input">
                                    <input type="number" name="images[${imageIndex}][order]" class="form-control" min="0" required>
                                </label>
                            </section>

                            <section class="col col-2" style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                <button type="button" class="btn-sm btn-danger remove-image" style="width: 70px;">Remove</button>
                            </section>
                        </div>`;
                        $('#image-upload-section').append(newInput);
                        imageIndex++;
                    });

                    $(document).on('click', '.remove-image', function() {
                        $(this).closest('.image-upload-wrapper').remove();
                    });

                    $(document).ready(function() {
                        $('#category_id').change(function() {
                            let categoryId = $(this).val();

                            if (categoryId) {
                                $.ajax({
                                    url: "{{ route('get-subcategories') }}",
                                    type: "GET",
                                    data: {
                                        category_id: categoryId
                                    },
                                    success: function(data) {
                                        $('#subcategory_id').empty();

                                        if (data.length > 0) {
                                            $('#subcategory_id').prop('disabled',
                                                false); // Enable dropdown
                                            $('#subcategory_id').append(
                                                '<option value="">Select Subcategory</option>'
                                            );

                                            $.each(data, function(key, value) {
                                                $('#subcategory_id').append(
                                                    '<option value="' + value.id +
                                                    '">' + value.sub_category_name +
                                                    '</option>'
                                                );
                                            });
                                        } else {
                                            $('#subcategory_id').append(
                                                '<option value="">No Subcategories</option>'
                                            );
                                            $('#subcategory_id').prop('disabled',
                                                true); // Disable dropdown if none
                                            $('#subcategory_id').val('');
                                        }

                                        // Clear any previous error
                                        $('#category-subcategory-error').text('');
                                        $('button[type="submit"]').prop('disabled',
                                            false); // Reset submit
                                    }
                                });
                            } else {
                                $('#subcategory_id').empty().append(
                                    '<option value="">Select Subcategory</option>');
                                $('#subcategory_id').prop('disabled', true);
                            }
                        });

                    });

                    $(document).ready(function() {
                        let imageIndex = 1;

                        // Disable submit button by default
                        $('button[type="submit"]').prop('disabled', true);

                        // Check for existing category-subcategory combination
                        function checkCategorySubcategoryCombination(categoryId, subcategoryId) {
                            if (categoryId && subcategoryId && !$('#subcategory_id').prop('disabled')) {
                                $.ajax({
                                    url: "{{ route('check-category-subcategory-combination') }}",
                                    type: "GET",
                                    data: {
                                        category_id: categoryId,
                                        subcategory_id: subcategoryId
                                    },
                                    success: function(response) {
                                        if (response.exists) {
                                            $('#category-subcategory-error').text(
                                                'Already images are uploaded for this subcategory. If want to update go to edit page.'
                                            );
                                            $('button[type="submit"]').prop('disabled', true);
                                        } else {
                                            $('#category-subcategory-error').text('');
                                            $('button[type="submit"]').prop('disabled', false);
                                        }
                                    }
                                });
                            } else {
                                $('#category-subcategory-error').text('');
                                $('button[type="submit"]').prop('disabled', false);
                            }
                        }

                
                
            

            // Trigger when category or subcategory changes
            $('#category_id, #subcategory_id').change(function() {
            const categoryId = $('#category_id').val();
            const subcategoryId = $('#subcategory_id').val();

            checkCategorySubcategoryCombination(categoryId, subcategoryId);
            });
            });

            setTimeout(function() {
            $('.alert').fadeOut('fast');
            }, 5000);
            });
        </script>
    </x-slot>
</x-app-layout>
