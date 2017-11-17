<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Shaastra|Gallery</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <?php include "includes/styles.html"; ?>
</head>
<body>
  <section class="header" id="header" style="padding-bottom:14em;">
    <?php include "includes/navbar.html"; ?>
    
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <i class="fa fa-camera logo-img" ></i>
            <div class="hero-text">
                <h1>Moments</h1>
                <h4>captured by us...</h4>
                <p>in the process of automating the generation</p>
            </div>
            
        </div>
        <div class="col-md-6" style="padding-top:16em;">
            <div class="hero-text">
                <p class="header-para" style="float: middle;">It is truly said that a picture says a thousand words. So here are a few “thousand words” which better explain about our device and work. So here are a few of the pictures which show about our work and our survey reports. We believe in spreading awareness through not only digital media, but by also communicating our ideas and our product at the grass-root level.<br><br>
                The primary reason why we talk directly at the grass root level too, is because we care about our customers. We wish to get their feedback and suggestions directly, afterall, they are the ones we're doing everything for.<br><br>
                
                Below are images from one such event, and compilations of our survey reports
                </p>
            </div>
        </div>
    </div>
    </div>
  </section>

  <script type="text/javascript" src="js/gallery.js"></script>

  <section class="our-work" id="gallery">
    <div class="container-fluid our-work-full text-center" style="margin-bottom: 0; margin-left: auto;padding-bottom: 0;">
      <div class="row clearfix">
        <div class="col-md-4"><a href = "img/media1.jpeg" data-lightbox="gallery"><img src="img/media1.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/media3.jpeg" data-lightbox="gallery"><img src="img/media3.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/media2.jpeg" data-lightbox="gallery"><img src="img/media2.jpeg" class="our-work-photo"></a></div>
      </div>
     <div class="row clearfix">
        <div class="col-md-4"><a href = "img/meet1_2.jpeg" data-lightbox="gallery"><img src="img/meet1_2.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/meet1_3.jpeg" data-lightbox="gallery"><img src="img/meet1_3.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/meet1_4.jpeg" data-lightbox="gallery"><img src="img/meet1_4.jpeg" class="our-work-photo"></a></div>
      </div>
      <div class="row clearfix">
        <div class="col-md-4"><a href = "img/meet1_5.jpeg" data-lightbox="gallery"><img src="img/meet1_5.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/meet1_6.jpeg" data-lightbox="gallery"><img src="img/meet1_6.jpeg" class="our-work-photo"></a></div>
        <div class="col-md-4"><a href = "img/meet1_7.jpeg" data-lightbox="gallery"><img src="img/meet1_7.jpeg" class="our-work-photo"></a></div>
      </div>
      
      <nav aria-label="Page navigation example">
        <ul class="pagination pagination-lg justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" id="prv-btn" href="#" onclick="SwitchGallery(PageIndex - 1)">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#" onclick="SwitchGallery(1)">1</a></li>
          <li class="page-item"><a class="page-link" href="#" onclick="SwitchGallery(2)">2</a></li>
         <!-- <li class="page-item"><a class="page-link" href="#" onclick="SwitchGallery(3)">3</a></li>-->
          <li class="page-item">
            <a class="page-link" id="nxt-btn" href="#" onclick="SwitchGallery(PageIndex + 1)">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <?php include "includes/footer.html"; ?>

<!-- /container -->

<?php include "includes/scripts.html"; ?>
</body>
</html>
