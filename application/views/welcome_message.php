<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Drag and drop placeholder on PDF documents with mozilla pdf.js, interact.js, boostrap 3 and jQuery</title>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

  <style>
  
 
  #messageContainer{
	display:none;
}
a {
    text-decoration: none !important;
}
#outer-dropzone {
  height: 140px;

  touch-action: none;
}

#inner-dropzone {
  height: 80px;
}

.dropzone {
  background-color: #ccc;
  border: dashed 4px transparent;
  border-radius: 4px;
  margin: 10px auto 30px;
  padding: 10px;
  width: 100%;
  transition: background-color 0.3s;
}

.drop-active {
  border-color: #aaa;
}

.drop-target {
  background-color: #29e;
  border-color: #fff;
  border-style: solid;
}

.drag-drop {
  display: inline-block;
  position:absolute;
  z-index:999;
  min-width: 40px;
  padding: 0em 0.5em;
  padding-left:0;
  color: #fff;
  background-color: #29e;
  border: none;

  -webkit-transform: translate(0px, 0px);
          transform: translate(0px, 0px);

  transition: background-color 0.3s;
  line-height: 10px;
  padding-right: 0 !important;
  padding-left: 5px !important;
}

.canvas{
  margin:0px;
}

.drag-drop.can-drop {
  color: #000;
  background-color: transparent;
  opacity:0.9;
  /* IE 8 */
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";

  /* IE 5-7 */
  filter: alpha(opacity=90);

  /* Netscape */
  -moz-opacity: 0.9;

  /* Safari 1.x */
  -khtml-opacity: 0.9;
}

.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}
body{
  font-family: "Roboto";
}
/* Text box a bullet asa seta removal
*/
/* .circle {
	  width: 10px;
    height: 10px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background: #323c3c;
    float: left;
	display: inline-block;
    margin-top: 1px;
    margin-right: 2px;
} */

.dropped-out{
	display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    width:200px;
    color: black;
}

.col-fixed-240{
  margin-left:60px;
    width:240px;
    height:100%;
    z-index:1;
}

.col-fixed-605{
    margin-left:0px;
    width:605px;
    height:100%;
    z-index:0;
}
.col-fixed-65{
    width:800px;
    height:100%;
    z-index:0;
}

.page-item{
	cursor:pointer;
}

.pager{
	margin-bottom:30px !important;
	margin-top:0px !important;
	margin-bottom: -31px !important;
}

.drag-drop.dropped-out .descrizione {
    font-size: 20px;
}

@media only screen and (max-width: 3500px) {
  .the-canvas{
  height:842px;
  width: 595px;
  
}
}

@media only screen and (max-width: 1344px) {
  body {
    background-color: aqua;
  }
  .the-canvas{
  height:842px;
  width: 595px;
}
}

@media only screen and (max-width: 1000px) {
  body {
    background-color: pink;
  }
  .the-canvas{
  height:742px;
  width: 450px;
}
}
@media only screen and (max-width: 900px) {
  body {
    background-color: green;
  }
  .the-canvas{
  height:742px;
  width: 400px;
}
}

@media only screen and (max-width: 700px) {
  body {
    background-color: lightblue;
  }
  .the-canvas{
  height:742px;
  width: 350px;
}
}

@media only screen and (max-width: 800px) {
  body {
    background-color: red;
  }
  .the-canvas{
  height:742px;
  width: 300px;
}
}



@media only screen and (max-width: 600px) {
  body {
    background-color: yellow;
  }
  .the-canvas{
  height:742px;
  width: 250px;
}
}

  </style>

  </style>

  
</head>

<body>
<div class="container">
     <div class="text-center">
      <h1 class="h3 m-5">Upload And Edit Your PDF</h1>
      <hr>
     </div>
  </div>
<!-- <div class="container-fluid">
            <div class="d-flex justify-content-between m-5">
                <div class="header">
                    <h5><i class="material-icons">PDF Updater</i></h5>
                </div>
            <div class="nav">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item px-2 text-secondary" > <a href="album.html">Home</a></li>
                    <li class="list-inline-item  px-2 text-secondary"> <a href='<?= base_url("index.php/upload/do_upload"); ?>' >Upload PDF</a></li>
                    <li class="list-inline-item  px-2  text-secondary"> <a href='<?= base_url("index.php/upload/show_uploads"); ?>'>Show PDF</a></li>
                    <li class="list-inline-item  px-2  text-secondary"> <a href="blogsingle.html">About</a></li>
                    <li class="list-inline-item px-2  text-secondary"> <a href='<?= base_url("index.php/upload/logout"); ?>'>Logout</a></li>
                </ul>
            </div>
          </div>
  </div> -->
  <div class="container"> 
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      PDF is Successfully Uploaded
      </div>
    </div>
  </div>
