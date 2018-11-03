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

function username(){
	username1.style.fontSize="12px";
	username1.style.zIndex="0";
	username1.style.position="static";
	username1.style.padding="0";
}

function checkFillUsername(){
	if(username2.value==""){
		username1.style.fontSize="";
		username1.style.zIndex="";
		username1.style.position="";
		username1.style.padding="";
	}
}

function Name(){
	name1.style.fontSize="12px";
	name1.style.zIndex="0";
	name1.style.position="static";
	name1.style.padding="0";
}

function checkFillName(){
	if(name2.value==""){
		name1.style.fontSize="";
		name1.style.zIndex="";
		name1.style.position="";
		name1.style.padding="";
	}
}

function Email(){
	email1.style.fontSize="12px";
	email1.style.zIndex="0";
	email1.style.position="static";
	email1.style.padding="0";
}

function checkFillEmail(){
	if(email2.value==""){
		email1.style.fontSize="";
		email1.style.zIndex="";
		email1.style.position="";
		email1.style.padding="";
	}
}

function password(){
	password1.style.fontSize="12px";
	password1.style.zIndex="0";
	password1.style.position="static";
	password1.style.padding="0";
	
}

function checkFillPassword(){
	if(password2.value==""){
		password1.style.fontSize="";
		password1.style.zIndex="";
		password1.style.position="";
		password1.style.padding="";
	}
}

function passwordC(){
	passwordC1.style.fontSize="12px";
	passwordC1.style.zIndex="0";
	passwordC1.style.position="static";
	passwordC1.style.padding="0";
	
}

function checkFillPasswordC(){
	if(passwordC2.value==""){
		passwordC1.style.fontSize="";
		passwordC1.style.zIndex="";
		passwordC1.style.position="";
		passwordC1.style.padding="";
	}
}