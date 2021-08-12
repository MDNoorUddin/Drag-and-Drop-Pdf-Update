<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Edit PDF</title>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>
  <style>
 <style>
  
 .ft{
      position: absolute;
      bottom: 0;
      width: 100%;
      }
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

.col-2{
    /* width:100px; */
    height:100%;
    /* margin-left:0px; */
} 

.col-9{
    
    /* width:605px;
    height:100%; */
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
#the-canvas{
  
  
}

  </style>

   
</head>

<body>
  <div class="container">
     <div class="text-center">
      <h1 class="h3 m-5">Edit Your PDF</h1>
      <hr>
     </div>
  </div>

  <div class="container">
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PDF is Successfully Updated</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         PDF Successfully Updated
      </div>
    </div>
  </div>
</div>

 <!--  <div class="row">
      <div class="col-md-12" style="padding:10px">
          <button class="btn btn-outline-primary btn-block" onClick="show()" data-toggle="modal" data-target="#exampleModalLong">Update PDF</button>
      </div>
  </div>    -->


  <div class="row mt-5" id="selectorContainer">
      
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
                        <button class="btn btn-primary btn-block mt-3" onClick="show()" data-toggle="modal" data-target="#exampleModalLong">Update PDF</button>
                        <a class="btn btn-primary btn-block mt-3" href='<?= base_url("index.php/upload/edit_history/".$pdf_id."/"); ?>'>View Edit History</a>
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
   <div class="editHistory" style="display: none;">
     
   </div>
<!-- parameters showed on the left sidebar -->
<input id="parameters" type="hidden" />
<!-- Below the pdf base 64 rapresentation -->
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<input id="pdfBase64" type="hidden" value="<?php echo $pdf;?>">
<?php
   $js_array = json_encode($points);
   //print_r ($js_array);
?>
<textarea id="validi" style="display:none;" value=""><?php print_r($js_array); ?></textarea>
<input type="text" style="display:none;"  id="pdf_name" value="<?php echo $pdf_name;?>">
<input type="text" style="display:none;"  id="pdf_id" value="<?php echo $pdf_id;?>">


