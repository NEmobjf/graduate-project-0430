<!doctype html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二手書商店</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/a
ll.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <!-- 要放上面 權重可以壓過下面的 -->
    <link rel="stylesheet" href="website_x01.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg fixed-top row">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-family:'Dancing Script', 'cursive'; font-size: 30pt;" href="#">storia</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">首頁</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">關於我們</a>
                        </li>
                        <!-- 下拉式選單 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                看書/看用戶
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">書籍總覽</a></li>
                                <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="#">用戶推薦</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto justify-content-end">
                        <form class="d-flex me-2 mt-3" role="search">
                            <input class="form-control-sm" type="search" placeholder="Search" aria-label="Search" size="15" style="height: calc(1.5em + 0.5rem + 2px);border: 0.5px black; border-radius: 10px 0px 0px 10px;">
                            <button class="btn btn-search btn-sm" type="submit" style="height: calc(1.5em + 0.5rem + 2px);"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">會員專區</a></li>
                                <li><a class="dropdown-item" href="#">訂單查詢</a></li>
                                <li><a class="dropdown-item" href="#">登入／註冊</a></li>
                                <li><a class="dropdown-item" href="#">登出</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
                        </li>
                        </li>



                    </ul>
                    <!-- <div class="row">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-user"></i></a>
                        </li>
                        
                    </div> -->

                </div>
            </div>
        </nav>


    </section>
    <!-- 輪播 -->
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/young-woman-studying-library.jpg" class="d-block w-100" alt="雙11！天天最高送1111">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/coffee-books-near-reading-woman.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/open-book-coffee-cup-table-near-window.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <!-- </div> -->
    <hr>
    <!-- 類別欄 -->
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class=" category">
                    <div class="container row">
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/1.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/2.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/3.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/4.png" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class=" category">
                    <div class="container row">
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/5.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/6.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/7.png" alt=""></div>
                        <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/8.png" alt=""></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-button-next next1"></div>
        <div class="swiper-button-prev prev1"></div>
    </div>
    <hr>
    <!-- cardtest start -->
    <div class="container mt-2">
        <!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                    <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                    <h5 class="card-title mt-3 mb-3">Sierra Web Development • Owner</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                    <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web .</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                    <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <h4 class="card-title text-right"><i class="material-icons">settings</i></h4>
                    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">ProVyuh</h5>
                    <p class="card-text">This is a company that builds websites, web apps and e-commerce solutions.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- cardtest end -->
    <!-- 商品欄 -->
    <div class="section-title mb-3 mt-3 wow fadeInUp text-center" data-wow-delay="0.2s">
        <h1 class="">商品總覽</h1>
    </div>

    <div class="books">
        <div class="wrapper1">
            <!-- card1 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/4c273ae9-928c-49b4-9d41-4488262ff53d.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card2 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/4ff01fa3-a8e2-41fb-aab1-380db172d638.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card3 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5c2c1407-79d2-4459-a33d-b16202e64d31.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card4 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card5 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card6 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card7 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card8 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card9 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card10 -->
            <div class="card col-md-3 mx-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center align-items-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <hr>
    <!-- grid test area -->
    <div class="section-title mb-3 mt-3 wow fadeInUp text-center" data-wow-delay="0.2s">
        <h1 class="">推薦用戶</h1>
    </div>
    <div class="user">
        <div class="wrapper2">
            <!-- card horiz 1 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 3.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card horiz 2 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 5.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card horiz 3 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 4.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card horiz 4 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 6.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card horiz 5 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 2.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card horiz 6 -->
            <div>
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./images/圖層 7.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="btn-old">
            <a href="javascript: void(0)" class="btn">
                <span>看更多</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
    </div>
    </section>

    <section id="footer">
        <div class="container-fluid">
            <div id="aboutme" class="row text-center">

                <div class="col-md-3">
                    <p><i class="fas fa-up-right-from-square fa-3x"></i></p>
                    <h3>產品</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>

                <div class="col-md-3" style="border-left:2px solid white">
                    <p><i class="fas fa-bars fa-3x">
                        </i>
                        </i></p>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>

                </div>

                <div class="col-md-3" style="border-left:2px solid white">
                    <p><i class="fas fa-paper-plane fa-3x"></i></p>
                    <h3>聯繫我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        //  Initialize Swiper 
        var swiper = new Swiper(".mySwiper", {
            rewind: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>