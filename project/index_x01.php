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

</head>

<body>

    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid" <a class="navbar-brand" href="#"><img class="logoimage" src="./images/logo1.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="#">回導覽業</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">架上書籍</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                關於我們
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">關於我們</a></li>
                                <li><a class="dropdown-item" href="#">聯絡我們</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="wrap">
                        <div class="search">
                            <input class="search-bar" type="text" name="search" id="search" placeholder="輸入名稱">
                            <button class="search-btn"><i class="fas fa-search"></i></button>
                        </div>
                        <div class="row text-center">
                            <p class="icon"><i class="fa-solid fa-cart-shopping"></i></p>
                            <p class="icon"><i class="fa-solid fa-user"></i></p>
                        </div>
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
                                    <h5>雙11！天天最高送1111</h5>
                                    <p>購物金活動採單日累計消費滿額即可參加登記送活動，活動期間僅需登記一次，部分商品不適用，詳見說明。</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/coffee-books-near-reading-woman.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/open-book-coffee-cup-table-near-window.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
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

    <div class=" category">
        <div class="container row">
            <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/1.png" alt=""></div>
            <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/2.png" alt=""></div>
            <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/3.png" alt=""></div>
            <div class="col-md-3"><img class="img-fluid rounded-circle" src="./images/4.png" alt=""></div>
        </div>
    </div>





    <hr>

    <section id="scontaint">
        <!-- 商品欄 -->
        <p>
        <div class="row">
            <!-- card1 -->
            <div class="card col-md-3" style="width: 18rem;">
                <img src="./images/figma/4c273ae9-928c-49b4-9d41-4488262ff53d.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card2 -->
            <div class="card col-md-3" style="width: 18rem;">
                <img src="./images/figma/4ff01fa3-a8e2-41fb-aab1-380db172d638.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card13 -->
            <div class="card col-md-3" style="width: 18rem;">
                <img src="./images/figma/5c2c1407-79d2-4459-a33d-b16202e64d31.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <!-- card4 -->
            <div class="card col-md-3" style="width: 18rem;">
                <img src="./images/figma/5fab2856-d8d0-4b95-bfbe-6b5688e9ba37.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        </p>


        <!-- 推薦用戶 -->
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
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
    </section>
    <hr>

    <section id="footer">
        <div class="container-fluid">
            <div id="aboutme" class="row text-center">

                <div class="col-md-4"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-4"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-4"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
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
</body>

</html>