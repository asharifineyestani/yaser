<section class="position-relative">

    <!-- Svg image decoration -->
    <div class="position-absolute bottom-0 end-0">
        <img src="assets/images/element/30.svg" class="h-300px" alt="">
    </div>

    <div class="container">
        <div class="row g-4">

            <!-- Title -->
            <div class="col-sm-6 col-lg-4">
                <h2>{{$section['h1']}}</h2>
                <p class="mb-0">{{$section['description']}}</p>
            </div>

            <!-- Feature item -->

            @foreach($section['items'] as $item)
            <div class="col-sm-6 col-lg-4">
                <div class="card card-body bg-light p-4 h-100">
                    <!-- Svg image decoration -->
                    <div class="avatar avatar-lg mb-3">
                        <img class="avatar-img rounded-circle" src="{{$item['avatar']['href']}}" alt="avatar">
                    </div>
                    <h5>{{$item['title']}}</h5>
                    <p class="mb-0">{{$item['description']}}</p>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
