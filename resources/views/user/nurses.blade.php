<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Nurses</h1>
        <div class="page-section">
            <div class="container">
                <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

                    @foreach ($nurse as $nurseData)
                    <div class="item">
                        <div class="card-doctor">
                            <div class="header">
                                <img style="height: 100%; width:240px" src="nursesimages/{{ $nurseData->image }}"
                                    alt="ttt">
                                <div class="meta">
                                    <a href="#">
                                        <span class="mai-call"></span>
                                    </a>
                                    <a href="">
                                        <span class="mai-logo-whatsapp"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="text-xl mb-0">
                                    {{ $nurseData->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>