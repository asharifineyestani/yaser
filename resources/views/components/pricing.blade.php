<section class="py-5 price-wrap">
    <div class="container">
        <div class="row g-4 position-relative mb-4">
            <!-- SVG decoration -->
            <figure class="position-absolute top-0 start-0 d-none d-sm-block">
                <svg width="22px" height="22px" viewBox="0 0 22 22">
                    <polygon class="fill-purple"
                             points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                </svg>
            </figure>

            <!-- Title and Search -->
            <div class="col-lg-10 mx-auto text-center position-relative">
                <!-- SVG decoration -->
                <figure class="position-absolute top-50 end-0 translate-middle-y d-none d-md-block">
                    <svg width="27px" height="27px">
                        <path class="fill-orange"
                              d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
                    </svg>
                </figure>
                <!-- Title -->
                <h1>{{$item['h1']}}</h1>
                <p class="mb-4 pb-1">{{$item['description']}}</p>

                <!-- Switch START -->
                <form class="d-flex align-items-center justify-content-center">
                    <!-- Label -->
                    <span class="h6 mb-0 fw-bold">ماهانه</span>
                    <!-- Switch -->
                    <div class="form-check form-switch form-check-lg mx-3 mb-0">
                        <input class="form-check-input mt-0 price-toggle" type="checkbox" id="flexSwitchCheckDefault">
                    </div>
                    <!-- Label -->
                    <div class="position-relative">
                        <span class="h6 mb-0 fw-bold">سالانه</span>
                        <span
                            class="badge bg-danger bg-opacity-10 text-danger ms-1 position-absolute top-0 start-100 translate-middle mt-n2 ms-2 ms-md-5">{{$item['discount_text']}}</span>
                    </div>
                </form>
                <!-- Switch END -->
            </div>
        </div>
        <!-- Pricing START -->
        <div class="row g-4">

            @foreach($item['items'] as $item)
                <div class="col-md-6 col-xl-4">
                    <div class="card border rounded-3 p-2 p-sm-4 h-100">
                        <!-- Card Header -->
                        <div class="card-header p-0">
                            <!-- Price and Info -->
                            <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded-2">
                                <!-- Info -->
                                <div>
                                    <h5 class="mb-0">{{$item['title']}}</h5>
                                    <div class="badge {{$item['badge']['class']}} mb-0 rounded-pill">{{$item['badge']['text']}}</div>
                                </div>
                                <!-- Price -->
                                <div>
                                    <h4 class="text-success mb-0 plan-price" data-monthly-price="{{$item['price_month']}}"
                                        data-annual-price="{{$item['price_year']}}">{{$item['price_month']}}</h4>
                                    <p class="small mb-0">{{$item['price_description']}}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Divider -->
                        <div class="position-relative my-3 text-center">
                            <hr>
                            <p class="small position-absolute top-50 start-50 translate-middle bg-body px-3">توضیحات
                                پلن</p>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body pt-0">
                            <ul class="list-unstyled mt-2 mb-0">
                                @foreach($item['attributes'] as $attribute)

                                        <li class="mb-3 h6 fw-light"><i
                                                class="bi  @if($attribute['include'])bi-patch-check-fill text-success  @else bi-x-octagon-fill text-danger  @endif me-2"></i>{{$attribute['title']}}
                                        </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- Card Footer -->
                        <div class="card-footer text-center d-grid pb-0">
                            <a href="{{$item['link']['href']}}" type="button" class="btn btn-light mb-0">{{$item['link']['title']}}</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
