<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Show Pdf</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2020.3.1118/styles/kendo.default-v2.min.css" />
  <script src="https://kendo.cdn.telerik.com/2017.3.913/js/pako_deflate.min.js"></script>
  <script src="  https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <script src="  https://printjs-4de6.kxcdn.com/print.min.css"></script>
  <script src="https://kendo.cdn.telerik.com/2020.3.1118/js/jquery.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2020.3.1118/js/jszip.min.js"></script>  
  <script src="https://kendo.cdn.telerik.com/2020.3.1118/js/kendo.all.min.js"></script>
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url("css/bootstrap.min.css"); ?>"/>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
      feather.replace()
    </script>

  <style>
  body {
  font-size: .875rem;
}
body {
  font-size: .875rem;
  font-family: 'Roboto', sans-serif;
}
   td{
    font-size: .875rem;
    font-family: 'Raleway', sans-serif !important;
   }

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}
th{
  color:rgb(7, 123, 240);
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/*
 * Utilities
 */

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

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
    width:400px;
    height:100%;
    z-index:1;
}

.col-fixed-605{
    /* margin-left:240px; */
    margin-left:40px;
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

#the-canvas{
  height:842px;
  width: 595px;
}

  </style>

  
</head>

<body>


    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href='<?= base_url("index.php/admin/index"); ?>'>
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href='<?= base_url("index.php/admin/show_all_activity"); ?>'>
                  <span data-feather="file"></span>
                  All Activity
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_pdf"); ?>'>
                  <span data-feather="shopping-cart"></span>
                  All PDFs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_user"); ?>'>
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/show_all_stat"); ?>'>
                  <span data-feather="bar-chart-2"></span>
                  All Statistics
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href='<?= base_url("index.php/admin/logout"); ?>'>
                  <span data-feather="layers"></span>
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>

        
<div class="container"> 
  <div class="row mb-5">
  <div class="col-md-4" style="padding:10px">
  <button class="btn btn-outline-secondary btn-block" onclick="printJS('pageContainer', 'html')">Download PDF</button>
      </div>
      <div class="col-md-8" style="padding:10px">
          <button class="btn btn-outline-secondary btn-block"  onClick="showCoordinates()">Show Edited PDF</button>
      </div>
  </div>   
  <div class="row">
					<div class="col-md-12" id="pdfManager" style="display:none">
                    	
						<div class="row " id="selectorContainer">
            <div class="position-sticky col-fixed-240 bg-secondary p-0 bg-secondary m-0" id="parametriContainer2" style="margin-top:50px;margin-left:30px;">
                 <h1 class="h4 text-white text-center p-3">Pdf Imformation</h1>
                        <div class="card  shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title">PDF Name: <small><?php echo $pd[0]['pdf_name'];?></small></h5>
                            <h5 class="card-title">Uploaded By: XYZ</h5>
                            <p class="card-text">Notes: Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="small text-muted mb-0 text-left">Created At: </p>
                            <p class="small text-muted  text-left">Up[dated At: </p>
                            <p class="small text-muted  text-left">Number of Edits: </p>
                            <div class="row">
                
                            </div>
                          </div> 
                        </div>
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
<!-- <input id="parameters" type="hidden" /> -->
<input id="parameters" type="hidden" value='[{"idParametro":480,"descrizione":"RAPINA","valore":"X","nota":null},{"idParametro":481,"descrizione":"CAUSAL_G00","valore":"X","nota":null},{"idParametro":482,"descrizione":"A","valore":"A","nota":null},{"idParametro":483,"descrizione":"POSTA_REGISTRATA","valore":"X","nota":null},{"idParametro":484,"descrizione":"CD","valore":"CD","nota":null},{"idParametro":485,"descrizione":"DATA_ALERT","valore":"data alert","nota":null},{"idParametro":486,"descrizione":"UP","valore":"UP","nota":null},{"idParametro":488,"descrizione":"DATA_MP","valore":"DATA1","nota":null},{"idParametro":489,"descrizione":"AL_QUALITA","valore":"AL_QUALITA","nota":null},{"idParametro":490,"descrizione":"CAUSAL_G60","valore":"X","nota":null},{"idParametro":491,"descrizione":"DATA","valore":"DATA","nota":null},{"idParametro":492,"descrizione":"DATA_DENUNCIA","valore":"data denuncia","nota":null},{"idParametro":493,"descrizione":"DATA_SPEDIZIONE","valore":"data spedizione","nota":null},{"idParametro":494,"descrizione":"DATA_LAVORAZIONE","valore":"DATA_LAVORAZIONE","nota":null},{"idParametro":495,"descrizione":"NUMERO_FAX","valore":"NUMERO_FAX","nota":null},{"idParametro":496,"descrizione":"SMARRIMENTO","valore":"X","nota":null},{"idParametro":497,"descrizione":"STRUTT_ACCETTAZIONE","valore":"STRUTT_ACCETTAZIONE","nota":null},{"idParametro":498,"descrizione":"FURTO","valore":"X","nota":null},{"idParametro":499,"descrizione":"BARCODE","valore":"BARCODE","nota":null},{"idParametro":502,"descrizione":"CAUSA_MAGGIORE","valore":"X","nota":null},{"idParametro":503,"descrizione":"PACCHI","valore":"X","nota":null},{"idParametro":504,"descrizione":"TIPOLOGIA_EVENTO","valore":"TIPOLOGIA_EVENTO","nota":null},{"idParametro":505,"descrizione":"NOTE","valore":"NOTE","nota":null},{"idParametro":506,"descrizione":"DATA_RITROVAMENTO","valore":"data ritrovamento","nota":null},{"idParametro":507,"descrizione":"DATA_ACCETTAZIONE","valore":"DATA_ACCETTAZIONE","nota":null},{"idParametro":509,"descrizione":"AREA_LOGISTICA","valore":"AREA_LOGISTICA","nota":null},{"idParametro":511,"descrizione":"DA","valore":"DA","nota":null},{"idParametro":512,"descrizione":"DATA_DENUNCIA","valore":"DATA_DENUNCIA","nota":null},{"idParametro":513,"descrizione":"TIPOLOGIA_ALERT","valore":"TIPOLOGIA","nota":null},{"idParametro":515,"descrizione":"STRUTTURA_RILIEVO","valore":"STRUTTURA_RILIEVO","nota":null},{"idParametro":516,"descrizione":"STRUTTURA_DENUNCIA","valore":"STRUTTURA_DENUNCIA","nota":null},{"idParametro":517,"descrizione":"DISPACCIO","valore":"DISPACCIO","nota":null},{"idParametro":518,"descrizione":"CMP_CP","valore":"CMP_CP","nota":null},{"idParametro":520,"descrizione":"FURTO_EFFRAZIONE","valore":"X","nota":null}]' />
<!-- Below the pdf base 64 rapresentation -->
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<?php
   $js_array = json_encode($points);
?>
<textarea id="validi" style="display:none"  value=""><?php print_r($js_array); ?></textarea>


</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>

 <script>
 var pdfData = atob($('#pdfBase64').val());
 //var file_name = $('#file_name').val();
 //var file_path = $('#file_path').val();
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

  //alert(loadingTask);
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
				/*il placeholder non è valido: lo incolonna a sinistra*/
		
				if(i > 0 && i%numOfMaxItem == 0){
					yCounterOfGenerated = 0;
				}

				var classStyle = "";
				var valore = param.valore;
				/*il placeholder non è valido: lo incolonna a sinistra*/
				yCounterOfGenerated += notValidHeight;
				classStyle = "drag-drop can-drop";


				
				$("#parametriContainer").append('<div class="'+classStyle+'" data-id="-1" data-page="'+page+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px); display:block">  <span class="circle"></span><span class="descrizione">'+param.descrizione+' </span></div>');
                y+=30;
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
			$("#parametriContainer").append('<ul id="pager" class="pager" style="transform: translate('+x+'px, '+y+'px); width:200px;"><li onclick="changePage('+prevDisabled+','+currentPage+',-1)" class="page-item '+prevStyle+'"><span>«</span></li><li onclick="changePage('+nextDisabled+','+currentPage+',1)" class="page-item '+nextStyle+'" style="margin-left:10px;"><span>&raquo;</span></li></ul>');
			
	 }
  
  	function renderizzaInPagina(parametri){
		var maxHTMLx = $('.the-canvas').width();
		var maxHTMLy = $('.the-canvas').height();
	
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
			/*il placeholder non è valido: lo incolonna a sinistra*/
			
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

      
       
       let validi1;
       validi1=$('#validi').val();
       let v=JSON.parse(validi1);
       //console.log(validi1);
       console.log(v);
       //validi1=validi1.split('[')
       //console.log(validi1);
       //console.log("saved");
       //console.log("hello");
       
       //let doc= new jsPDF('p','pt','a4');
       //var canvas = document.getElementById("the-canvas-1");
       //var ctx = canvas.getContext("2d");
       //ctx.font = "12px Arial";
       //ctx.fillText("Hello World", 10, 50); 
       /* for(let i=0;i<v.length;i++){
         v[i].x+=5;
         v[i].y-=5;
       } */
       let fo=$('#font_family').val();
       //let sz=$('#font_size').val();
       for(let i=0;i<v.length;i++)
         {
           let x=v[i].x;
           let y=v[i].y;
           let name=v[i].text;
           let id=y/842;
           let sz=v[i].fontSize;
           //alert(id);
           id=Math.floor(id);
           id++;
           //alert(id);
           
           var canvas = document.getElementById(`the-canvas-${id}`);

           var ctx = canvas.getContext("2d");
           
           ctx.font = `${sz}px ${fo}`;
           
           //console.log(x);
           //console.log(y);
           //doc.text(name,x,y);
           id--;
           
           ctx.fillText(name, x, y-(id*842));
           
           //console.log(x);
           //console.log(y);
           //console.log(name);
           //doc.text(name,x,y);
           //ctx.fillText(name, x, y); 
         }
       //console.log(doc.internal.getNumberOfPages());
         //doc.save('auto.pdf');
         console.log("saved");
         console.log("hello");
         var poc = new jsPDF();
         let vv=$('.pdfViewer').html(); 
         poc.fromHTML(vv);
         //poc.save('div.pdf');



       /***************************************************************
       
       
       
       
       
       ajax post request for saving data points
       
       
       
       
       ******************************************************************** */
  }
  $('.add_text').click(function(){
      /* console.log($('#parameters').val());
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
	  renderizzaPlaceholder(0, parametri); */
    let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

    mywindow.document.write(`<html><head><title>${title}</title>`);
    mywindow.document.write('</head><body >');
    mywindow.document.write(document.getElementById("pageContainer").innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();	
  });
  

  $("#click1").click(function() {

      //alert("hello world");
      
        // Convert the DOM element to a drawing using kendo.drawing.drawDOM
        kendo.drawing.drawDOM($("#pageContainer")).then(function(group) {
        kendo.drawing.pdf.saveAs(group, "Converted PDF.pdf");
        });
        kendo.drawing.drawDOM($("#pageContainer"))
        .then(function(group) {
            // Render the result as a PDF file
            return kendo.drawing.exportPDF(group, {
                
                margin: { left: "1cm", top: "1cm", right: "1cm", bottom: "1cm" }
            });
        })
        .done(function(data) {
            // Save the PDF file
            kendo.saveAs({
                dataURI: data,
                fileName: "teste.pdf",
                proxyURL: "https://demos.telerik.com/kendo-ui/service/export"
            });
        });
        let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

        mywindow.document.write(`<html><head><title>${title}</title>`);
        mywindow.document.write('</head><body >');
        mywindow.document.write(document.getElementById(divId).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    });


  </script>
  
    <!-- Icons -->
    
<main>
      </div>
    </div>
</body>

</html>
