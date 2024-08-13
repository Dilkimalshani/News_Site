<div>
    <!-- Main News Slider Start -->
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    @foreach ($slider_news as $slider_new)
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="{{asset('asset/img/img2.jpg')}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""></a>
                                <a class="text-white" href="">{{$slider_new->created_at}}</a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">{{$slider_new->title}}..</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Add space between slides -->
    <div class="my-4"></div>

    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2"
                            style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach ($breaking_news as $breaking_new)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"
                                    href="">{{$breaking_new->title}}</a></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach ($featured_news as $featured_new)

                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{asset('asset/img/img.jpg')}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""></a>
                            <a class="text-white" href=""><small>{{$featured_new->created_at}}</small></a>

                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">{{$featured_new->title}}..</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        @foreach($popular_news as $popular_new)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="{{asset('asset/img/img3.jpg')}}" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href=""></a>
                                        <a class="text-body" href=""><small>{{$popular_new->created_at}}</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                        href="single.component.blade.php">{{$popular_new->title}}..</a>
                                    <p class="m-0">{{$popular_new->short_desc}}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="{{asset('asset/img/img3.jpg')}}" width="25"
                                            height="25" alt="">
                                        <small>Dilki</small>
                                    </div>
                                    <div class="d-flex align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                @livewire('right-component')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

</div>
