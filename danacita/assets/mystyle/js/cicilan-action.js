function openAc(id){
	document.getElementById('edit-'+id).classList.remove('d-none')
	document.getElementById('delete-'+id).classList.remove('d-none')
	document.getElementById('close-'+id).classList.remove('d-none')
	document.getElementById('open-'+id).classList.add('d-none')
}
function closeAc(id){
	document.getElementById('edit-'+id).classList.add('d-none')
	document.getElementById('delete-'+id).classList.add('d-none')
	document.getElementById('close-'+id).classList.add('d-none')
	document.getElementById('open-'+id).classList.remove('d-none')
}