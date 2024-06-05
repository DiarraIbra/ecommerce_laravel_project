<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="info_section layout_padding2-top">
        <div class="social_container">
            <div class="social_box">
                <a href="https://www.facebook.com/profile.php?id=100073384395855&mibextid=ZbWKwL" target="_blank" class="btn btn-primary" style="margin: 5px;">
                  <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn btn-info" style="margin: 5px;">
                  <i class="fab fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/ibrahimadiarra223"  target="_blank" class="btn btn-danger" style="margin: 5px;">
                  <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="http://www.youtube.com/@ibrahimadiarra9438" target="_blank" class="btn btn-danger" style="margin: 5px;">
                  <i class="fab fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
        </div>
        <div class="info_container ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h6>À PROPOS DE NOUS</h6>
                        <p>
                            Chez Fruits et Délices, nous nous engageons à fournir des fruits et légumes frais, savoureux et nutritifs. Notre mission est de vous offrir des produits de la plus haute qualité, directement du champ à votre table.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="info_form ">
                            <h5>Newsletter</h5>
                            <form action="#">
                                <input type="email" placeholder="Entrez votre email">
                                <button>S'abonner</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6>BESOIN D'AIDE</h6>
                        <p>
                            Si vous avez des questions, n'hésitez pas à nous contacter. Notre équipe est là pour vous aider et répondre à toutes vos questions concernant nos produits et services.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <h6>CONTACTEZ-NOUS</h6>
                      <div class="info_link-box">
                          <a href="https://www.google.com/maps/place/Maroc" target="_blank">
                              <i class="fa fa-map-marker" aria-hidden="true"></i>
                              <span>Maroc</span>
                          </a>
                          <a href="tel:+212612892969">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              <span>+212 612 892 969</span>
                          </a>
                          <a href="mailto:aliasbusnessman@gmail.com">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              <span>aliasbusnessman@gmail.com</span>
                          </a>
                      </div>
                  </div>            
                </div>
            </div>
        </div>
        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; FSIB <span id="displayYear"></span> Tous droits réservés par
                    <a href="https://html.design/">Fruits et Délices</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->
      </section>
      
      <!-- end info section -->
      
      <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      
</body>
</html>