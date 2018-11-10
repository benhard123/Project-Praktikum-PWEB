function openNav(y) {
	var x = window.matchMedia("(max-width: 500px)");
	if (x.matches) { // If media query matches
		sidebar.style.width="200px";
	}
	else {
		content.style.marginLeft="250px"
		sidebar.style.width="250px";
	}
}

function closeNav(){
	sidebar.style.width="0px";
	sidebar.style.width="";
	content.style.marginLeft=""
}

function test(x){
	x.getElementsByTagName('span')[0].style.fontSize="12px";
	x.getElementsByTagName('span')[0].style.zIndex="0";
	x.getElementsByTagName('span')[0].style.position="static";
	x.getElementsByTagName('span')[0].style.padding="0";
}

function checkFill(x){
	if(x.getElementsByTagName('input')[0].value==""){
		x.getElementsByTagName('span')[0].style="";
	}
}