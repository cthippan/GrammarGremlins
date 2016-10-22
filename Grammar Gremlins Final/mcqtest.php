<?php
//session_start();
//if(!isset($_SESSION['usr']) || !isset($_SESSION['pswd'])){
// header("Location: sessionexpired.php");
//} 

?>
<!DOCTYPE HTML>
<html>

	<head>
		<title>Grammar Gremlins</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="cjamfonts.css" rel="stylesheet">
	    <style type="text/css">
<!--
.style1 {color: #FFFBF0}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
        </style>
<noscript><link rel="stylesheet" href="css/5grid/core.css" /><link rel="stylesheet" href="css/5grid/core-desktop.css" /><link rel="stylesheet" href="css/5grid/core-1200px.css" /><link rel="stylesheet" href="css/5grid/core-noscript.css" /><link rel="stylesheet" href="css/style.css" /><link rel="stylesheet" href="css/style-desktop.css" /></noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.titleBarHeight=55&amp;mobileUI.openerWidth=66">
		</script>
		<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css" /><![endif]-->
<script language="javascript">
var path="";
var vpath="";
var noq=0;
var testid;
var lbans=0;
var max=0;

function starttest()
{
	//alert("start test");
	var query_string = {};
	  var query = window.location.search.substring(1);
  	var vars = query.split("&");
  	for (var i=0;i<vars.length;i++) {
    	var pair = vars[i].split("=");
    	// If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = pair[1];
    	// If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]], pair[1] ];
      query_string[pair[0]] = arr;
    	// If third or later entry with this name
    } else {
      query_string[pair[0]].push(pair[1]);
    }
  } 
  document.getElementById("lblstd").innerHTML = ""+query_string.std+"";
  document.getElementById("lblsub").innerHTML = ""+query_string.sub+"";
  document.getElementById("lblchap").innerHTML = ""+query_string.chap+"";
  document.getElementById("lblnoques").innerHTML = ""+query_string.noques+"";
  document.getElementById("totqno").innerHTML = ""+query_string.noques+"";
  document.getElementById("lblid").innerHTML = ""+query_string.id+"";
//  document.getElementById("lblid").innerHTML = ""+query_string.testid+"";

path="http://www.mobilemcq.com/cjam/"+ query_string.std+"/"+query_string.sub+"/"+query_string.chap+"/";
//vpath="/home/mobilemc/public_html/cjam/"+ query_string.std+"/"+query_string.sub+"/"+query_string.chap+"/";


max=parseInt(<?php $directory='/home/mobilemc/public_html/cjam/'.$_GET['std'].'/'.$_GET['sub'].'/'.$_GET['chap'].'/'; 

if (glob($directory . "*.jpg") != false)
{
 $filecount = count(glob($directory . "*.jpg"));
 echo $filecount;
}
else
{
 echo 0;
}
?>);




noq=parseInt(query_string.noques);
testid=parseInt(query_string.testid);
//alert("testid loaded"+testid);
var xmlpath=path+ query_string.chap + ".xml";

loadXML(xmlpath);

}

var xmlObj;
var xmlDoc;
var docObj;

//var xmlDoc = new ActiveXObject("Microsoft.XMLDOM");

function loadXML(xmlFile)
{
//===========================================================

var error = "";
var file = xmlFile;
try //Internet Explorer
{
 xmlDoc=new ActiveXObject("Microsoft.XMLHTTP");
 xmlDoc.async=false;
 xmlDoc.load(file);
  xmlDoc.async="false";
  xmlDoc.onreadystatechange=verify;
  xmlObj=xmlDoc.documentElement;
//alert("ie");
//document.getElementById("image").src= path+firstNode.childNodes[1].childNodes[0].nodeValue;
}
catch(e)
{
 try //Firefox, Mozilla, Opera, etc.
 {
  xmlDoc=document.implementation.createDocument("","",null);
  xmlDoc.async=false;
  xmlDoc.load(file);
  xmlDoc.async="false";
  xmlDoc.onreadystatechange=verify;
  xmlObj=xmlDoc.documentElement;
  firstNode=get_firstchild(xmlObj);  
// document.getElementById("image").src= path+firstNode.childNodes[1].childNodes[0].nodeValue;
 }
 catch(e)
 {
  try //Google Chrome
  {
	var xmlhttp = new window.XMLHttpRequest(); 
	xmlhttp.open("GET", file, false); 
	xmlhttp.send(null); 
	xmlObj = xmlhttp.responseXML.documentElement; 
	firstNode=get_firstchild(xmlObj);


//	document.getElementById("image").src= path+firstNode.childNodes[1].childNodes[0].nodeValue;

  }

  catch(e)
  {
	var xmlhttp = new window.XMLHttpRequest(); 
	xmlhttp.open("GET", file, false); 
	xmlhttp.send(null); 
	xmlObj = xmlhttp.responseXML.documentElement; 
	firstNode=get_firstchild(xmlObj);
//	document.getElementById("image").src= path+firstNode.childNodes[1].childNodes[0].nodeValue;
    error=e.message;
  }
 }

}

//==================================


}

