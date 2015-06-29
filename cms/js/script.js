+ function($) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    
    var elementInDocument = function(element) {
        while (element = element.parentNode) {
            if (element == document) {
                return true;
            }
        }
        return false;
    }
    
    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');
	if (elementInDocument(uploadForm)){
	    var startUpload = function(files) {
	    	
	    	// Create a new FormData object.
	    	var formData = new FormData();
	    	
	        console.log(files)
	        
	        // Loop through each of the selected files.
			for (var i = 0; i < files.length; i++) {
			  var file = files[i];
			
		
			  // Add the file to the request.
			  formData.append('images[]', file, file.name);
			}
	        
	        uploadAds( formData );
	        
	    }
	
	    var uploadAds = function(formData){
	    	// Set up the request.
		    var xhr = new XMLHttpRequest();
		    
		    
		    // Open the connection.
		    xhr.open('POST', 'handler.php', true);
		    
		    // Set up a handler for when the request finishes.
		    xhr.onload = function () {
		      if (xhr.status === 200) {
		        // File(s) uploaded.
		        uploadButton.innerHTML = 'Upload';
		      } else {
		        alert('An error occurred!');
		      }
		    };
		    
		    // Send the Data.
		    xhr.send(formData);
		    
	    }
	    
	    
	    
	    uploadForm.addEventListener('submit', function(e) {
	        var uploadFiles = document.getElementById('js-upload-files').files;
	        e.preventDefault()
	
	        startUpload(uploadFiles)
	    })
	
	    dropZone.ondrop = function(e) {
	        e.preventDefault();
	        this.className = 'upload-drop-zone';
	
	        startUpload(e.dataTransfer.files)
	    }
	
	    dropZone.ondragover = function() {
	        this.className = 'upload-drop-zone drop';
	        return false;
	    }
	
	    dropZone.ondragleave = function() {
	        this.className = 'upload-drop-zone';
	        return false;
	    }
    }
	    
	   
	    
}(jQuery);

