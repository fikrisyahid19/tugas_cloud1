<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cloud Computing Assignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/creativetim/creativetim.min.css">
    <link rel="icon" sizes="16x16" href="favicon.ico">
  </head>
  <body>
    <div class="wrapper">
                
      <header class="header-2 skew-separator">
        
        <div class="page-header">
          <div class="page-header-image" style="background-image: url('https://1.bp.blogspot.com/-tV8X0ewbnmY/WidJK-KDduI/AAAAAAAAAPU/nhTLRyhLu4M-4TU2mYeT8bKOHmCVbga1QCLcBGAs/s1600/gedung%2Bperpustakaan.jpg')"></div>
          <div class="container pt-900">
            <div class="row">
              <div class="col-md-8 mx-auto text-center">
                <h2 class="display-1">Cloud Computing Assignment</h2>
				<h2 class="display-4">Fasilitas Perpustakaan UIN Syarif Hidayatullah Jakarta</h2>
              </div>
            </div>
            <div class="row">
              <div class="floating-box bg-default">
                <div class="box text-center">
                  <div class="icon icon-shape bg-success icon-xl rounded-circle text-white"><i class="ni ni-spaceship"></i></div>
                </div>
                <h2 class="lead text-white p-5">
				NIM : 11180910000041 <br> Nama : Muhammad Fikri Syahid <br><br>
				Selama masa WFH / Study From Home ini saya merasa lebih sering banyak duduk di depan pc dan mengerjakan tugas. Sudah lama saya tidak melihat suasana di luar
				rumah saat pagi hari karena terbiasa tidur dari subuh hingga pukul set 8 pagi. Suasana seperti terlihat sangat damai dan santai, berbeda ketika saya harus
				bersiap-siap untuk berangkat ke kampus. Sudah lama juga saya tidak terkena macet di perjalanan ke kampus. Study From Home mempunyai sisi positif dan juga negatifnya.
				Saya menikmati waktu di rumah dan kuliah dengan santai, namun dalam beberapa mata kuliah pembelajaran menjadi tidak efektif. Saya juga merindukan teman-teman
				di kampus, meskipun saya dengar suara mereka di online meeting kenyataannya saya sedang duduk sendiri di atas kasur. Saya harap suasana seperti ini cepat berakhir.
				</h2>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
    <script src="js/plugins/glide.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
    <script src="js/plugins/moment.min.js"></script>
    <!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
    <script src="js/plugins/choices.min.js" type="text/javascript"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
    <script src="js/plugins/datetimepicker.js" type="text/javascript"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="js/plugins/jasny-bootstrap.min.js"></script>
    <!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
    <script src="js/plugins/headroom.min.js"></script>
    <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE" type="text/javascript"></script>
    <script src="js/argon-design-system.min.js?v=1.0.2" type="text/javascript"></script>
    <script>
    function argonScripts() {
        if (document.querySelectorAll('.glide').length) {
            // Carousel
            new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                focusAt: 2,
                perTouch: 1,
                perView: 4
            }).mount();
        }

        if (document.querySelectorAll('.testimonial-glide').length) {
            // Testimonial Carousel
            new Glide('.testimonial-glide', {
                type: 'carousel',
                startAt: 0,
                focusAt: 2,
                perTouch: 1,
                perView: 4
            }).mount();
        }

        if (document.querySelectorAll('.map').length) {
            ArgonKit.initGoogleMaps();
            ArgonKit.initGoogleMaps2();
        }
    }
    argonScripts();
    </script>
  </body>
</html>

