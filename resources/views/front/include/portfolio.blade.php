<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <div class="row">
            @if(count($portfolios)>0)
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $portfolio->id ?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url($portfolio->small_image)}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$portfolio->client}}</div>
                                <div class="portfolio-caption-subheading text-muted">{{$portfolio->category}}</div>
                            </div>
                        </div>
                    </div>

                @endforeach

                @endif


        </div>
    </div>
</section>
