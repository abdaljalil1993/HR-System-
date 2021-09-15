<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" 
  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <style type="text/css">
body {
  font-family: tahoma;

}

.testimonial {
  background-color: white;
  text-align: center;
  padding: 30px 30px 50px;
  margin: 100px 15px 160px;
  position: relative;
}

.testimonial::before,
.testimonial::after {
  content: "";
  border-top: 40px solid white;
  border-right: 125px solid transparent;
  position: absolute;
  bottom: -40px;
  left: 0;
}

.testimonial::after {
  border-right: none;
  border-left: 125px solid transparent;
  left: auto;
  right: 0;
}

.testimonial .icon {
  display: inline-block;
  font-size: 20px;
  color: #016d9b;
  margin-bottom: 20px;
  opacity: 0.6;
}

.testimonial .description {
  font-size: 14px;
  color: #777;
  text-align: justify;
  margin-bottom: 30px;
  opacity: 0.9;
}

.testimonial .testimonial-content {
  width: 100%;
  left: 0;
  position: absolute;
}

.testimonial .pic {
  display: inline-block;
  border: 4px solid white;
  border-radius: 50%;
  box-shadow: 0 0 4px 4px #016d9b;
  overflow: hidden;
  z-index: 1;
  position: relative;
}

.testimonial .pic img {
  width: 200px;
  height: 200px;
}

.testimonial .name {
  font-size: 15px;
  font-weight: bold;
  color: white;
  text-transform: capitalize;
  margin: 10px 0 5px 0;
}

.testimonial .title {
  display: block;
  font-size: 14px;
  color: #ffd9b8;
}

.owl-controls {
  margin-top: 20px;
}

.owl-pagination {
  display: flex;
  justify-content: center;
}

.owl-page {
  height: 10px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 10%;
}

.owl-page:hover,
.owl-page.active {
  background-color: rgba(255, 255, 255, 0.3);
}

.owl-page:not(first-item) {
  margin-left: 10px;
}

  </style>
</head>
<body>
<div class="demo">
  <div class="container">
    <div class="row">
      <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/bg1.jpg" alt="">
            </div>
            <h3 class="name">Michele Miller</h3>
            <span class="title">Project Manager</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/f.jpg" alt="">
            </div>
            <h3 class="name">Patricia Knott</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/bg1.jpg" alt="">
            </div>
            <h3 class="name">Justin Ramos</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/bg.jpg" alt="">
            </div>
            <h3 class="name">Mary Huntley</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
        <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/bg1.jpg" alt="">
            </div>
            <h3 class="name">Aaron Newell</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
                <div class="testimonial">
          <span class="icon fa fa-quote-left"></span>
          <p class="description">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
          <div class="testimonial-content">
            <div class="pic">
              <img src="images/f.jpg" alt="">
            </div>
            <h3 class="name">Lizzie Geren</h3>
            <span class="title">Web Developer</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
  $("#testimonial-slider").owlCarousel({
    items: 3,
    itemsDesktop:[1000,3],
    itemsDesktopSmall:[979,2],
    itemsTablet:[768, 2],
    itemsMobile:[650, 1],
    pagination: true,
    autoPlay: true
  });
});
</script>
</body>
</html>