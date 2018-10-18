function openNav(){
	sidebar.style.width="200px";
}

function closeNav(){
	sidebar.style.width="0px";
	sidebar.style.width="";
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