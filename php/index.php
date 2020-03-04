<?php require_once '../component/header.php'?>
    <main>
        <div class="container-fluid">
            <div class="row">

                <div class="col-8 bg-dark pr-0">
                    <!-- carousel starts -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../assets/images/selected/carouselA.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/selected/carouselB.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/selected/carouselC.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- carousel ends -->

                    <!-- cards starts -->

                    <div class="card-container" class="row row-cols-6">
                        <div class="card" style="width: 25%; margin-right: 4px;">
                            <a class="card-link" href="#">
                                <img src="../assets/images/cards/card1.jpg" class="card-img-top card-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5>chain watches</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card" style="width: 25%;margin-right: 4px;">
                            <a class="card-link" href="#">
                                <img src="../assets/images/cards/card2.jpg" class="card-img-top card-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5>Female Sport Watches</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card" style="width: 25%;margin-right: 4px;">
                            <a class="card-link" href="#">
                                <img src="../assets/images/cards/card3.jpg" class="card-img-top card-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5>Vintage 60's</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </a>
                        </div>
                        <div class="card" style="width: 25%;margin-right: 4px;">
                            <a class="card-link" href="#">
                                <img src="../assets/images/cards/card4.jpg" class="card-img-top card-img img-fluid" alt="...">
                                <div class="card-body">
                                    <h5>Young Teens</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- cards ends -->
                    <!-- brands check cards starts here -->

                    <div class="checkcard">
                        <div class="row">
                            <div class="col-6"><img src="../assets/images/brands/brandA.jpg" class="w-100" height="300" alt=" a casio male watch"></div>
                            <div class="col-6"><img src="../assets/images/brands/brandPix1.jpg" class="w-100" height="300" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="col-6"><img src="../assets/images/brands/brandB.jpg" class="w-100" height="300" alt=""></div>
                            <div class="col-6"><img src="../assets/images/brands/brandD.jpg" class="w-100" height="300" alt=""></div>

                        </div>
                    </div>
                </div>



                <div class="col-4" style="margin: 0; padding-right: 0%;"></div>
            </div>
        </div>
    </main>
    <!-- main ends -->
    <!-- footer starts here -->

<?php
require_once "../component/footer.php";
?>