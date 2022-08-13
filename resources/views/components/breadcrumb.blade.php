<section class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-dark p-4 text-center rounded-3">
                    <h1 class="text-white m-0">{{$section['h1']}}</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
                                @foreach($section['items'] as $item)
                                    <li class="breadcrumb-item @if($item['active']) active @endif"><a
                                            href="{{$item['href']}}">{{$item['title']}}</a></li>
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