</body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.9/interact.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.worker.min.js'></script>

 <script>

 $('.pr').click(function(){
    console.log($('#pageContainer').html());
 })
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
    $( "#pageContainer" ).append(`<canvas id="the-canvas-${i}" class="the-canvas" style="border:1px  solid black;margin-left:127px;"></canvas>`);
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
      target.setAttribute('data-a', 1);
	  }

	  // this is used later in the resizing demo
	  window.dragMoveListener = dragMoveListener;

    $(document).bind('pagerendered', function (e) {
	   $('#pdfManager').show();
	   //var parametri = JSON.parse($('#parameters').val());
	   //$('#parametriContainer').empty();
	   //renderizzaPlaceholder(0, parametri);	
	});
  //let valueChangerTest=[];
  function renderizzaPlaceholder(currentPage){

            let parametri = JSON.parse($('#validi').val());
		        
            var maxHTMLx = $('.the-canvas-1').width();
			      
            var maxHTMLy = $('.the-canvas-1').height();
		    
			     var paramContainerWidth = $('#parametriContainer').width();
			
          for (i = 0; i < parametri.length; i++) {

                var param = parametri[i];
                var classStyle = "";
                let valore = param.text;
                classStyle = "drag-drop can-drop";
                let z=parseInt(param.x);
                let x=240+z+150;
                let y=parseInt(param.y);
                let f=parseInt(param.fontSize);
                //var val = {"X":x,"Y":y};
                //valueChangerTest.push(val);
                $("#parametriContainer").append('<div class="'+classStyle+'" id="p-'+i+'" data-id="0" data-page="'+0+'" data-toggle="'+valore+'" data-valore="'+valore+'" data-x="'+x+'" data-y="'+y+'" data-a=0 data-xAxes="'+x+'" data-yAxes="'+y+'" style="transform: translate('+x+'px, '+y+'px);font-size:'+f+'px;" > <span class="descrizione">'+param.text+'</span><i class="material-icons cut  text-danger" id="'+i+'" onclick="myFunction(this)">clear</i></div>');
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
       let pdfID;
       //let sz=$('#font_size').val();
       for(let i=0;i<v.length;i++)
         {
           let x=v[i].x;
           let y=v[i].y;
           let name=v[i].text;
           pdfID=v[i].pdf_id
           let id=y/842;
           let sz=20;
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
  let editedTexts=[];
  function myFunction(X){
    //alert(x.id);
    var result = confirm("Want to delete?");
    if(result){
      
      let id=`#p-${X.id}`;
       
        alert($(id).data("valore"));

        var maxHTMLx = $('.the-canvas').width();
  	    
        var maxHTMLy = $('.the-canvas').height();

        var paramContainerWidth = $('#parametriContainer').width();
        
        var x = parseFloat($(id).data("x"));
  		  
        var y = parseFloat($(id).data("y"));
        
        var valore = $(id).data("valore");
        
        var fontSize=$(id).css("font-size");
  		  
        var descrizione = $(id).find(".descrizione").text();
  		    
  		  var pdfY = y;
  		  var posizioneY = y;	  
  		  var posizioneX =  (x * maxPDFx / maxHTMLx)  - paramContainerWidth;
  		  
  		  var val = {"descrizione": descrizione, "posizioneX":posizioneX-150,   "posizioneY":posizioneY, "valore":valore,"size":fontSize,"type":0};
  		  editedTexts.push(val);

      $(`#p-${X.id}`).remove();
      //alert(editedTexts);
    }
  }
  $(document).ready(function(){
      //console.log($('#validi').val());
	  renderizzaPlaceholder(0);	
      console.log($('#parametriContainer'));
  });
  $('.del').click(function(){
      //alert("Hello WOrld");
      //$('.descrizione').hide();
      //$('#ef').hide();
  });
  
function show()
{
      var validi = [];
  	  var nonValidi = [];
  	  var maxHTMLx = $('.the-canvas').width();
  	  var maxHTMLy = $('.the-canvas').height();
      //alert(maxHTMLx);
      //alert(maxHTMLy);
      var paramContainerWidth = $('#parametriContainer').width();
  	  let I=0;
  	  //recupera tutti i placholder validi
  	  $('.drag-drop.can-drop').each(function( index ) {
  		  var x = parseFloat($(this).data("x"));

  		  var y = parseFloat($(this).data("y"));

        var X = parseFloat($(this).data("xaxes"));

  		  var Y = parseFloat($(this).data("yaxes"));

        alert("your X" + X);

        var valore = $(this).data("valore");
        
        var fontSize=$(this).css("font-size");
        
        var textId=$(this).data("id");

        alert(textId);
        
        console.log(fontSize);
  		  
        var descrizione = $(this).find(".descrizione").text();
  		    
  		  var pdfY = y;
  		  
        var posizioneY = y;	  

        var posizioneY1=Y;
  		  
        var posizioneX =  (x * maxPDFx / maxHTMLx)  - paramContainerWidth;

        var posizioneX1 =  (X * maxPDFx / maxHTMLx)  - paramContainerWidth;
  		  
  		  var val = {"descrizione": descrizione, "posizioneX":posizioneX-150,"posizioneY":posizioneY, "valore":valore,"size":fontSize,"type":1};

        var val1 =  {"descrizione": descrizione, "posizioneX":posizioneX1-150,"posizioneY":posizioneY1, "valore":valore,"size":fontSize,"type":1}; 
  		  
        validi.push(val);
        if(textId==0)
        {
          if(X===x && Y===y)
          editedTexts.push(val);
          else{
            editedTexts.push(val1);
          }
        }
        I++;
      
  	  });
        alert(JSON.stringify(validi));
        alert(editedTexts);
        let pdf_name=$('#pdf_name').val();
        let pdf_id=$('#pdf_id').val();
        alert(pdf_id);
        alert(pdf_name);
        $.ajax({
			type: 'ajax',
            method:'POST',
			url: '<?= base_url("index.php/upload/points_update"); ?>',
            data:{points:validi,pdf:pdf_name,edited:editedTexts,p_id:pdf_id},
            dataType: 'json',
				    async: true,
				success: function(data){

					alert('Success points are uploaded');
          console.log(data);
				},
        error: function (request, status, error) {
          alert("error");
          alert(request.responseText);
        }
        }); 
}
let hei=0;
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
      $("#trello").css({'font-size':fontSize});
      $(".pdf").css({'font-size':fontSize});
      //($(".pdf").css("font-size"));
      //$('.pdf').attr('style', $('.pdf').attr('style') + '; ' + 'font-size: '+fontSize+'px !important');

      let val=$('#trello').val();
       
      //let feed = {"descrizione": val, "nota":null,"valore":val,"idParametro":x};
      //x++;
      let x=0;
      let y=hei;
      hei+=60;
      $("#parametriContainer").append('<div class="drag-drop dropped-out bg-white" data-id="-1" data-page="'+0+'" data-toggle="'+val+'" data-valore="'+val+'" data-x="'+x+'" data-y="'+y+'" style="transform: translate('+x+'px, '+y+'px); display:block;font-size:'+fontSize+'px;>  <span class="circle"></span><span class="descrizione">'+val+' </span></div>');
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
<div class="container-fluid bg-primary text-white pl-1 ft" style="width:100%;">
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

</body>

</html>
