<?php
    require_once("action/indexAction.php");

    $action = new indexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
    <section class="container-image-index">          
            <div class="image-index">
                <div class="titre-image-index">
                    GET YOUR SHOES NOW !
                </div>
                <div class="button-index">
                    <a href="shop.php">SHOP NOW</a>
                </div>
            </div>
    </section>


    <section class="container-description">
        <div class="titre-section">
            Description
        </div>
        <div class="container-box">
            <div class="box-description-txt">
                <p> At Unique Shoes, we see a world where everybody is an athlete—united in the joy of movement. Driven by our à
                passion for sport and our instinct for innovation, we aim to elevate human potential.
                 Whether our job is designing the ultimate sneaker or coding a revolutionary app, we’re united by the same mission:
                  to bring inspiration and innovation to every athlete in the world. That means you. Because, as Bill  
                  co-founder and legendary coach—once said, “If you have a body, you are an athlete.”
                </p>
            </div>
            <div class="box-description-shoes">
                <a href="####"><img src="images/local/10.png" id="shoes-desc"></a>
            </div>
        </div>
    </section>
    
    <section class="container-carouselle">
        <div class="carousel-position">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators bg-gradient-dark">
                    <li data-target="#carouselExampleIndicators bg-dark" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators bg-dark" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators bg-dark" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-images">
                        <img class="rounded mx-auto d-block" src="images/local/4.png" alt="First slide">
                    </div>
                    <div class="position-txt">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>120 $</h3>
                            <p>airMax270 Orange</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-images">
                        <img class="rounded mx-auto d-block" src="images/local/2.png" alt="First slide">
                    </div>
                    <div class="position-txt">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>280 $</h5>
                            <p>airMax270 Black</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-images">
                        <img class="rounded mx-auto d-block" src="images/local/3.png" alt="First slide">
                    </div>
                    <div class="position-txt">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>155 $</h5>
                            <p>airMax270 White</p>
                        </div>
                    </div>
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
    </section>

    <section class="container-info">
        <img src="images/leaf.png" alt="">
        <img src="images/paw-print-.png" alt="">
        <img src="images/plane.png" alt="">
        <img src="images/handshake.png" alt="">
    </section>

    <section class="container-video">
        <video autoplay muted loop src="video/video-index.mp4"></video>
    </section>

    <section class="container-review">
        <div class="titre-section">
            OUR GUEST LOVE US
        </div>
        <div class="titre-section">
          REVIEWS :
        </div>
        <div class="position-card">
            <div class="container-card">
                <div class="profile-card">
                    <img src="images/review-profile1.jpg" alt="" srcset="">
                </div>
                <div class="txt-card">
                    <div class="value-card">Nathan D</div>
                    <div class="value-card">Germany</div>
                    <div class="value-card">
                        Lorem ipsum, dolor sit amet consectetur </br> adipisicing elit. Aliquid esse
                        consequatur deserunt odit animi doloremque sed</br> suscipit deleniti! Incidunt 
                    </div>
                </div>
            </div>
            <div class="container-card">
                <div class="profile-card">
                    <img src="images/review-profile2.jpg" alt="" srcset="">
                </div>
                <div class="txt-card">
                    <div class="value-card">Macron D</div>
                    <div class="value-card">Germany</div>
                    <div class="value-card">
                    Great fit, love the material. May pick up a back up pair.
                    </div>
                </div>
            </div>
            <div class="container-card">
                <div class="profile-card">
                    <img src="images/review-profile3.jpg" alt="" srcset="">
                </div>
                <div class="txt-card">
                    <div class="value-card">Tennis D</div>
                    <div class="value-card">Germany</div>
                    <div class="value-card">
                    The shoe is described online exactly how you will receive them. </br> 
                    Nothing blows it away nor do they shortsell it.
                </div>
            </div>
        </div>
    </section>
    
    <script>
        $('.carousel').carousel({

            pause: "null"

        })
    </script>
<?php
    require_once("partial/footer.php");