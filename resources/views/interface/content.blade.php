  <!-- About-->
  <section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">We've got what you need!</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">everything you need to get your new website up and running in no time</p>
                <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
            </div>
        </div>
    </div>
</section>
  
  <!-- Services-->
  <section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider"/>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Sturdy Themes</h3>
                    <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Up to Date</h3>
                    <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Ready to Publish</h3>
                    <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Made with Love</h3>
                    <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
           

            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="{{$portfolio->img}}" title="{{ $portfolio->projectName }}">
                    <img class="img-fluid"  src="{{$portfolio->img}}" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="text-white-50">category:{{($portfolio->category)}}</div>
                        <div>projectName: {{ $portfolio->projectName }}</div>
                    </div>
                </a>
            </div>
            @endforeach
            {{-- <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div> --}}
        </div>
    </div>
</div>

<!-- Call to action-->

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider" />
                <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
            </div>
        </div>
        
        
    </div>
</section>