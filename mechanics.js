function IdGet(){
	let divs=document.querySelectorAll('.products');
	
	divs.forEach(function(div,index){
		let id="nr_"+index;
		div.setAttribute("section",id);
	});
}
function ListenerforSection(){
	let divs=document.querySelectorAll('section[data-product-id]');
	
	divs.forEach(function(div){
		let productId=div.getAttribute('data-product-id');
		div.addEventListener('click', function (){
			window.location.href = 'choosen.php?id=' + productId;
		});
	});
}
function ListenerforButton(){
	let divs=document.querySelectorAll('button[data-product-id]');
	
	divs.forEach(function(div){
		let productId=div.getAttribute('data-product-id');
		div.addEventListener('click', function (){
			var keys=localStorage ? Object.keys(localStorage).length: 0;
			alert(productId);
			localStorage.setItem(keys,productId)
			event.stopPropagation();
		});
	});
}
function Main(){
	IdGet()
	ListenerforSection()
	ListenerforButton()
	var memory="";
	for(let i=0;i<localStorage.length;i++){
		memory+='<div>'+localStorage.getItem(i)+'</div>';
	}
	document.getElementById("showLocalStorage").innerHTML=memory;
	
	document.getElementById("cart").addEventListener('click',function(){
		var dane = "";
        for (let i = 0; i < localStorage.length; i++) {
            dane += localStorage.getItem(i);
        }
        window.location.href = 'cart.php?data=' + encodeURIComponent(dane);
	});
}
window.onload=Main;