function verify()
{
  // 0 Object is not initialized
  // 1 Loading object is loading data
  // 2 Loaded object has loaded data
  // 3 Data from object can be worked with
  // 4 Object completely initialized
  if (xmlDoc.readyState != 4)
  {
    return false;
  }
}
//document.write(xmlObj.childNodes(0).firstChild.text);
	var i=3;
	var correct = 0;
	var incorrect =0;
	var notans =0;
	var count=1;
	var qid=0;
//alert(xmlObj.childNodes(0).childNodes(2).firstChild.text);    //.childNodes(0).firstChild.text);
//for(i=0;i<30;i++)
//document.write("<img src='" + xmlObj.childNodes(0).childNodes(i).firstChild.text + "'<br>");

function changeImage()
{


document.getElementById('clickme').disabled=true;


if(parseInt(count)<=(parseInt(noq)))
{
	var d = document.getElementById('1');
    d.style.backgroundColor='white';
	var d = document.getElementById('2');
    d.style.backgroundColor='white';
	var d = document.getElementById('3');
    d.style.backgroundColor='white';
	var d = document.getElementById('4');
    d.style.backgroundColor='white';
	var d = document.getElementById('na');
    d.style.backgroundColor='white';

	
	var img = document.getElementById("image");


	var min=0;









//	alert(max);
	i = Math.floor(Math.random() * (max - min + 1)) + min;
	if(i%2==0)
	i=i+1;
	
	try
	{ 
	img.src= path+xmlObj.childNodes(0).childNodes(i).firstChild.text;  //i++
//document.getElementById("image").src=  path+xmlObj.childNodes(0).childNodes(i).firstChild.text;
	} 
	catch(e) 
	{ 	firstNode=get_firstchild(xmlObj); 
		if (firstNode.childNodes[0].nodeType==3)
  		{
		//alert("ques"+firstNode.childNodes[i].childNodes[0].nodeValue);
			//img.src=path+firstNode.childNodes[i].childNodes[0].nodeValue;
			document.getElementById("image").src= path+firstNode.childNodes[i].childNodes[0].nodeValue;
			//document.getElementById("lblans").innerHTML=""+firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue;
			lbans=firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue;
			qid=firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue;
			//i=i+2;
	
	}
	}
}
else
{
alert("Test completed");
var timetaken=document.getElementById("txt").value;
window.close();
window.open("presummary.php?correct="+correct+"&incorrect="+incorrect+"&notans="+notans+"&timetaken="+timetaken+"&id="+document.getElementById("lblid").innerHTML+"&std="+document.getElementById("lblstd").innerHTML+"&sub="+document.getElementById("lblsub").innerHTML+"&chap="+document.getElementById("lblchap").innerHTML,'','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
}


document.getElementById('clickme').disabled=false;
var radios = document.getElementsByName("radiobutton");
    for (var i1 = 0; i1 < radios.length; i1++)
	{       
        if (radios[i1].checked) 
		{
          break;
        }
     }

//alert("radio value = "+parseInt(radios[i1].value) + " correct ans = "+parseInt(firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue));

if(parseInt(count)<=(parseInt(noq)))
{

		//alert("ques"+i+"image "+firstNode.childNodes[i].childNodes[0].nodeValue+"ans"+parseInt(firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue));
//parseInt(firstNode.childNodes[i].childNodes[1].childNodes[0].nodeValue)
	
	var d = document.getElementById('1');
    d.style.backgroundColor='white';
	var d = document.getElementById('2');
    d.style.backgroundColor='white';
	var d = document.getElementById('3');
    d.style.backgroundColor='white';
	var d = document.getElementById('4');
    d.style.backgroundColor='white';
	var d = document.getElementById('na');
    d.style.backgroundColor='white';

}
count = count + 1;
document.getElementById("qno").innerHTML = parseInt(document.getElementById("qno").innerHTML)+1;

return false;
}

function verifyans()
{
	var radios = document.getElementsByName("radiobutton");
	for (var i1 = 0; i1 < radios.length; i1++)
	{       
        if (radios[i1].checked) 
		{
        	  break;
	        }
     	}

	var d =  parseInt(lbans);

	//if(parseInt(radios[i1].value) == parseInt(document.getElementById("lblans").innerHTML))
	if(parseInt(radios[i1].value) == parseInt(lbans))
	{

	document.getElementById(lbans).style.backgroundColor='#35FF9A';
	alert("YEAH !!","Modern says");
	correct=correct +1;
	}
		
	else if( (parseInt(radios[i1].value)) == 5)
	{ 
		notans = notans + 1;
	}
	else
	{

	document.getElementById( radios[i1].value ).style.backgroundColor='#FF7979';
	document.getElementById(lbans).style.backgroundColor='#35FF9A';
	   
	alert("OH NO !!","Modern Says");
	incorrect = incorrect+1;
	}

	
changeImage();

}


function get_firstchild(n)
{
x=n.firstChild;
while (x.nodeType!=1)
  {
  x=x.nextSibling;
  }
return x;
}

var c=0;
var t;
var h=0;
var timer_is_on=0;

function timedCount()
{
document.getElementById('txt').value=h +":" +c;
if(c<60)
{
c=c+1;
}
else
{
c=0;
h=h+1;
}
t=setTimeout("timedCount()",1000);
}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}

