@section('title', 'Gallery Categories')
<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div id="main" role="main">
        <div id="ribbon"></div>
        <div id="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row cms_top_btn_row" style="margin-left:auto;margin-right:auto;">
                        <a href="{{ route('gallery-category') }}">
                            <button
                                class="btn cms_top_btn top_btn_height cms_top_btn_active">{{ __('Add New') }}</button>
                        </a>
                        <a href="{{ route('gallery-list') }}">
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

            <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false"
                data-widget-custombutton="false" role="widget">
                <header>
                    <h2>{{ __('Gallery') }}</h2>
                </header>

                <div>
                    <div class="jarviswidget-editbox"></div>
                    <div class="widget-body no-padding">
                        <form action="{{ route('new-gallery') }}" enctype="multipart/form-data" method="post"
                            id="gallery-category-form" class="smart-form">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <section class="col col-4">
                                        <label class="label">{{ __('Category Name') }}<span
                                                style="color: red;">*</span> </label>
                                        <label class="input">
                                            <input type="text" id="category_name" name="category_name" required maxlength="191">
                                                
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
                                <div id="subcategory-section">
                                    <div class="row subcategory-wrapper">
                                        <section class="col col-4">
                                            <label class="label">{{ __('Subcategory Name') }} </label>
                                            <label class="input">
                                                <input type="text" class="form-control"
                                                    name="subcategories[0][sub_category_name]" maxlength="191" >
                                            </label>
                                        </section>
                                        <section class="col col-2">
                                            <label class="label">{{ __('Order') }} </label>
                                            <label class="input">
                                                <input type="number" class="form-control"
                                                    name="subcategories[0][order]" min="0" max="255" >
                                            </label>
                                        </section>
                                        <section class="col col-2"
                                            style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
                                            <button type="button" class="btn-sm btn-success add-subcategory"
                                                style="width: 70px;">{{ __('Add More') }}</button>
                                        </section>
                                    </div>
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
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            $(function() {
                $('#gallery-category-form').parsley();

                // Preview the selected thumbnail
                $('#thumbnail').change(function() {
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $('#preview-thumbnail-before-upload').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });

            let subcategoryIndex = 1;

            $(document).on('click', '.add-subcategory', function() {
                const newSubcategory = `
<div class="row subcategory-wrapper">
    <section class="col col-4">
        <label class="label">Subcategory Name </label>
        <label class="input">
            <input type="text" class="form-control" maxlength="191" name="subcategories[${subcategoryIndex}][sub_category_name]" >
        </label>
    </section>
    <section class="col col-2">
        <label class="label">Order </label>
        <label class="input">
            <input type="number" class="form-control" name="subcategories[${subcategoryIndex}][order]" min="0" max="255" >
        </label>
    </section>
    <section class="col col-2"style="margin-top: 15px; padding: 10px 20px; font-size: 16px;">
        <button type="button" class="btn-sm btn-danger remove-subcategory" style="width: 70px;">Remove</button>
    </section>
</div>
`;
                subcategoryIndex++;
                $('#subcategory-section').append(newSubcategory);
            });

            $(document).on('click', '.remove-subcategory', function() {
                $(this).closest('.subcategory-wrapper').remove();
            });


            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 5000);
        </script>

    </x-slot>
</x-app-layout>
