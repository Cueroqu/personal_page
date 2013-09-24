<html>
<head>
<script type="text/javascript">
var xmlhttp;
function loadXMLDoc(url,cfunc)
{
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
    xmlhttp.onreadystatechange=cfunc;
    xmlhttp.open("GET",url,true);
    xmlhttp.send();
}
function myFunction()
{
    loadXMLDoc("/ajax/test1.txt",function()
    {
        alert("aat");
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
        }
      });
}
function sublink() {
    alert("heelo");
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    if (xmlhttp == null) alert("yaya");
    xmlhttp.onreadystatechange = function() {
        alert('taaaa');
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        }
        xmlhttp.open("GET", "index.php?q=hello", true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<ul>
<li onclick="myFunction()">hello</li>
<li><button type="button" onclick="myFunction()">test</button></li>
</ul>
</body>
</html>
