
    <div class="container" style="padding-top:20px">
      <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
        <div class="jumbotron">
          <h3 align="center" style="color:#1fa67b"> Contact Us </h3>
          <form action="javascript:checkContactForm();">
            <div class="form-group">
              <label for="name" style="color:#1fa67b"> Full Name </label>
              <input type="text" id="name" value=""  class="form-control" placeholder="Enter Full Name">
            </div>

            <div class="form-group">
              <label for="email" style="color:#1fa67b"> Email Address </label>
              <input type="text" id="email" value="" class="form-control" placeholder="Enter Email Address">
            </div>

            <div class="form-group">
              <label for="phone" style="color:#1fa67b"> Phone Number (Optional) </label>
              <input type="text" id="phone" value="" class="form-control" placeholder="Enter Phone Number">
            </div>

            <div class="form-group">
              <label for="message" style="color:#1fa67b"> Message </label>
              <textarea rows="10" id="message" class="form-control" placeholder="Enter Message..."></textarea>
            </div>

            <input style="font-size:14px" type="submit" value="Contact Us" id="contact" class="btn btn-custom btn-lg btn-block"/>
          </form>
        </div>
      </div>
    </div>

    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    </style>

    <div class="container">
      <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
        <div id="map-canvas" style="height:500px"></div>
      </div>
    </div>
