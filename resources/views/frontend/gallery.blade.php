@include('frontend.includes.header')

<div class="position-relative container-fluid inner_slider p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active inner_main_img"
                style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }});">
                <h1 class="text-center bottom-0 position-absolute w-100 text-light">{{ strtoupper($topBanner->heading) }}
                </h1>
            </div>
        </div>
    </div>
</div>

<!-- main slider end -->

<!-- =================================================== -->
<!-- =================================================== -->

<!-- description start -->
<div class="container-fluid half_bg">
    <div class="container sec_padding" style="padding-bottom: 150px;">
        <div class="row justify-content-center">
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                <h2 data-aos="fade-up">
                    A Glimpse Into Your Perfect Stay
                </h2>

                <div class="des_div">
                    <p class="mb-2">
                        Get a sneak peek of what’s waiting for you at Goodwood Airport Hotel. Our gallery highlights the
                        inviting atmosphere, cozy rooms, and elegant spaces that make every stay enjoyable. From serene
                        getaways to memorable events, these images give you a glimpse of what you can expect during your
                        visit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- description end -->

<div class="clearfix"></div>

<!-- =================================================== -->

<!-- gallery start -->

<div class="container" style="margin-top: -120px;">
    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="nav nav-tabs gallery_tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">ALL</button>
                </li>
                @foreach ($categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="cat{{ $category->id }}-tab" data-bs-toggle="tab"
                            data-bs-target="#cat{{ $category->id }}" type="button" role="tab"
                            aria-controls="cat{{ $category->id }}"
                            aria-selected="false">{{ strtoupper($category->category_name) }}</button>
                    </li>
                @endforeach

            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        @foreach ($allImages as $image)
                            <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <a href="{{ asset('storage/app/' . $image->image_name) }}" data-fancybox="images"
                                    class="w-100">
                                    <div class="img_bg gallery_img_div"
                                        style="background-image: url('{{ asset('storage/app/' . $image->image_name) }}');">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                @foreach ($categories as $category)
                    <!-- =======================-->
                    <div class="tab-pane fade" id="cat{{ $category->id }}" role="tabpanel"
                        aria-labelledby="cat{{ $category->id }}-tab">

                        @if ($category->subCategories->count() > 0)
                        <ul class="nav nav-tabs gallery_sub_tabs mb-3" id="myTab-{{ $category->id }}" role="tablist">
                            @foreach ($category->subCategories as $index => $subCategory)
                                <li class="nav-item" role="presentation">
                                    @if ($index == 0)
                                        <button class="nav-link active" id="subcat{{ $subCategory->id }}-tab"
                                            data-bs-toggle="tab" data-bs-target="#subcat{{ $subCategory->id }}"
                                            type="button" role="tab" aria-controls="subcat{{ $subCategory->id }}"
                                            aria-selected="true">{{ $subCategory->sub_category_name }}</button>
                                    @else
                                        <button class="nav-link" id="subcat{{ $subCategory->id }}-tab"
                                            data-bs-toggle="tab" data-bs-target="#subcat{{ $subCategory->id }}"
                                            type="button" role="tab" aria-controls="subcat{{ $subCategory->id }}"
                                            aria-selected="false">{{ $subCategory->sub_category_name }}</button>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="myTabContent-{{ $category->id }}">
                            @foreach ($category->subCategories as $key => $subCategory)
                                @if ($key == 0)
                                    <div class="tab-pane fade show active" id="subcat{{ $subCategory->id }}"
                                        role="tabpanel" aria-labelledby="subcat{{ $subCategory->id }}-tab">
                                        <div class="row">
                                            @foreach ($subCategory->images as $image)
                                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <a href="{{ asset('storage/app/' . $image->image_name) }}"
                                                        data-fancybox="images" class="w-100">
                                                        <div class="img_bg gallery_img_div"
                                                            style="background-image: url('{{ asset('storage/app/' . $image->image_name) }}');">
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <div class="tab-pane fade" id="subcat{{ $subCategory->id }}" role="tabpanel"
                                        aria-labelledby="subcat{{ $subCategory->id }}-tab">
                                        <div class="row">
                                            @foreach ($subCategory->images as $image)
                                                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                                    <a href="{{ asset('storage/app/' . $image->image_name) }}"
                                                        data-fancybox="images" class="w-100">
                                                        <div class="img_bg gallery_img_div"
                                                            style="background-image: url('{{ asset('storage/app/' . $image->image_name) }}');">
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        @else
                            <div class="row">
                                @foreach ($category->images as $image)
                                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                        <a href="{{ asset('storage/app/' . $image->image_name) }}"
                                            data-fancybox="images" class="w-100">
                                            <div class="img_bg gallery_img_div"
                                                style="background-image: url('{{ asset('storage/app/' . $image->image_name) }}');">
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('frontend.includes.footer')
<!-- gallery end -->