</div>

  <div class="row">
  
      <!-- <div class="col-md-12" style="padding:10px">
          <button class="btn btn-success btn-block" onClick="showCoordinates()"  data-toggle="modal" data-target="#exampleModalLong">Upload PDF</button>
      </div> -->
  <div class="row pdf" style="margin-top:50px; ">
           
  <span class="border border-primary"></span>

					<div class="col-md-12" id="pdfManager" style="display:none">	 
          
						<div class="row" id="selectorContainer">
            <div class="col-2 text-white">
                    <p class="lead text-warning">Add Text For PDF</p>
                    <div class="row  card shadow-lg p-2">
                            <label for="trello">Add Text</label>
                            <input type="text" class="form-control" id="trello"  placeholder="Add Text" required>          
                            <label for="font_size">Choose Font</label>
                            <input type="number" id="font_size" value="10" min="5" max="50" step="5" class="form-control">
                            <button class="btn btn-success btn-block add_text mt-3" >Add</button>
                            
                    </div>
                    <div>
                    <button class="btn btn-primary btn-block mt-3" onClick="showCoordinates()"  data-toggle="modal" data-target="#exampleModalLong">Upload PDF</button>                        
                    </div>
                    <div id="parametriContainer">
                          <div class="row card" id="parametriContainer1">
                          </div>
                    </div>
    </div>    
		<div class="col-9 bg-dark p-0 ml-3">
					<div id="pageContainer"  class="pdfViewer singlePageView dropzone nopadding" style="background-color:transparent">
									<!-- <canvas id="the-canvas" style="border:1px  solid black"></canvas> -->
 					</div>
			</div>
	</div>
</div>

<div class="alert alert-warning alert-dismissible fade show text-center bg-prinary text-white" role="alert" style="display:none">
  <strong class="text-success">You have Successfully Uploaded Your PDF</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!-- parameters showed on the left sidebar -->
<input id="parameters" type="hidden"  />
<!-- Below the pdf base 64 rapresentation -->
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<input id="file_name" type="hidden" value="<?php echo $file_name;?>">
<input id="file_path" type="hidden" value="<?php echo $location;?>">
<input id="note" type="hidden" value="<?php echo $note;?>">


<!-- <div class="container-fluid bg-dark text-white m-0">
   <div class="row">
     <div class="col-lg-4 mt-5">
     <p class="ml-4 lead"><i class="material-icons bg-danger" id="'+i+'" onclick="myFunction(this)">picture_as_pdf</i></h5>
      <p class="text-danger">PDF UPDATER</h5>
     </div>
     <div class="col-lg-4 text-center mt-5">
        
        <p> Copyright © 2020 All rights reserved</p>
     </div>
     <div class="col-lg-4 d-flex justify-content-end  mt-5">
     <i class="fa fa-facebook text-white mr-4"></i>
     <i class="fa fa-twitter  text-white mr-4"></i>
     <i class="fa fa-youtube  text-white mr-5"></i>
     </div>
   </div>
</div> -->

  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>
 -->
 <script>
 var pdfData = atob($('#pdfBase64').val());
 var file_name = $('#file_name').val();
 var file_path = $('#file_path').val();
 //alert(file_name);
 //alert(file_path);
 /*
 *  costanti per i placaholder 
 */
var maxPDFx = 595;
var maxPDFy = 842;
var offsetY = 0;
let hei=0;
 
'use strict';


