<html>
<body>
<script src="Images/slideshow/getimages.php"></script>

<script type="text/javascript">

var curimg=0
function rotateimages(){
document.getElementById("slideshow").setAttribute("src", "Images/slideshow/"+galleryarray[curimg])
curimg=(curimg<galleryarray.length-1)? curimg+1 : 0
}

window.onload=function(){
setInterval("rotateimages()", 500)
}
</script>

<div style="width: 170px; height: 160px">
<img id="slideshow" src="Images/slideshow/bear.gif" width="320" height="240"/>
</div></body></html>