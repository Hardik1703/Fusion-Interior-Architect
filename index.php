<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Fusion logo.png" type="image/x-icon">
    <title>Fusion Interior & Architect | HOME</title>
    <?php require('links.php') ?>

</head>

<body>
    <?php require('header.php') ?>
    <!-- slidebar start -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade slideShow" data-bs-ride="carousel">
        <div class="carousel-inner my-5">
            <div class="carousel-item active">
                <img src="image/1.jpg" class="d-block w-100" alt="Fusion Interior & Architect">
            </div>
            <div class="carousel-item">
                <img src="image/2.jpg" class="d-block w-100" alt="Fusion Interior & Architect">
            </div>
            <div class="carousel-item">
                <img src="image/3.jpg" class="d-block w-100" alt="Fusion Interior & Architect">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slidebar end -->
    <!-- row 1 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/11.jpg" class="card-img reveal fade-left animation fadeMedia-left" alt="...">
                    <div class="card-body bg-dark reveal fade-right animation fadeMedia-right">
                        <h5 class="card-title text-light">Guest Room</h5>
                        <p class="card-text text-light ">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/5.jpg" class="card-img animation fadeMedia-right" alt="...">
                    <div class="card-body bg-dark animation fadeMedia-left">
                        <h5 class="card-title text-light">Personal Room</h5>
                        <p class="card-text text-light">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/10.jpg" class="card-img reveal fade-right animation fadeMedia-left" alt="...">
                    <div class="card-body bg-dark reveal fade-left animation fadeMedia-right">
                        <h5 class="card-title text-light">Hall</h5>
                        <p class="card-text text-light">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/4.jpg" class="card-img reveal fade-left animation fadeMedia-right" alt="...">
                    <div class="card-body bg-dark reveal fade-right animation fadeMedia-left">
                        <h5 class="card-title text-light">Kitchen</h5>
                        <p class="card-text text-light">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/9.jpg" class="card-img animation fadeMedia-left" alt="...">
                    <div class="card-body bg-dark animation fadeMedia-right">
                        <h5 class="card-title text-light">Home & Office POP</h5>
                        <p class="card-text text-light">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-5 m-4 cardHome">
                    <img src="image/6.jpg" class="card-img reveal fade-right animation fadeMedia-right" alt="...">
                    <div class="card-body bg-dark reveal fade-left animation fadeMedia-left">
                        <h5 class="card-title text-light">Home</h5>
                        <p class="card-text text-light">This is a wider card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!-- 5.2 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <?php require('footer.php') ?>
</body>

<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
</script>
<!-- media Query -->
<script>
    function animation() {
        var animation = document.querySelectorAll(".animation");

        for (var i = 0; i < animation.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = animation[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                animation[i].classList.add("active");
            } else {
                animation[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", animation);
</script>


</html>