<section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contact Us
        </h2>
      </div>
      @if(session()->has('message'))

      <div class="alert alert-success">
        <button type="button" class="close" data-bs-dismiss='alert'>X</button>
      {{session()->get('message')}}
      </div>
      @endif

    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13586.431381297754!2d-8.020280299999992!3d31.644585934651925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee9eb5090999%3A0x2dca05e37a64f83b!2sFacult%C3%A9%20des%20Sciences%20et%20Techniques!5e0!3m2!1sfr!2sma!4v1716252253629!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 col-lg-5 px-0">
          <form action="{{url('contact')}}" class="main_form" id="request" method="POST">
            <div class="col-md-12">
              @csrf
              <input type="text" placeholder="Name" name="name" required/>
            </div>
            <div class="col-md-12">
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="col-md-12">
              <input type="number" placeholder="Phone" name="phone" required />
            </div>
            <div class="col-md-12">
              <input type="text" class="message-box" placeholder="Message" name="message" required/>
            </div>
            <div class="col-md-12 ">
              <button type="submit" class="send_btn">
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <br><br><br>