<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <ul class="timeline">
            @if(count($abouts)>0)
                @foreach($abouts as $about)
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url($about->image)}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>{{$about->title1}}</h4>
                                <h4 class="subheading">{{$about->title2}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$about->title2}}</p></div>
                        </div>
                    </li>
                @endforeach

                @endif

        </ul>
    </div>
</section>
