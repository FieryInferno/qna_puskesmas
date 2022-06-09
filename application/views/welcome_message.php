<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>QNA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/templatemo'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/templatemo'); ?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/templatemo'); ?>/assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="<?= base_url('assets/templatemo'); ?>/assets/css/animated.css">
    <link rel="stylesheet" href="<?= base_url('assets/templatemo'); ?>/assets/css/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" style="height: 10rem;" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo" style="width: 8rem;height: 8rem;">
              <img src="<?= base_url(); ?>/assets/images/logo-puskesmas.png">
            </a>
            <a href="index.html" class="logo" style="width: 8rem;height: 8rem;">
              <img src="<?= base_url(); ?>/assets/images/logo-dinkes.png" style="width: 150%;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section">
                <div><h4>Pelayanan Konseling Gizi Online</h4></div> 
                <div><h4>UPTD Puskesmas Tlogosari Wetan Kota Semarang</h4></div> 
              </li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="fill-form" style="padding-bottom: 0px;">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
              <div class="info-post">
                <div class="icon" onclick="showQuestionForm()">
                  <img src="<?= base_url('assets/templatemo'); ?>/assets/images/phone-icon.png" alt="">
                  <h3>Mulai Bertanya!</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="questionForm" style="display: none;">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <h4>Apapun pertanyaan terkait gizi akan kami jawab</h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
            <form id="contact" action="" method="post">
              <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                  <div class="contact-dec">
                    <img src="<?= base_url('assets/templatemo'); ?>/assets/images/contact-dec-v3.png" alt="">
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="fill-form">
                    <div class="row">
                      <div class="col-lg-12">
                        <fieldset>
                          <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                        </fieldset>
                        <fieldset>
                          <textarea name="message" type="text" class="form-control" id="message" placeholder="Pertanyaan" required=""></textarea>  
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button ">Kirim Pertanyaan</button>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top: 50px;">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Cek status gizi anda</h4>
          <div class="line-dec"></div>
          <form id="contact" action="" method="post">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-7">
                <div class="row d-flex justify-content-center">
                  <div class="col-md-3">
                    <div class="custom-control custom-radio image-checkbox">
                      <input
                        type="radio"
                        class="custom-control-input"
                        id="ck2a"
                        name="ck2"
                        style="width: 15%;"
                      >
                      <label class="custom-control-label" for="ck2a">
                        <img src="<?= base_url(); ?>assets/images/man.png" alt="#" class="img-fluid">
                      </label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="custom-control custom-radio image-checkbox">
                      <input
                        type="radio"
                        class="custom-control-input"
                        id="ck2b"
                        name="ck2"
                        style="width: 15%;"
                      >
                      <label class="custom-control-label" for="ck2b">
                        <img src="<?= base_url(); ?>assets/images/woman.png" alt="#" class="img-fluid">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="fill-form" style="padding-top: 0px;">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input
                          type="number"
                          placeholder="Berat Badan (Kg)"
                          oninput="countBMI()"
                          min="0"
                          id="beratBadan"
                        >
                      </fieldset>
                      <fieldset>
                        <input
                          type="number"
                          placeholder="Tinggi Badan (cm)"
                          oninput="countBMI()"
                          min="0"
                          id="tinggiBadan"
                        >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea
                          type="text"
                          class="form-control"
                          id="hasil"
                          placeholder="Hasil"
                          disabled
                        ></textarea>  
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Pedoman Gizi Seimbang</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-12">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/bibimbap.png" alt="" style="max-width: 100%;">
                          Syukuri dan nikmati aneka ragam makanan
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/vegetables.png" alt="" style="max-width: 100%;">
                          Perbanyak makan sayuran dan buah - buahan
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/balanced-diet.png" alt="" style="max-width: 100%;">
                          Biasakan makan lauk pauk yang mengandung protein tinggi
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/sugar-cubes.png" alt="" style="max-width: 100%;">
                          Batasi konsumsi gula, garam & lemak
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/balanced-diet.png" alt="" style="max-width: 100%;">
                          Biasakan makan lauk pauk yang mengandung protein tinggi
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/breakfast.png" alt="" style="max-width: 100%;">
                          Biasakan sarapan
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/drink-water.png" alt="" style="max-width: 100%;">
                          Biasakan minum air putih yang cukup
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/new-product.png" alt="" style="max-width: 100%;">
                          Biasakan membaca label pada kemasan
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/washing-hand.png" alt="" style="max-width: 100%;">
                          Cuci tangan pakai sabun dengan air bersih mengalir
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="info-post">
                        <div class="icon">
                          <img src="<?= base_url(); ?>/assets/images/body-mass.png" alt="" style="max-width: 100%;">
                          Lakukan aktifitas fisik yang cukup dan pertahankan BB normal
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section" style="padding-top: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Sudah seimbangkan asupan gizimu?</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Komposisi makanan dalam piring kita menentukan jumlah zat gizi yang masuk kedalam tubuh</h4>
                              </div>
                            </div>
                            <div class="col-lg-6 align-self-center">
                              <div class="right-image">
                                <img src="<?= base_url(); ?>/assets/images/makan-sehat.png" alt="" style="max-width: 100%;">
                                <!-- <canvas id="myChart"></canvas> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scripts -->
  <script src="<?= base_url('assets/templatemo'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/templatemo'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/templatemo'); ?>/assets/js/owl-carousel.js"></script>
  <script src="<?= base_url('assets/templatemo'); ?>/assets/js/animation.js"></script>
  <script src="<?= base_url('assets/templatemo'); ?>/assets/js/imagesloaded.js"></script>
  <script src="<?= base_url('assets/templatemo'); ?>/assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
    ];

    const data = {
      labels: [
        'Buah - Buahan',
        'Sayuran',
        'Makanan Pokok',
        'Lauk Pauk',
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [15, 15, 35, 35],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(70, 242, 8)',
        ],
        hoverOffset: 4
      }]
    };

    const config = {
      type: 'pie',
      data: data,
    };
    
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    const showQuestionForm = () => $('#questionForm').attr('style', '');

    const countBMI = () => {
      const beratBadan  = parseInt($('#beratBadan').val());
      const tinggiBadan = parseInt($('#tinggiBadan').val()) / 100;
      const bmi         = beratBadan / (tinggiBadan * tinggiBadan);
      
      let hasil;
      
      if (bmi < 17) {
        hasil = 'Kurus tingkat berat';
      } else if (bmi >= 17 && bmi < 18.5) {
        hasil = 'Kurus tingkat ringan';
      } else if (bmi >- 18.5 && bmi < 24.5) {
        hasil = 'Normal';
      } else if (bmi >= 24.5 && bmi < 27) {
        hasil = 'Overweight';
      } else {
        hasil = 'Obesitas';
      }

      $('#hasil').val(`Indeks massa tubuh anda berada di rentang ${bmi.toFixed(1)} dengan kategori ${hasil}`);
    }
  </script>
</body>
</html>