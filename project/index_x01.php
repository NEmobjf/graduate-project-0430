<!doctype html>
<html lang="zh-TW">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>二手書商店</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css">
    <!-- 要放上面 權重可以壓過下面的 -->
    <link rel="stylesheet" href="website_x01.css">

</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg naverbar-light fixed-top">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar scroll</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Link
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Link</a>
                                </li>
                            </ul>
                            <!-- 搜尋欄靠右對其 -->
                            <form class="d-flex ms-auto" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>

    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
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
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
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
                <!-- card -->
                <hr>
                <div class="row text-center">
                    <div class="card col-md-3">
                        <img src="product_img/pic0101.jpg" class="card-img-top" alt="台大葉黃素膠囊">
                        <div class="card-body">
                            <h5 class="card-title">台大葉黃素膠囊</h5>
                            <p class="card-text">游離型軟膠囊，採用金盞花植物萃取含20﹪葉黃素，調節生理機能，營養補給，健康維持</p>
                            <p class="card-text">NT3600</p>
                            <a href="#" class="btn btn-primary">更多資訊</a>
                            <a href="#" class="btn btn-primary">放購物車</a>
                        </div>
                    </div>
                    <div class="card col-md-3">
                        <img src="product_img/pic0101.jpg" class="card-img-top" alt="台大葉黃素膠囊">
                        <div class="card-body">
                            <h5 class="card-title">台大葉黃素膠囊</h5>
                            <p class="card-text">游離型軟膠囊，採用金盞花植物萃取含20﹪葉黃素，調節生理機能，營養補給，健康維持</p>
                            <p class="card-text">NT3600</p>
                            <a href="#" class="btn btn-primary">更多資訊</a>
                            <a href="#" class="btn btn-primary">放購物車</a>
                        </div>
                    </div>
                    <div class="card col-md-3">
                        <img src="product_img/pic0101.jpg" class="card-img-top" alt="台大葉黃素膠囊">
                        <div class="card-body">
                            <h5 class="card-title">台大葉黃素膠囊</h5>
                            <p class="card-text">游離型軟膠囊，採用金盞花植物萃取含20﹪葉黃素，調節生理機能，營養補給，健康維持</p>
                            <p class="card-text">NT3600</p>
                            <a href="#" class="btn btn-primary">更多資訊</a>
                            <a href="#" class="btn btn-primary">放購物車</a>
                        </div>
                    </div>
                    <div class="card col-md-3">
                        <img src="product_img/pic0101.jpg" class="card-img-top" alt="台大葉黃素膠囊">
                        <div class="card-body">
                            <h5 class="card-title">台大葉黃素膠囊</h5>
                            <p class="card-text">游離型軟膠囊，採用金盞花植物萃取含20﹪葉黃素，調節生理機能，營養補給，健康維持</p>
                            <p class="card-text">NT3600</p>
                            <a href="#" class="btn btn-primary">更多資訊</a>
                            <a href="#" class="btn btn-primary">放購物車</a>
                        </div>
                    </div>

                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </section>
    <hr>
    <section id="scontent">
        <div class="container-fluid">
            <div id="aboutme" class="row text-center">
                <div class="col-md-2"><img src="images/Qrcode02.png" alt="QRCODE" class="img-fluid mx-auto"></div>
                <div class="col-md-2"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-2"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-2"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-2"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>
                <div class="col-md-2"><i class="fas fa-thumbs-up fa-5x"></i>
                    <h3>關於我們</h3>
                    關於我們<br>
                    企業官網<br>
                    招商專區<br>
                    人才招募<br>
                </div>

            </div>
        </div>
    </section>
    <section id="footer"></section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>