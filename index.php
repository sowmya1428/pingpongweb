<html>
   <head>
	  <title>
		 Pong Game in Javascript|Ping Pong Source Code
	  </title>
	  <script type="text/javascript" src='pong.js'></script>
	  <link rel="stylesheet" type="text/css" href="style.css">
   </head>
<body>
   <div align='center'><b>Play Ping Pong Game Online</b></div>
   <div class='resp_code'>	  
      <div>              
            <span style='float:left;'>
                  <select name='level_sel' id='sel_level' onchange='changestyle(this.value)'>
                     <option>Level1</option>
                     <option>Level2</option>
                     <option>Level3</option>
                     <option>Level4</option>
                     <option>Level5</option>
                  </select>
            </span>
             <span class='spn_btn'><input type='button' id='btnmove' onclick="javascript: onloading()" value='Play'></span>  
             <span class='spn_count'><span id="countdown" style="font-weight: bold;color:green;">60</span><b>&nbsp;&nbsp;Secs</b></span>
      </div><br><br>

            <div id="design" class='design frms' align='center'>
                     <img class="obj" id="paddle1" src="images/side.png" height=120 width=30>
                     <img class="obj" id="paddle2" src="images/side.png" height=120 width=30/>
                     <img class="obj" id="ball" src="images/ball2.png"/>
               <div id="centerline" class='centerlinee'>
			</div>
            </div>
					 <div  align='center' style="font-size: 10px;color: #dadada;" id="dumdiv">
						<a href="https://www.hscripts.com" id="dum" style="font-size: 10px;color: #dadada;text-decoration:none;color: #dadada;">&copy;h</a>
					 </div>
   </div>
</body>
</html>
