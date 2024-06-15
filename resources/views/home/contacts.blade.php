<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/delices_fruits.png" type="image/x-icon">
  <style>
    body {
        font-family: Arial, sans-serif;
    }
    #newsletter-form {
        margin: 20px 0;
    }
    #email {
        padding: 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        padding: 10px 15px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #0056b3;
    }
    #alert-container {
        margin-top: 20px;
    }
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        width: 300px;
    }
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }
    .alert-error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
</style>
  <title>
    Contact
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include ('home.header')
    <!-- end header section -->

  </div>
  <!-- end hero area -->

 
  <!-- info section -->
    <!-- contact section -->

 
@include('home.contact')
<!-- end contact section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
          <a href="https://www.facebook.com/profile.php?id=100073384395855&mibextid=ZbWKwL" target="_blank" class="btn btn-primary" style="margin: 5px;">
            <i class="fab fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="#" class="btn btn-info" style="margin: 5px;">
            <i class="fab fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="https://www.instagram.com/ibrahimadiarra223" target="_blank" class="btn btn-danger" style="margin: 5px;">
            <i class="fab fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="http://www.youtube.com/@ibrahimadiarra9438"  target="_blank"class="btn btn-danger" style="margin: 5px;">
            <i class="fab fa-youtube" aria-hidden="true"></i>
          </a>
        </div>
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
<form id="newsletter-form" action="#">
    <input type="email" id="email" placeholder="Entrez votre email" required>
    <button type="submit">S'abonner</button>
</form>
<div id="alert-container"></div>

<script>
document.getElementById('newsletter-form').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var emailInput = document.getElementById('email');
    var email = emailInput.value;

    var alertContainer = document.getElementById('alert-container');
    alertContainer.innerHTML = ''; 

    if (validateEmail(email)) {
        displayAlert('Merci pour votre abonnement !', 'success');

    } else {
        displayAlert('Veuillez entrer une adresse email valide.', 'error');
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function displayAlert(message, type) {
    var alertContainer = document.getElementById('alert-container');
    var alertDiv = document.createElement('div');
    alertDiv.className = 'alert alert-' + type;
    alertDiv.textContent = message;
    alertContainer.appendChild(alertDiv);
}
</script>
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
    <footer class=" footer_section">
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


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>