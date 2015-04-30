
    <div class="container" style="padding-top:15px">
      <!-- form for searching games by name -->
      <div class="col-md-4">
        <form action="javascript:searchName()" method="POST" style="padding-top:20px">
          <h4 align="center" style="color:#1fa67b"> Search Game By Name </h4>
          <div class="form-group">
            <input type="text" id="searchName" class="form-control" placeholder="Enter Game Name"required="required">
          </div>
          <input style="font-size:14px" type="submit" value="Search By Name" id="submitName" class="btn btn-custom btn-lg btn-block"/>
        </form>
        <hr>
      </div>
      <div class="col-md-4">
        <form action="javascript:searchDeveloper()" method="POST" style="padding-top:20px">
          <h4 align="center" style="color:#1fa67b"> Search Game By Developer </h4>
          <div class="form-group">
            <input type="text" id="searchDeveloper" class="form-control" placeholder="Enter Developer Name"required="required">
          </div>
          <input style="font-size:14px" type="submit" value="Search By Developer" id="submitDeveloper" class="btn btn-custom btn-lg btn-block"/>
        </form>
        <hr>
      </div>
      <div class="col-md-4">
        <form action="javascript:searchPublisher()" method="POST" style="padding-top:20px">
          <h4 align="center" style="color:#1fa67b"> Search Game By Publisher </h4>
          <div class="form-group">
            <input type="text" id="searchPublisher" class="form-control" placeholder="Enter Publisher Name"required="required">
          </div>
          <input style="font-size:14px" type="submit" value="Search By Publisher" id="submitPublisher" class="btn btn-custom btn-lg btn-block"/>
        </form>
        <hr>
      </div>

      <div id="animsition-results" class="animsition">
        <div id="results"></div>
      </div>
    </div>
