<!-- Original:  CodeLifter.com (support@codelifter.com) -->
<!-- Web Site:  http://www.codelifter.com -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
// Set slideShowSpeed (milliseconds)
var globeVar = "";
var slideShowSpeed = 5000;
// Duration of crossfade (seconds)
var crossFadeDuration = 3;
// Specify the image files
var Pic = new Array();
var url = new Array();
// to add more images, just continue
// the pattern, adding to the array below

Pic[0] = 'images/Header_Banner.jpg'
Pic[1] = 'images/Header_Banner1.jpg'
Pic[2] = 'images/Header_Banner2.jpg'
Pic[3] = 'images/Header_Banner3.jpg'

url[0]='index.html';
url[1]='background-checks.html';
url[2]='security_services2.html#event_security';
url[3]='security_services2.html#dog_squads';

// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=2)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}
document.getElementById("slideAnchor").href=url[j];
globeVar = url[j];
document.images.SlideShow.src = preLoad[j].src;

if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
//  End -->
function moveTos(idsa)
{

document.getElementById("slideAnchor").href=url[idsa];
globeVar = url[idsa];
document.images.SlideShow.src = preLoad[idsa].src;

}
function moveNext(){
j=j+1
if(j>4)
	j=0;
document.getElementById("slideAnchor").href=url[j];
globeVar = url[j];
document.images.SlideShow.src = preLoad[j].src;
}
function moveBack(){
j=j-1;
if(j<0)
	j=4;
document.getElementById("slideAnchor").href=url[j];
globeVar = url[j];
document.images.SlideShow.src = preLoad[j].src;
}
function gotothis()
{
	window.location.href  = globeVar;
}
// JavaScript Document