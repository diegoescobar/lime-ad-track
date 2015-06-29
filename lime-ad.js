var base_imgs = base + "images/";
var this_ip = "";
var ittr_id = ""
var params = "";

function sendIP(this_ip, params){
  if (window.XMLHttpRequest){ 
	  var xmlhttp2 = new XMLHttpRequest();
  }else{ 
	  var xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp2.open("POST", host+"process.php", true);
	xmlhttp2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	xmlhttp2.setRequestHeader("Content-length", params.length);
	xmlhttp2.timeout = 4000;
	
	xmlhttp2.onreadystatechange=function(){
	if (xmlhttp2.readyState==4 && xmlhttp2.status==200){
			ittr_id = xmlhttp2.responseText.trim();
			document.getElementById('this_ad').href = "process.php?"+params+"&id="+ittr_id ;
		}
	}
	
	xmlhttp2.send(params);
	
}

function blocked(){
	var parent = document.getElementById("this_ad");
	var img = document.getElementById("ad_img");
	var para = document.createElement("p");
	var error = document.createTextNode('Ad Blocker caught this ad');
	para.appendChild(error);
	parent.replaceChild(para,img);

	params = "ip="+this_ip+"&ad="+ad_id+"&view=1&blocked=1&id=";
	document.getElementById('this_ad').href = base+"process.php?"+params;
	
	sendIP(this_ip, params);
}

function loaded(){
	params = "ip="+this_ip+"&ad="+ad_id+"&view=1&blocked=0";
	document.getElementById('ad_img').href = base+"process.php?"+params;
	sendIP(this_ip, params);
}

function create_ad (){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	var addImg = new Image();
	 
	if (width > 800) {
	    ad_width = 728; 
	    ad_height = 90;
	} else if ((width <= 800) && (width > 400)) { 
	 ad_width = 468; 
	    ad_height = 60;
	} else { 
	    ad_width = 320; 
	    ad_height = 50;
	}

	var el = document.createElement('a');
	el.id = "this_ad";
	el.href = base+"process.php?"+params;
	el.innerHTML = "<img id=\"ad_img\" src=\"#\"></a>";
	document.body.appendChild(el);
	
    
    addImg.src = base_imgs+img_series+"_"+ ad_width+"x"+ad_height+".jpg";
    document.getElementById('ad_img').src = addImg.src; 
    
    //setInterval(function () {console.log("timeout")}, 3000);

    addImg.onload = function(){
    	//console.log('Ad Loaded ');
      	loaded();
    }

    addImg.onerror = function(){
    	//console.log('Ad Blocked');
    	blocked();
    }
}


function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
r(function(){	
	
	var ad_id = "1";
	var hostipInfo ="";

   if (window.XMLHttpRequest){ 
		  var xmlhttp = new XMLHttpRequest();
	  }else{ 
		  var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	    xmlhttp.open("GET","http://api.hostip.info/get_html.php",false);
	    xmlhttp.send();
	    hostipInfo = xmlhttp.responseText.trim().split("\n");
	    for(var i = 0; i < hostipInfo.length; i++){
	    	ipAddress = hostipInfo[i].trim().split(":");
	        if ( ipAddress[0] == "IP" ){ 
	        	this_ip = ipAddress[1].trim();
	        	params = "ip="+this_ip+"&ad="+ad_id+"&view=1&blocked=0";
	        	//console.log('IP logged: '+ this_ip);
	        	create_ad();
	        	 
		  	}
	    }
});