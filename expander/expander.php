
  <style>
  .divv {display:none; overflow: hidden; height:20px;margin:10px; }
  </style>

  <script type="text/javascript" src="jquery.js"></script>

  <script type="text/javascript">
   $(document).ready(function(){
  $("#para td img").click(function(){ 
  var id1=$(this).attr('id');
  var imgsrc=$(this).attr('src');
  if(imgsrc=="insert.jpg")
  {
   $(this).attr('src','remove.jpg');
  }
  else
  {
   $(this).attr('src','insert.jpg');
  }
  if($("#div"+id1))
  $("#div"+id1).slideToggle("slow");
  });
  });
  </script>  

  <table id="para" align=center height="100px" border=0 width="100%" cellspacing=0 cellpadding=0>
  <tr>
    <td>

    <a class="fontt"><img src="insert.jpg" id="1" align="absmiddle" >Toogle 1</a>
    <div id="div1" class="divv">
    <div class="fontt">web services, software/application development, web content development, web hosting, domain registration, internet solutions and web design.</div>
    </div><br>

    <a class="fontt"><img src="insert.jpg" id="2" align="absmiddle" >Toogle 2</a>
    <div id="div2" class="divv">
    <div class="fontt">web services, software/application development, web content development, web hosting, domain registration, internet solutions and web design. </div>
    </div><br>

    <a class="fontt"><img src="insert.jpg" id="3" align="absmiddle" >Toogle 3</a>
    <div id="div3" class="divv">
    <div class="fontt">web services, software/application development, web content development, web hosting, domain registration, internet solutions and web design. </div>
    </div>

    </td>
  </tr>
  </table>
    
   

