<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arisan Movie</title>
    <link rel="icon" type="image/x-icon" href="{!! asset('assets/img/video-player.png') !!}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('assets/style.css') !!}" type="text/css">
</head>
  <body>
    <div class="container-fluid py-5">
        <div class="container container-premiere">
            <div class="row">
                <div class="col-md-8 px-5 pb-5">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg bg-body-transparent">
                            <div class="container-fluid">
                              <a class="navbar-brand" href="#">
                                <img src="{!! asset('assets/img/video-player.png') !!}" alt="Bootstrap" width="70" height="46">
                              </a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">News</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Movies</a>
                                  </li>
                                  <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Series
                                    </a>
                                    <ul class="dropdown-menu bg-nav-premiere">
                                      <li><a class="dropdown-item bg-nav-premiere-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item bg-nav-premiere-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item bg-nav-premiere-item" href="#">Something else here</a></li>
                                    </ul>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link">Cartoons</a>
                                  </li>
                                </ul>
                                <form class="d-flex" role="search">
                                  <button class="btn btn-outline-light" type="submit">Search</button>
                                </form>
                              </div>
                            </div>
                          </nav>
                    </div>
                    <div class="row">
                        <div onmouseover="jumboZoom(this)" onmouseout="jumboNormal(this)" class="jumbotron p-5" style="background-image: url('{!! asset('assets/img/jumbo1.jpg') !!}'); ">
                            <div class="row mb-5">
                                <figure class="figure">
                                    <figcaption class="figure-caption mb-2">Staring</figcaption>
                                    <img src="{!! asset('assets/img/staring.jpg') !!}" class="figure-img img-fluid rounded" alt="...">
                                </figure>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="display-4">The, Queen's</h1>
                                    <h1 class="display-4"><b>Arisan!</b></h1>
                                    <a class="btn btn-danger btn-md" href="#" role="button" data-bs-toggle="modal" data-bs-target="#premiereModal"> <img src="{!! asset('assets/img/play.png') !!}" class="figure-watch" alt="..."> Watch Now</a>
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                <swiper-container class="swiper-container-1 py-3 px-5">
                                        <swiper-slide> <img src="{!! asset('assets/img/staring.jpg') !!}" class="figure-img img-fluid rounded" alt="..."></swiper-slide>
                                        <swiper-slide> <img src="{!! asset('assets/img/staring.jpg') !!}" class="figure-img img-fluid rounded" alt="..."></swiper-slide>
                                        <swiper-slide> <img src="{!! asset('assets/img/staring.jpg') !!}" class="figure-img img-fluid rounded" alt="..."></swiper-slide>
                                        <swiper-slide> <img src="{!! asset('assets/img/staring.jpg') !!}" class="figure-img img-fluid rounded" alt="..."></swiper-slide>
                                </swiper-container>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div>
                            <h1 class="popular-title">Popular on PensFlex</h1>
                        </div>
                        <div>
                        <swiper-container class="mySwiper" space-between="-230"
                        slides-per-view="3" >
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb1.jpg') !!}" class="card-img-top" >
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">9.5</span>
                                        </div>
                                        <div class="span-season">Season 1</div>
                                        <h1 class="title-popular">Blood Shoot</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb2.jpeg') !!}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">14.3</span>
                                        </div>
                                        <div class="span-season">Premiere</div>
                                        <h1 class="title-popular">JOKER</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb3.jpg') !!}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">27.5</span>
                                        </div>
                                        <div class="span-season">Season 4</div>
                                        <h1 class="title-popular">Avengers</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb4.jpeg') !!}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">9.5</span>
                                        </div>
                                        <div class="span-season">Season 1</div>
                                        <h1 class="title-popular">Merah Jambu</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb5.png') !!}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">7.5</span>
                                        </div>
                                        <div class="span-season">Premiare</div>
                                        <h1 class="title-popular">Love Cook</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                                <swiper-slide> 
                                <div class="card card-popular">
                                    <img src="{!! asset('assets/img/thumb/thumb6.jpeg') !!}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="rating rounded p-1">
                                            <img src="{!! asset('assets/img/star.png') !!}" class="img-star-rating">
                                            <span class="span-rating">9.5</span>
                                        </div>
                                        <div class="span-season">Season 3</div>
                                        <h1 class="title-popular">Social Fake</h1>
                                    </div>
                                </div>
                                 </swiper-slide>
                        </swiper-container>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 sideleft py-3 shadow-lg bg-body">
                    <div class="row user-loged">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown ">
                                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{!! asset('assets/img/user/man.png') !!}" alt="" class="rounded-circle" height="40">
                                      </a>
                                      <ul class="dropdown-menu  bg-user-loged-nav" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item dropdown-item-user-loged" href="#">Profile</a></li>
                                        <li><a class="dropdown-item dropdown-item-user-loged" href="#">Setings</a></li>
                                        <li><a class="dropdown-item dropdown-item-user-loged" href="#">Logout</a></li>
                                      </ul>
                                    </li>
                                  </ul>
                            </div>
                            <div class="bd-highlight">
                                <h5 class="user-loged-name">Khoironi</h5>
                            </div>
                            <span class="user-loged-status">verified</span>
                        </div>
                    </div>
                    <div class="row px-3">
                        <h4 class="new-trailer">New Trailer</h4>
                    </div>
                    <div class="row p-3 ">
                        <div class="col thumb-trailer" style="background-image: url('{!! asset('assets/img/trailer/trailer2.jpg') !!}'); ">
                            <div class="d-flex flex-row-reverse">
                                <div class="p-2">
                                    <span class="total-views-trailer">2.3 M</span>
                                </div>
                                <div class="p-2">
                                    <img src="{!! asset('assets/img/eye.png') !!}" alt="Bootstrap" height="28">
                                </div>                                
                            </div>
                            <div class="d-flex justify-content-between footer-trailer ">
                                <a href="" data-bs-toggle="modal" data-bs-target="#trailerModel">
                                    <div class="p-2">
                                        <img src="{!! asset('assets/img/play.png') !!}" alt="Bootstrap" height="46">
                                    </div>
                                </a>
                                <div class="p-2">
                                    <h2 class="title-trailer">Spyder Man hugee</h2>
                                    <span class="time-update-trailer">2 hrs Ago</span>
                                </div>
                                <div class="p-2 flex-grow-1">
                                    <div class="total-time-trailers">
                                        <span>01:29</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3 ">
                        <div class="col thumb-trailer" style="background-image: url('{!! asset('assets/img/trailer/trailer4.jpg') !!}'); ">
                            <div class="d-flex flex-row-reverse">
                                <div class="p-2">
                                    <span class="total-views-trailer">9.7 M</span>
                                </div>
                                <div class="p-2">
                                    <img src="{!! asset('assets/img/eye.png') !!}" alt="Bootstrap" height="28">
                                </div>                                
                            </div>
                            <div class="d-flex justify-content-between footer-trailer ">
                                <a href="" data-bs-toggle="modal" data-bs-target="#trailerModel">
                                    <div class="p-2">
                                        <img src="{!! asset('assets/img/play.png') !!}" alt="Bootstrap" height="46">
                                    </div>
                                </a>
                                <div class="p-2">
                                    <h2 class="title-trailer">Slow Down</h2>
                                    <span class="time-update-trailer">4 hrs Ago</span>
                                </div>
                                <div class="p-2 flex-grow-1">
                                    <div class="total-time-trailers">
                                        <span>02:11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row px-3">
                        <h4 class="new-trailer">Favourite Genre</h4>
                    </div>
                    <div class="col favourite-genre p-4">
                        <a href="" class="btn btn-danger rounded-pill">Drama</a>
                        <a href="" class="btn btn-info rounded-pill">Adventures</a>
                        <a href="" class="btn btn-success rounded-pill">Horor</a>
                        <a href="" class="btn btn-warning rounded-pill">Action</a>
                        <a href="" class="btn btn-light rounded-pill">Fantasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- Modal Trailer -->
<div class="modal fade" id="trailerModel" tabindex="-1" aria-labelledby="trailerModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content trailerModel">
        <div class="modal-body">
            <video height="430" controls autoplay>
                <source src="{!! asset('assets/video/animasi.mp4') !!}" type="video/mp4">
                <source src="{!! asset('assets/video/animasi.mp4') !!}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
      </div>
    </div>
  </div>

     <!-- Modal Premiere -->
<div class="modal fade" id="premiereModal" tabindex="-1" aria-labelledby="premiereModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content trailerModel">
        <div class="modal-body">
            <video height="430" controls autoplay>
                <source src="{!! asset('assets/video/excorcist.mp4') !!}" type="video/mp4">
                <source src="{!! asset('assets/video/excorcist.mp4') !!}" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="{!! asset('assets/script.js') !!}"></script>
</body>
</html>