        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                      <form action="process.php" method="post" enctype="multipart/form-data" id="js-upload-form">
            <div class="span3">
                <label>First Name</label> <input class="span3" placeholder=
                "Your First Name" type="text"> <label>Last Name</label>
                <input class="span3" placeholder="Your Last Name" type="text">
                <label>Email Address</label> <input class="span3" placeholder=
                "Your email address" type="text"> <label>Subject</label>
                <select class="span3" id="subject" name="subject">
                    <option selected value="na">
                        Choose One:
                    </option>
    
                    <option value="service">
                        General Customer Service
                    </option>
    
                    <option value="suggestions">
                        Suggestions
                    </option>
    
                    <option value="product">
                        Product Support
                    </option>
                </select>
            </div>
    
            <div class="span5">
                

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
     
            <div class="form-inline">
              <div class="form-group">
                <input type="file" name="files[]" id="js-upload-files" multiple>
              </div>
              <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>
          <div class="upload-drop-zone" id="drop-zone">
            Just drag and drop files here
          </div>

          <!-- Upload Finished -->
          <div class="js-upload-finished">
            <h3>Processed files</h3>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>
            </div>
          </div>

    </div> <!-- /container -->
            </div><button class="btn btn-primary pull-right" type=
            "submit">Send</button>
        </div>
    </form>
</div>
</div>
