<header class="navbar-light navbar-sticky">

    <nav class="navbar navbar-expand-xl">
        <div class="container">

            <a class="navbar-brand" href="/">
                <img class="light-mode-item navbar-brand-item" src="/assets/images/logo.png" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="/assets/images/logo-light.svg" alt="logo">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>


            <div class="navbar-collapse w-100 collapse" id="navbarCollapse">


                <ul class="navbar-nav navbar-nav-scroll mx-auto">


                    @foreach($items as $item)
                        <li class="nav-item"><a class="nav-link" href="{{$item->href}}">{{$item->name}}</a></li>
                    @endforeach

                </ul>

                <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                    <div class="nav-item w-100">
                        <form class="position-relative" method="GET" action="/courses">
                            <input class="form-control pe-5 bg-transparent" name="q" type="search"
                                   placeholder="{{__('word.search')}}"
                                   aria-label="Search">
                            <button
                                class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                                type="submit"><i class="fas fa-search fs-6 "></i></button>
                        </form>
                    </div>
                </div>

            </div>


        @auth()
            @include('components.partials.logged_user')
        @else
            @include('components.partials.quest_user')
        @endauth


        </div>
    </nav>

</header>
