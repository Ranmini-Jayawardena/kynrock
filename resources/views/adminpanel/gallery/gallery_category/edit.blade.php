@section('title', 'Edit Gallery ')

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
                        <a href="{{ route('gallery-category') }}">
                            <button class="btn cms_top_btn top_btn_height ">{{ __('Add New') }}</button>
                        </a>

                        <a href="{{ route('gallery-list') }}">
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
                    <h2>{{ __('Gallery Category') }}</h2>
                </header>
                <!-- widget div-->
                <div>
                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox"></div>
                    <!-- end widget edit box -->
                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        <form action="{{ route('save-gallery') }}" enctype="multipart/form-data" method="post"
                            id="gallery-form" class="smart-form">
                            @csrf
                            @method('PUT')

                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">Category Name <span style="color:red">*</span></label>
                                        <label class="input">
                                            <input type="text" name="category_name"
                                                value="{{ $data->category_name }}" required>
                                        </label>
                                    </section>
                                    <section class="col col-4">
                                        <label class="label">Status</label>
                                        <label class="select">
                                            <select name="status" required>
                                                <option value="Y" {{ $data->status == 'Y' ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="N" {{ $data->status == 'N' ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                            <i></i>
                                        </label>
                                    </section>
                                </div>

                                <div id="subcategory-section">
                                    @foreach ($subcategories as $index => $sub)
                                        <div class="row subcategory-wrapper">
                                            <section class="col col-4">
                                                <label class="label">Subcategory Name <span
                                                        style="color:red">*</span></label>
                                                <label class="input">
                                                    <input type="text" class="form-control"
                                                        name="subcategories[{{ $index }}][sub_category_name]"
                                                        value="{{ $sub->sub_category_name }}" required>
                                                    <input type="hidden" name="subcategories[{{ $index }}][id]"
                                                        value="{{ $sub->id }}">
                                                </label>
                                            </section>
                                            <section class="col col-2">
                                                <label class="label">Order <span style="color:red">*</span></label>
                                                <label class="input">
                                                    <input type="number" class="form-control"
                                                        name="subcategories[{{ $index }}][order]"
                                                        value="{{ $sub->order }}" min="0" required>
                                                </label>
                                            </section>
                                            @if ($index === 0)
                                                <section class="col col-2"
                                                    style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                                    <button type="button" class="btn-sm btn-success add-subcategory"
                                                        style="width: 70px;">Add More</button>
                                                </section>
                                            @else
                                                <section class="col col-2"
                                                    style="margin-top: 15px; padding: 10px 20px; font-size: 16px; ">
                                                    <button type="button" class="btn-sm btn-danger remove-subcategory"
                                                        style="width: 70px;">Remove</button>
                                                </section>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </fieldset>

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
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            $(function() {
                $('#gallery-form').parsley();
            });

            let subcategoryIndex = {{ count($subcategories) }};

            $(document).on('click', '.add-subcategory', function() {
                const newSubcategory = `
                <div class="row subcategory-wrapper">
                    <section class="col col-4">
                        <label class="label">Subcategory Name <span style="color:red">*</span></label>
                        <label class="input">
                            <input type="text" class="form-control" name="subcategories[${subcategoryIndex}][sub_category_name]" required>
                        </label>
                    </section>
                    <section class="col col-2">
                        <label class="label">Order <span style="color:red">*</span></label>
                        <label class="input">
                            <input type="number" class="form-control" name="subcategories[${subcategoryIndex}][order]" min="0" required>
                        </label>
                    </section>
                    <section class="col col-2"style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                        <button type="button" class="btn-sm btn-danger remove-subcategory" style="width: 70px;">Remove</button>
                    </section>
                </div>`;
                subcategoryIndex++;
                $('#subcategory-section').append(newSubcategory);
            });

            $(document).on('click', '.remove-subcategory', function() {
                $(this).closest('.subcategory-wrapper').remove();
            });

            setTimeout(() => $('.alert').fadeOut(), 5000);
        </script>
    </x-slot>
</x-app-layout>
