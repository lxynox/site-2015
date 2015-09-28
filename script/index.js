/**
 * @author: lxynox
 * Date: 16, Jul, 2015
 * Description: js source for index.html 
 */

window.onload = function() {
	if (!document.getElementById) return false;// Object detection replacing browser sniffing
	if (!document.getElementsByTagName) return false;
// alert ('hello world!');
	setInterval("changeColor()", 1000);
	addReturn2Top();
	alert("new function added");
	// addAudio();
	// alert("audio added");
}

/* change the font color of the Header dynamically */
var state = 0;
function changeColor() { 
	var color = ["white", "#750F19"];
	if (document.getElementById('home'))
		document.getElementById("home").style.color = color[state++%2];
	// footer: get copyright &&  update time 
	document.getElementById("copyright").innerHTML = 
	"<p>@copy, "+ new Date()+ "Xuanyu Li, all rights reserved.</p>";
} 
/* add audio file to the leftside bar */ 
function addAudio() {
	var audi = document.createElement("AUDIO");
	audi.style.margin = "20px 20px";
	audi.setAttribute("controls", "controls");
	// 获取当前文件名以确定 src 路径
	var strUrl = window.location.href;
	var arrStrUrl = strUrl.split("/");// 当前 文件名数组
	if (arrStrUrl[arrStrUrl.length-1] == 'index.html')
		audi.setAttribute('src', './audio/song.mp3');
	else 
		audi.setAttribute('src', '../audio/song.mp3');

	var left_side_bar = document.getElementById("left_side");
	left_side_bar.appendChild(audi);
}

/* add button to return from bottom to top */
function addReturn2Top() {
  var return_button = document.createElement("ul");
	var return_button_li = document.createElement("li");
	return_button.appendChild(return_button_li);
  var return_button_li2 = document.createElement("li");
	return_button.appendChild(return_button_li2);
// first child <li>TOP</li>
	var return_button_link = document.createElement("a");
  var returnText = document.createTextNode("TOP");	
	return_button_link.appendChild(returnText);
	return_button_link.setAttribute("href", "#about-me");
  return_button_li.appendChild(return_button_link);
// second child <li><img src="" alt=""></img></li>
	var return_button_pic = document.createElement("img");
	return_button_pic.setAttribute("src", "images/arrowup.jpg");
	return_button_pic.setAttribute("alt", "picture for arrow up");
	return_button_pic.width = "75";
	return_button_pic.height = "75";
	return_button_li2.appendChild(return_button_pic);

  document.getElementsByTagName('body')[0].appendChild(return_button);

	// appned the className to the button 
	addClassName(return_button, "return2topButton");
}