// The workerSrc property shall be specified.
//
pdfjsLib.GlobalWorkerOptions.workerSrc =
  'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js';

  //
  // Asynchronous download PDF
  //
  var loadingTask = pdfjsLib.getDocument({data: pdfData});
  loadingTask.promise.then(function(pdf) {
    let x=pdf.numPages;
    console.log(x);
    for(let i=1;i<=x;i++){
    $( "#pageContainer" ).append(`<canvas id="the-canvas-${i}" class="the-canvas" style="font-size:20px;margin-left:135px;"></canvas>`);
    pdf.getPage(i).then(function(page) {
      var scale = 1.0;
      var viewport = page.getViewport(scale);
      //
      // Prepare canvas using PDF page dimensions
      //
      var canvas = document.getElementById(`the-canvas-${i}`);
      var context = canvas.getContext('2d');
      canvas.height = viewport.height;
      canvas.width = viewport.width;
      //
      // Render PDF page into canvas context
      //
      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      //page.render(renderContext);
      
      page.render(renderContext).then(function() {
    	  $(document).trigger("pagerendered");
    	}, function() {
    	  console.log("ERROR");
    	});
      
    });
    }
  });

  
  /* The dragging code for '.draggable' from the demo above
   * applies to this demo as well so it doesn't have to be repeated. */

  // enable draggables to be dropped into this
  interact('.dropzone').dropzone({
    // only accept elements matching this CSS selector
    accept: '.drag-drop',
    // Require a 100% element overlap for a drop to be possible
    overlap: 1,

    // listen for drop related events:

    ondropactivate: function (event) {
      // add active dropzone feedback
      event.target.classList.add('drop-active');
    },
    ondragenter: function (event) {
      var draggableElement = event.relatedTarget,
          dropzoneElement = event.target;

      // feedback the possibility of a drop
      dropzoneElement.classList.add('drop-target');
      draggableElement.classList.add('can-drop');
      draggableElement.classList.remove('dropped-out');
      //draggableElement.textContent = 'Dragged in';
    },
    ondragleave: function (event) {
      // remove the drop feedback style
      event.target.classList.remove('drop-target');
      event.relatedTarget.classList.remove('can-drop');
      event.relatedTarget.classList.add('dropped-out');
      //event.relatedTarget.textContent = 'Dragged out';
    },
    ondrop: function (event) {
      //event.relatedTarget.textContent = 'Dropped';
    },
    ondropdeactivate: function (event) {
      // remove active dropzone feedback
      event.target.classList.remove('drop-active');
      event.target.classList.remove('drop-target');
    }
  });

  interact('.drag-drop')
    .draggable({
      inertia: true,
      restrict: {
        restriction: "#selectorContainer",
        endOnly: true,
        elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
      },
      autoScroll: true,
      // dragMoveListener from the dragging demo above
      onmove: dragMoveListener,
    });
  
  
  function dragMoveListener (event) {
	    var target = event.target,
	        // keep the dragged position in the data-x/data-y attributes
	        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
	        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

	    // translate the element
	    target.style.webkitTransform =
	    target.style.transform ='translate(' + x + 'px, ' + y + 'px)';

	    // update the posiion attributes
	    target.setAttribute('data-x', x);
	    target.setAttribute('data-y', y);
	  }

	  // this is used later in the resizing demo
	  window.dragMoveListener = dragMoveListener;

  $(document).bind('pagerendered', function (e) {
	   $('#pdfManager').show();
	   var parametri = JSON.parse($('#parameters').val());
		 $('#parametriContainer1').empty();
	   renderizzaPlaceholder(0, parametri);	
	});
  
  function renderizzaPlaceholder(currentPage, parametri){
		  var maxHTMLx = $('.the-canvas').width();
			var maxHTMLy = $('.the-canvas').height();
		
			var paramContainerWidth = $('#parametriContainer').width();
			var yCounterOfGenerated = 0;
			var numOfMaxItem = 25;
			var notValidHeight = 30;
			var y = 0;
			var x = 0;
			var page=0;
			

			var totalPages=Math.ceil(parametri.length/numOfMaxItem);
			
			for (i = 0; i < parametri.length; i++) {
				var param = parametri[i];
				var page = Math.floor(i/numOfMaxItem);
				var display= currentPage == page ? "block" : "none";
				
				if(i > 0 && i%numOfMaxItem == 0){
					yCounterOfGenerated = 0;
				}

				var classStyle = "";
				var valore = param.valore;
				/*il placeholder non è valido: lo incolonna a sinistra*/
		
				if(i > 0 && i%numOfMaxItem == 0){
					yCounterOfGenerated = 0;
				}

				var classStyle = "";
				var valore = param.valore;
				/*il placeholder non è valido: lo incolonna a sinistra*/
				y = yCounterOfGenerated;
				yCounterOfGenerated += notValidHeight;
				classStyle = "drag-drop dropped-out";


				
				$("#parametriContainer1").append('<div class="'+classStyle+'" data-id="-1" data-page="'+page+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px); display:'+display+'">  <span class="circle"></span><span class="descrizione">'+param.descrizione+' </span></div>');
			}
			
			y = notValidHeight * (numOfMaxItem+1);
			var prevStyle = "";
			var nextStyle = "";
			var prevDisabled = false;
			var nextDisabled = false;
			if(currentPage == 0){
				prevStyle = "disabled";
				prevDisabled = true;
			}
			
			if(currentPage >= totalPages-1 || totalPages == 1){
				nextDisabled=true;
				nextStyle="disabled";
			} 
			
			//Aggiunge la paginazione
			$("#parametriContainer1").append('<ul id="pager" class="pager" style="transform: translate('+x+'px, '+y+'px); width:200px;"><li onclick="changePage('+prevDisabled+','+currentPage+',-1)" class="page-item '+prevStyle+'"><span>«</span></li><li onclick="changePage('+nextDisabled+','+currentPage+',1)" class="page-item '+nextStyle+'" style="margin-left:10px;"><span>&raquo;</span></li></ul>');
			
	 }
  
  	function renderizzaInPagina(parametri){
		var maxHTMLx = $('.the-canvas').width();
		var maxHTMLy = $('.the-canvas').height();
	
		var paramContainerWidth = $('#parametriContainer').width();
		var yCounterOfGenerated = 0;
		var numOfMaxItem = 26;
		var notValidHeight = 30;
		var y = 0;
		var x = 0;
  		for (i = 0; i < parametri.length; i++) {
			var param = parametri[i];
			
			var classStyle = "drag-drop can-drop";
			var valore = param.valore;
			/*il placeholder non è valido: lo incolonna a sinistra*/
			
			var pdfY = maxPDFy - param.posizioneY - offsetY;
			y = (pdfY * maxHTMLy) / maxPDFy;
			x = ((param.posizioneX * maxHTMLx) / maxPDFx) + paramContainerWidth;
	
			$("#parametriContainer1").prepend('<div class="'+classStyle+'" data-id="'+param.idParametroModulo+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px);">  <span class="circle"></span><span class="descrizione">'+param.descrizione+' </span></div>');
		}
  	}
	 
	 
	 function changePage(disabled, currentPage, delta){
		 if(disabled){
			return;	 
		 }

		 /*recupera solo i parametri non posizionati in pagina*/
		 var parametri = [];
		 $(".drag-drop.dropped-out").each(function() {
			var valore = $(this).data("valore");
			var descrizione = $(this).find(".descrizione").text();
			parametri.push({valore:valore, descrizione:descrizione, posizioneX:-1000, posizioneY:-1000});
			$(this).remove();
		 });
		 
		 //svuota il contentitore
		 $('#pager').remove();
		 currentPage += delta;
		 renderizzaPlaceholder(currentPage, parametri);
		 //aggiorna lo stato dei pulsanti
		 //aggiorna gli elementi visualizzati
	 }

  
  function showCoordinates(){
      var validi = [];
  	  var nonValidi = [];
  	  var maxHTMLx = $('.the-canvas').width();
  	  var maxHTMLy = $('.the-canvas').height();
      //alert(maxHTMLx);
      //alert(maxHTMLy);
      var paramContainerWidth = $('#parametriContainer').width();
  	  
  	  //recupera tutti i placholder validi
  	  $('.drag-drop.can-drop').each(function( index ) {
  		  var x = parseFloat($(this).data("x"));
  		  var y = parseFloat($(this).data("y"));
        var valore = $(this).data("valore");
        var fontSize=$(this).css("font-size");
        console.log(fontSize);
  		  var descrizione = $(this).find(".descrizione").text();
  		    
  		  var pdfY = y;
  		  var posizioneY = y;	  
  		  var posizioneX =  (x * maxPDFx / maxHTMLx)  - paramContainerWidth;
  		  
  		  var val = {"descrizione": descrizione, "posizioneX":posizioneX,   "posizioneY":posizioneY, "valore":valore,"size":fontSize};
  		  validi.push(val);
      
  	  });
    
      if(validi.length == 0){
         alert('No placeholder dragged into document');
      }
     else{
      $('.drag-drop.can-drop').remove();
       //alert(JSON.stringify(validi));
       console.log(validi);
       console.log("hello");
       //let doc= new jsPDF('p','pt','a4');
       
       //ctx.fillText("Hello World", 10, 50); 
       for(let i=0;i<validi.length;i++)
         {
          validi[i].posizioneX+=15;
          validi[i].posizioneY+=(100+46+20+45);
          validi[i].posizioneX-=240;
          let x=validi[i].posizioneX;
          let y=validi[i].posizioneY;
          let name=validi[i].descrizione;
          let id=y/842;
          let fontSize=parseInt(validi[i].size);
          //alert(fontSize);
          //alert(id);
          id=Math.floor(id);
          id++;
          //alert(id);
          var canvas = document.getElementById(`the-canvas-${id}`);
          var ctx = canvas.getContext("2d");
          //var fontSize = parseInt($("#trello").css("font-size"));
          ctx.font = `${fontSize}px Roboto`;
           
           //console.log(x);
           //console.log(y);
           //doc.text(name,x,y);
           id--;
           ctx.fillText(name, x-15, y-(id*842)+5); 
         }
       //console.log(doc.internal.getNumberOfPages());
         //doc.save('auto.pdf');
         console.log("saved");
         console.log("hello");
       
       /* var canvas = document.getElementById("the-canvas-1");
       var ctx = canvas.getContext("2d");
       ctx.font = "20px Arial";
       ctx.fillText("Hello World", 10, 50);  */


       /***************************************************************
       
       
       
       
       
       ajax post request for saving data points
       
       
       
       
       ******************************************************************** */

      let nt=$('#note').val();
       $.ajax({
				    type: 'ajax',
            method:'POST',
			    	url: '<?= base_url("index.php/upload/points_upload"); ?>',
            data:{points:validi,pdf_name:file_name,pdf_location:file_path,note:nt},
            dataType: 'json',
				    async: true,
				success: function(data){

					//alert('Success points are uploaded');
          console.log(data);
          //$('.alert').show();
				},
        error: function (request, status, error) {
        alert(request.responseText);
        }
        }); 
       
     }
     
  }
  let x=1000;
  $('.add_text').click(function(){
      //console.log($('#parameters').val());
      //let list=JSON.parse($('#parameters').val());
      //let val=$('#trello').val();
      //$('#trello').val("");
      //alert($('#trello').style.fontSize);
      var fontSize = parseInt($("#trello").css("font-size"));
      //alert(fontSize);
      fontSize+=5;
      fontSize=$('#font_size').val();
      // $("#trello").css({'font-size':fontSize});
      //$(".pdf").css({'font-size':fontSize});
      //($(".pdf").css("font-size"));
      //$('.pdf').attr('style', $('.pdf').attr('style') + '; ' + 'font-size: '+fontSize+'px !important');

      let val=$('#trello').val();
       
      //let feed = {"descrizione": val, "nota":null,"valore":val,"idParametro":x};
      //x++;
      let x=0;
      let y=hei;
      hei+=40;
      $("#parametriContainer1").prepend('<div class="drag-drop dropped-out" data-id="-1" data-page="'+0+'" data-toggle="'+val+'" data-valore="'+val+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px); display:block;font-size:'+fontSize+'px;>  <span class="circle"></span><span class="descrizione">'+val+' </span></div>');
      //list.push(feed);
      //console.log(list);
      //console.log("hello world");
      //$('#parameters').val(JSON.stringify(list));
     // console.log($('#parameters').val());
      //$('#pdfManager').show();
	  //var parametri = JSON.parse($('#parameters').val());
	  //$('#parametriContainer').empty();
	  //renderizzaPlaceholder(0, parametri);	
  });
  </script>
</div>
</div>
</body>
<div class="container-fluid bg-primary text-white mt-3 pl-1" style="width:100%;">
   <div class="row">
     <div class="col-lg-4">
     <img src="https://www.freelogodesign.org/file/app/client/thumb/a32a4c35-b18c-4c25-b5c1-dd1b126b4835_200x200.png?1606635553802" alt="" height="80px;">   
     </div>
     <div class="col-lg-4 text-center mt-4">
        
        <p> Copyright © 2020 All rights reserved</p>
     </div>
     <div class="col-lg-4 d-flex justify-content-end  mt-4">
     <i class="fa fa-facebook text-white mr-4"></i>
     <i class="fa fa-twitter  text-white mr-4"></i>
     <i class="fa fa-youtube  text-white mr-5"></i>
     </div>
   </div>
</div>

</html>