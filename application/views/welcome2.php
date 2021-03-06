<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Drag and drop placeholder on PDF documents with mozilla pdf.js, interact.js, boostrap 3 and jQuery</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

  <style>
  
 
  #messageContainer{
	display:none;
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

.circle {
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
}

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
    width:240px;
    height:100%;
    z-index:1;
}

.col-fixed-605{
    margin-left:240px;
    width:605px;
    height:100%;
    z-index:1;
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
    font-size: 12px !important;
}

@media only screen and (max-width: 3500px) {
  body {
    background-color: green;
  }
  .the-canvas{
  height:842px;
  width: 595px;
}
}

@media only screen and (max-width: 1500px) {
  body {
    background-color: gray;
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
  <div class="row">
      <div class="col-md-4" style="padding:10px">
          <a class="btn btn-success btn-block" href="<?php echo base_url() ?>index.php/upload/do_upload">Back TO Upload</a>
      </div>
      <div class="col-md-4" style="padding:10px">
          <button class="btn btn-primary btn-block" onClick="showCoordinates()">Show PDF Placeholders Coordinates</button>
      </div>
      <div class="col-md-4" style="padding:10px">
          <a class="btn btn-warning btn-block" href="<?php echo base_url() ?>index.php/upload/show_uploads">View Updated PDF's</a>
      </div>
  </div>   
  <div class="row">
					<div class="col-md-12" id="pdfManager" style="display:none">	
						<div class="row" id="selectorContainer">
							<div class="col-fixed-240" id="parametriContainer">
							</div>
							<div class="col-fixed-605">
								<div id="pageContainer" class="pdfViewer singlePageView dropzone nopadding" style="background-color:transparent">
									<!-- <canvas id="the-canvas" style="border:1px  solid black"></canvas> -->
 								</div>
							</div>
						</div>
					</div>
				</div>
</div>

<!-- parameters showed on the left sidebar -->
<input id="parameters" type="hidden" value='[{"idParametro":480,"descrizione":"RAPINA","valore":"X","nota":null},{"idParametro":481,"descrizione":"CAUSAL_G00","valore":"X","nota":null},{"idParametro":482,"descrizione":"A","valore":"A","nota":null},{"idParametro":483,"descrizione":"POSTA_REGISTRATA","valore":"X","nota":null},{"idParametro":484,"descrizione":"CD","valore":"CD","nota":null},{"idParametro":485,"descrizione":"DATA_ALERT","valore":"data alert","nota":null},{"idParametro":486,"descrizione":"UP","valore":"UP","nota":null},{"idParametro":488,"descrizione":"DATA_MP","valore":"DATA1","nota":null},{"idParametro":489,"descrizione":"AL_QUALITA","valore":"AL_QUALITA","nota":null},{"idParametro":490,"descrizione":"CAUSAL_G60","valore":"X","nota":null},{"idParametro":491,"descrizione":"DATA","valore":"DATA","nota":null},{"idParametro":492,"descrizione":"DATA_DENUNCIA","valore":"data denuncia","nota":null},{"idParametro":493,"descrizione":"DATA_SPEDIZIONE","valore":"data spedizione","nota":null},{"idParametro":494,"descrizione":"DATA_LAVORAZIONE","valore":"DATA_LAVORAZIONE","nota":null},{"idParametro":495,"descrizione":"NUMERO_FAX","valore":"NUMERO_FAX","nota":null},{"idParametro":496,"descrizione":"SMARRIMENTO","valore":"X","nota":null},{"idParametro":497,"descrizione":"STRUTT_ACCETTAZIONE","valore":"STRUTT_ACCETTAZIONE","nota":null},{"idParametro":498,"descrizione":"FURTO","valore":"X","nota":null},{"idParametro":499,"descrizione":"BARCODE","valore":"BARCODE","nota":null},{"idParametro":502,"descrizione":"CAUSA_MAGGIORE","valore":"X","nota":null},{"idParametro":503,"descrizione":"PACCHI","valore":"X","nota":null},{"idParametro":504,"descrizione":"TIPOLOGIA_EVENTO","valore":"TIPOLOGIA_EVENTO","nota":null},{"idParametro":505,"descrizione":"NOTE","valore":"NOTE","nota":null},{"idParametro":506,"descrizione":"DATA_RITROVAMENTO","valore":"data ritrovamento","nota":null},{"idParametro":507,"descrizione":"DATA_ACCETTAZIONE","valore":"DATA_ACCETTAZIONE","nota":null},{"idParametro":509,"descrizione":"AREA_LOGISTICA","valore":"AREA_LOGISTICA","nota":null},{"idParametro":511,"descrizione":"DA","valore":"DA","nota":null}]' />
<!-- Below the pdf base 64 rapresentation -->
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<input id="file_name" type="hidden" value="<?php echo $file_name;?>">
<input id="file_path" type="hidden" value="<?php echo $location;?>">


<div class="container">
<input type="text" id="trello" placeholder="Add Text">
<button class="btn btn-danger add_text">Add</button>
</div>
</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>

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
var offsetY = 7;
 
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
    $( "#pageContainer" ).append(`<canvas id="the-canvas-${i}" class="the-canvas" style="border:1px  solid black"></canvas>`);
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
		 $('#parametriContainer').empty();
	   renderizzaPlaceholder(0, parametri);	
	});
  
  function renderizzaPlaceholder(currentPage, parametri){
		  var maxHTMLx = $('.the-canvas-1').width();
			var maxHTMLy = $('.the-canvas-1').height();
		
			var paramContainerWidth = $('#parametriContainer').width();
			var yCounterOfGenerated = 0;
			var numOfMaxItem = 25;
			var notValidHeight = 30;
			var y = 0;
			var x = 6;
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
				/*il placeholder non ?? valido: lo incolonna a sinistra*/
		
				if(i > 0 && i%numOfMaxItem == 0){
					yCounterOfGenerated = 0;
				}

				var classStyle = "";
				var valore = param.valore;
				/*il placeholder non ?? valido: lo incolonna a sinistra*/
				y = yCounterOfGenerated;
				yCounterOfGenerated += notValidHeight;
				classStyle = "drag-drop dropped-out";


				
				$("#parametriContainer").append('<div class="'+classStyle+'" data-id="-1" data-page="'+page+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px); display:'+display+'">  <span class="circle"></span><span class="descrizione">'+param.descrizione+' </span></div>');
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
			$("#parametriContainer").append('<ul id="pager" class="pager" style="transform: translate('+x+'px, '+y+'px); width:200px;"><li onclick="changePage('+prevDisabled+','+currentPage+',-1)" class="page-item '+prevStyle+'"><span>??</span></li><li onclick="changePage('+nextDisabled+','+currentPage+',1)" class="page-item '+nextStyle+'" style="margin-left:10px;"><span>&raquo;</span></li></ul>');
			
	 }
  
  	function renderizzaInPagina(parametri){
		var maxHTMLx = $('.the-canvas-1').width();
		var maxHTMLy = $('.the-canvas-1').height();
	
		var paramContainerWidth = $('#parametriContainer').width();
		var yCounterOfGenerated = 0;
		var numOfMaxItem = 26;
		var notValidHeight = 30;
		var y = 0;
		var x = 6;
  		for (i = 0; i < parametri.length; i++) {
			var param = parametri[i];
			
			var classStyle = "drag-drop can-drop";
			var valore = param.valore;
			/*il placeholder non ?? valido: lo incolonna a sinistra*/
			
			var pdfY = maxPDFy - param.posizioneY - offsetY;
			y = (pdfY * maxHTMLy) / maxPDFy;
			x = ((param.posizioneX * maxHTMLx) / maxPDFx) + paramContainerWidth;
	
			$("#parametriContainer").append('<div class="'+classStyle+'" data-id="'+param.idParametroModulo+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px);">  <span class="circle"></span><span class="descrizione">'+param.descrizione+' </span></div>');
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
  	  
  	  var maxHTMLx = $('.the-canvas-1').width();
  	  var maxHTMLy = $('.the-canvas-1').height();
      var paramContainerWidth = $('#parametriContainer').width();
  	  
  	  //recupera tutti i placholder validi
  	  $('.drag-drop.can-drop').each(function( index ) {
  		  var x = parseFloat($(this).data("x"));
  		  var y = parseFloat($(this).data("y"));
  		  var valore = $(this).data("valore");
  		  var descrizione = $(this).find(".descrizione").text();
  		    
  		  var pdfY = y;
  		  var posizioneY = y;	  
  		  var posizioneX =  (x * maxPDFx / maxHTMLx)  - paramContainerWidth;
  		  
  		  var val = {"descrizione": descrizione, "posizioneX":posizioneX,   "posizioneY":posizioneY, "valore":valore};
  		  validi.push(val);
      
  	  });
    
      if(validi.length == 0){
         alert('No placeholder dragged into document');
      }
     else{
       alert(JSON.stringify(validi));
       console.log(validi);
       console.log("hello");
       let doc= new jsPDF('p','pt','a4');
       var canvas = document.getElementById("the-canvas-1");
       var ctx = canvas.getContext("2d");
       ctx.font = "12px Arial";
       //ctx.fillText("Hello World", 10, 50); 
       for(let i=0;i<validi.length;i++)
         {
           let x=validi[i].posizioneX;
           let y=validi[i].posizioneY;
           let name=validi[i].descrizione;
           //console.log(x);
           //console.log(y);
           doc.text(name,x,y);
           ctx.fillText(name, x, y); 
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


       $.ajax({
				    type: 'ajax',
            method:'POST',
			    	url: '<?= base_url("index.php/upload/points_upload"); ?>',
            data:{points:validi,pdf_name:file_name,pdf_location:file_path},
            dataType: 'json',
				    async: true,
				success: function(data){

					alert('Success points are uploaded');
          console.log(data);
				},
        error: function (request, status, error) {
        alert(request.responseText);
        }
        }); 
       
     }
     
  }
  /* $('.add_text').click(function(){
      console.log($('#parameters').val());
      let list=JSON.parse($('#parameters').val());
      let val=$('#trello').val();
      let feed = {"descrizione": val, "nota":null,"valore":val,"idParametro":100};
      list.push(feed);
      console.log(list);
      console.log("hello world");
      $('#parameters').val(JSON.stringify(list));
      console.log($('#parameters').val());
      $('#pdfManager').show();
	  var parametri = JSON.parse($('#parameters').val());
	  $('#parametriContainer').empty();
	  renderizzaPlaceholder(0, parametri);	
  }); */
  </script>


</body>

</html>