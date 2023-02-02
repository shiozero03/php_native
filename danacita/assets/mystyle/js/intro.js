function next(){
	document.getElementById('welcome-2').classList.remove('d-none')
	document.getElementById('welcome-1').classList.add('d-none')
}
function back(){
	document.getElementById('welcome-2').classList.add('d-none')
	document.getElementById('welcome-1').classList.remove('d-none')
}
function back2(){
	document.getElementById('welcome-2').classList.remove('d-none')
	document.getElementById('login').classList.add('d-none')
	document.getElementById('daftar').classList.add('d-none')
}
function login(){
	document.getElementById('welcome-2').classList.add('d-none')
	document.getElementById('login').classList.remove('d-none')
	document.getElementById('daftar').classList.add('d-none')
}
function daftar(){
	document.getElementById('welcome-2').classList.add('d-none')
	document.getElementById('login').classList.add('d-none')
	document.getElementById('daftar').classList.remove('d-none')
}
document.getElementById('showpw').addEventListener('click', function(){
	if(document.getElementById('passcek').type === 'password'){
		document.getElementById('passcek').type = 'text'
		document.getElementById('showpw').classList.remove('fa-eye-slash')
		document.getElementById('showpw').classList.add('fa-eye')
	} else {
		document.getElementById('passcek').type = 'password'
		document.getElementById('showpw').classList.add('fa-eye-slash')
		document.getElementById('showpw').classList.remove('fa-eye')
	}
})
document.getElementById('showpwcreate').addEventListener('click', function(){
	if(document.getElementById('passcekcreate').type === 'password'){
		document.getElementById('passcekcreate').type = 'text'
		document.getElementById('showpwcreate').classList.remove('fa-eye-slash')
		document.getElementById('showpwcreate').classList.add('fa-eye')
	} else {
		document.getElementById('passcekcreate').type = 'password'
		document.getElementById('showpwcreate').classList.add('fa-eye-slash')
		document.getElementById('showpwcreate').classList.remove('fa-eye')
	}
})
document.getElementById('showpwconfirm').addEventListener('click', function(){
	if(document.getElementById('passcekconfirm').type === 'password'){
		document.getElementById('passcekconfirm').type = 'text'
		document.getElementById('showpwconfirm').classList.remove('fa-eye-slash')
		document.getElementById('showpwconfirm').classList.add('fa-eye')
	} else {
		document.getElementById('passcekconfirm').type = 'password'
		document.getElementById('showpwconfirm').classList.add('fa-eye-slash')
		document.getElementById('showpwconfirm').classList.remove('fa-eye')
	}
})