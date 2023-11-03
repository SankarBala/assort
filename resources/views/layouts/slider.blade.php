  <!--Swiper-->
  <section>
      <div class="swiper-container swiper-slider swiper-slider-1 pt-2">
          <div class="swiper-wrapper">
              @foreach ($project_types->find(1)->projects()->where('status', 1)->take(3)->get() as $project)
                  <div class="swiper-slide" data-slide-bg="{{ asset($project->photo) }}">
                      <div class="swiper-slide-caption section-xs">
                          <div class="container">
                              <div class="swiper-caption-wrap" data-caption-animate="fadeInDown">
                                  <p class="h3" data-caption-animate="fadeIn" data-caption-delay="800">
                                      {{ $project->name }}</p>
                                  <hr data-caption-animate="fadeIn" data-caption-delay="800">
                                  <p class="d-none d-md-block" data-caption-animate="fadeIn" data-caption-delay="800">
                                      {{ $project->address }}</p>
                                  {{-- <div class="price text-ubold" data-caption-animate="fadeIn" data-caption-delay="800">
                                      $309.00<span>/day</span></div><a class="btn btn-sm btn-sushi"
                                      href="property-catalog-single.html" data-caption-animate="fadeIn"
                                      data-caption-delay="800">book now</a> --}}
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
     
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
      </div>
  </section>
