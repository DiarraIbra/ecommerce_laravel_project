<section class="slider_section">
    <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-background" style="background-image: url('images/bg_1.jpg');">
                                    <div class="overlay"></div>
                                    <div class="detail-box">
                                        <h1>Welcome To Our <br> EShop - Fruits et Délices</h1>
                                        <p>Découvrez la fraîcheur et la qualité de nos fruits et légumes soigneusement sélectionnés pour vous. Chez Fruits et Délices, nous nous engageons à vous offrir des produits savoureux, frais et nutritifs, directement du champ à votre table. Profitez de notre vaste sélection de fruits juteux, de légumes croquants et de délices naturels pour une alimentation saine et équilibrée. Savourez le meilleur de la nature avec nous !</p>
                                        <a href="{{url('/contacts')}}">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
</section>

<style>
.slider_section {
    position: relative;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider-background {
    position: relative;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.detail-box {
    position: relative;
    z-index: 1;
    text-align: center;
    color: white;
    max-width: 800px;
    padding: 20px;
}

.detail-box h1 {
    font-size: 48px;
    line-height: 1.2;
    margin-bottom: 20px;
}

.detail-box p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.detail-box a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #28a745;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

@media (max-width: 768px) {
    .detail-box h1 {
        font-size: 36px;
    }

    .detail-box p {
        font-size: 16px;
    }
}
</style>