function stopCount()
{
clearTimeout(t);
timer_is_on=0;
}
</script>


</head>
	<body onLoad="timedCount();starttest();changeImage();">
	<!-- ********************************************************* -->
		<div id="header-wrapper">
			<div class="5grid-layout">
				<div class="row">
					<div class="12u">
						
						<header id="header">
							<h1><a href="#" class="mobileUI-site-name">Jamnadas Publishing House</a></h1>
							<nav class="mobileUI-site-nav">
								<a href="index.php" class="current-page-item">Homepage</a>
								<a href="">Time Table</a>
								<a href="">Latest Events</a>
								<a href="">About Us</a>
								<a href="">Contact Us</a>
							</nav>
						</header>
					
					</div>
				</div>
			</div>
		</div>
		<div id="none" >
          <div class="5grid-layout">
            <div class="row">
              <div class="12u">
                <nav class="mobileUI-site-nav">
                  <marquee>
                   <p class="current-page-item" style="font-size:32px" >E D U C E L L</p>
                  </marquee>
                </nav>
              </div>
            </div>
          </div>
    </div>

		<div id="main">
          <div class="5grid-layout" >
				<div class="row main-row">
					<div class="4u">
					<section>
          <img src="images/student.png" alt="s" width="38" height="34">
          <label id="lblid">sub &nbsp; &nbsp; </label>
          &nbsp;&nbsp;&nbsp;
          <img src="images/clock.png" alt="C" width="30" height="31"> 
            <input name="txt" type="text"  id="txt" style="background-color:#FFFFFF ;border:none; font-size:15px" size="1">
          	<label id="lblid">Que :  </label><label id="qno">0</label>
          	/ 
          	<label id="totqno"></label>

	      <table width="335" border="2">
<hr>
                        <tr>
                          <th >Standard</th>
                          <th >Subject</th>
                          <th > </th>
                          <th ></th>
                        </tr>
    
                        <tr>
                          <th width="100" ><p><label id="lblstd"></label></th>
                          <th width="100" ><p><label id="lblsub"></label></th>
                          <th width="100" ><p><label id="lblchap"></label></th>
                         <th><span class="style1"><label id="lblnoques"></label></span></th>
                        </tr>
                        

</table>
<hr>
	      <table width="335" border="2">

                    <tr>
                          <td colspan="4"><img id="image" src="" /></td>
                        </tr>
                        <tr>
                          <td height="38" colspan="3"><span>
                          <label id="1" >
                            <input name="radiobutton" type="radio" value="1" />
                                                <strong>A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></label>
                          </span></td>
                          <td height="38"> <label id="2">
    <input name="radiobutton" type="radio" value="2"  />
    <strong>    B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label></td>
                        </tr>
                              
                        <tr>
                          <td height="37" colspan="3"><label id="3">
    <input name="radiobutton" type="radio" value="3" />
    <strong>    C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label></td>
                          <td height="37"><label id="4">
    <input name="radiobutton" type="radio" value="4"  />
    <strong>D&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label></td>
                        </tr>
                        <tr>
                          <td height="26" colspan="4"></td>
                        </tr>
                        <tr>
                          <td colspan="3" align="left"><label id="5">
    <input name="radiobutton" id="na" type="radio" value="5"  />
    <span class="style2">SKIP</span>
                          </label></td>
                          <td align="left"><button class="button" id="clickme" onClick="verifyans()">Next</button></td>
                        </tr>
                      </table>
					      
  
                      <footer class="controls">							    </footer>
		    </section>
					</div>
			  </div>
				<div class="row main-row">
					<div class="6u">
					
					  <section>
							<a href="logout.php" class="button" style="font-size:17px">logout</a>
					  </section>
					</div>
			  </div>
		  </div>

</div>
		<div id="footer-wrapper">
			<div class="5grid-layout">
			  <div class="row">
					<div class="12u">

						

					</div>
			  </div>
			</div>
		</div>
	<!-- ********************************************************* -->
<p class="style1"><label id="lblans" name="lblans" forecolor="#dddddd"></label></p>
	</body>
</html>