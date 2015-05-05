
    <div class="container" style="padding-top:20px">
      <div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
        <div class="jumbotron">
          <font style="color:#1fa67b">
            <h4 align="center" style="color:#1fa67b"> Add Game </h4>
            <form action="javascript:checkFieldsAdd();" method="POST">
              <fieldset>
              <div class="form-group">
                <label> Name </label>
                <input type="text" id="name" class="form-control" placeholder="Enter Game Name">
              </div>
              <div class="form-group">
                <label> Developer </label>
                <input type="text" id="developer" class="form-control" placeholder="Enter Developer Name">
              </div>
              <div class="form-group">
                <label> Publisher </label>
                <input type="text" id="publisher" class="form-control" placeholder="Enter Publisher Name">
              </div>
              <div class="form-group">
                <label> Price </label>
                <input type="number" step="0.01" min="0" id="price" class="form-control" placeholder="Enter Price">
              </div>
              <input style="font-size:14px" type="submit" value="Add Game" id="submitGame" class="btn btn-custom btn-lg btn-block"/>
            </fieldset>
            </form>
          </font>
        </div>
      </div>
    </div>
