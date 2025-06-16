  @include('frontend.includes.header')

  <div class="position-relative container-fluid inner_slider p-0 mb-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active inner_main_img"
                  style="background-image: linear-gradient(to bottom, rgb(0 0 0 / 30%), rgb(0 0 0 / 30%)), url({{ asset('storage/app/' . $topBanner->banner_image) }})">
                  <h1 class="text-center bottom-0 position-absolute w-100 text-light">
                      {{ strtoupper($topBanner->heading) }}</h1>
              </div>
          </div>
      </div>
  </div>

  <!-- main slider end -->

  <!-- =================================================== -->
  <!-- =================================================== -->

  <!-- List start -->

  <div class="container">
      <div class="row">
          @foreach ($locations as $location)
              <div class="col-8 mb-5">
                  <div id="carouselExampleControls{{ $location->id }}"
                      class="carousel slide detail_slide location_slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                          @foreach ($location->images as $index => $image)
                              @php
                                  $isActive = $index === 0;
                              @endphp
                              @if ($isActive)
                                  <div class="carousel-item active"
                                      style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                  </div>
                              @else
                                  <div class="carousel-item"
                                      style="background-image: url({{ asset('storage/app/' . $image->image_name) }});">
                                  </div>
                              @endif
                          @endforeach
                      </div>

                      <div class="carousel-caption location_text">
                          <div class="room-slider__img">
                              <h2>{{ $location->location_name }}</h2>

                              <div class="read-more long_read_more" style="--line-clamp: 7">
                                  <input id="read-more-checkbox{{ $location->id }}" type="checkbox"
                                      class="read-more__checkbox" aria-hidden="true">
                                  <div class="read-more__text mb-2">{!! $location->description !!}
                                  </div>
                                  
                                  <label for="read-more-checkbox{{ $location->id }}" class="read-more__label"
                                      data-read-more="Read more" data-read-less="See less" aria-hidden="true"></label>
                              </div>

                          </div>
                      </div>
                    @if(count($location->images) > 1)
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{ $location->id }}"
                          data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{ $location->id }}"
                          data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                    @endif
                  </div>
              </div>
          @endforeach
      </div>
  </div>

  <!-- List end -->

  <div class="clearfix"></div>

  <!-- ================================================== -->
  <!-- ================================================== -->
  <!-- ================================================== -->
  @include('frontend.includes.footer')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".read-more").forEach(function (readMoreBlock) {
            const text = readMoreBlock.querySelector(".read-more__text");
            const label = readMoreBlock.querySelector(".read-more__label");

            if (text.scrollHeight <= text.clientHeight) {
                label.style.display = "none"; // Hide 'Read more' if not overflowing
            }
        });
    });
</script>