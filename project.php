<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Fusion logo.png" type="image/x-icon">
    <title>Fusion Interior & Architect | OUR PROJECT</title>
    <?php require('links.php') ?>

</head>

<body>
    <?php require('header.php') ?>
    <!-- slidebar start -->
    <!-- 5.2 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <div class="container my-5 projectStyle">
        <div class="row">
            <div class="Project m-4">
                <img src="image/4.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/5.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/6.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/7.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/9.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/10.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/11.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/header.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
            <div class="Project m-4">
                <img src="image/2.jpg" alt="" class="Project-image">
                <div class="Project-title">Home</div>
            </div>
        </div>
    </div>

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