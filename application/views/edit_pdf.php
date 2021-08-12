<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Drag and drop placeholder on PDF documents with mozilla pdf.js, interact.js, boostrap 3 and jQuery</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

  <style>
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
.ft{
      position: absolute;
      bottom: 0;
      width: 100%;
      }
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
  <div class="row" id="save">
          
					<div class="col-md-12" id="pdfManager" style="display:none">	
                    <input type="text" style="font-size:30px;" id="trello" placeholder="Add Text">
          <input type="number" id="font_size" value="10" min="5" max="50" step="5">
          <button class="btn btn-danger add_text" >Add</button>
						<div class="row" id="selectorContainer">
							<div class="col-fixed-240" id="parametriContainer">
              <div class="row">
              <div class="col-6">
              <select id="font_family" form="carform" sytle="width:100px;">
                <option value="Georgia">Georgia</option>
                <option value="Times New Roman">Times New Roman</option>
                <option value="Roboto">Roboto</option>
                <option value="Arial">Arial</option>
                <option value="Courier New">Courier New</option>
              </select>
              </div>
              <div class="col-lg-6">
              <button class="btn btn-danger add_font_family">Select Font</button>
              </div>
             </div>
              <div class="row mt-5">
              <div class="col-6">
              <select id="font_size" form="carform" sytle="width:100%;">
              <option value="12">12</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="10">10</option>
            </select>
              </div>
              <div class="col-lg-6">
              <button class="btn btn-danger add_font_family">Select Font-Size</button>
              <br>
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
<input id="parameters" type="hidden" />
<!-- Below the pdf base 64 rapresentation -->
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<?php
   $js_array = json_encode($points);
?>
<textarea id="validi" style="display:none;" value=""><?php print_r($js_array); ?></textarea>



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
	   //var parametri = JSON.parse($('#parameters').val());
	   //$('#parametriContainer').empty();
	   //renderizzaPlaceholder(0, parametri);	
	});
  
  function renderizzaPlaceholder(currentPage){
            let parametri = JSON.parse($('#validi').val());
		        var maxHTMLx = $('.the-canvas-1').width();
			      var maxHTMLy = $('.the-canvas-1').height();
		    //alert(parametri);
			     var paramContainerWidth = $('#parametriContainer').width();
			
			for (i = 0; i < parametri.length; i++) {
				var param = parametri[i];
				
				        var classStyle = "";
                let valore = param.text;
                //alert(valore);
                classStyle = "drag-drop can-drop";
                let z=parseInt(param.x);
                let x=240+z;
                let y=parseInt(param.y)+1;
                //alert(x+"&"+y);			
				$("#parametriContainer").append('<div class="'+classStyle+'" data-id="-1" data-page="'+0+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px);">  <span class="circle"></span><span class="descrizione">'+param.text+' </span></div>');
			}
	 }
	 
	 
    
  function showCoordinates(){
       
       let validi1;
       validi1=$('#validi').val();
       let v=JSON.parse(validi1);
       //console.log(validi1);
       //alert(para);
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
       let sz=$('#font_size').val();
       for(let i=0;i<v.length;i++)
         {
           let x=v[i].x;
           let y=v[i].y;
           let name=v[i].text;
           let id=y/842;
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


       /* $.ajax({
				    type: 'ajax',
            method:'POST',
			    	url: '<?= base_url("index.php/upload/points_upload"); ?>',
            data:{points:validi,pdf_name:0,pdf_location:0},
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
        */
  }
  $('.add_text').click(function(){
      console.log($('#validi').val());
	  renderizzaPlaceholder(0);	
  });


  </script>


</body>

</html>
