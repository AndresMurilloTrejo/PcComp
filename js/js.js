(function(){
	$(document).ready(function(){
		$(".btn-menu").click(function(e){
			e.preventDefault();
			var filtro = $(this).attr("data-filter");

			if (filtro == "todos") {
				$(".box-img").show(500);
			} else {
				$(".box-img").not("."+filtro).hide(500);
				$(".box-img").filter("."+filtro).show(500);
			}
		});

		$("ul li").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
		});
	});
}());

function mostrar(id) {
	var aorus = document.getElementById('oculto');
	var msi = document.getElementById('oculto2');
  
   switch(id) {
	case 1:

		if(msi.style.display=='block'){
			msi.style.display="none";
		}
	
		if(aorus.style.display=='none'){
			aorus.style.display="block";
		}else{
			aorus.style.display="none";
		}
		break;
	
	case 2:

		if(aorus.style.display=='block'){
			aorus.style.display="none";
		}

		if(msi.style.display=='none'){
			msi.style.display="block";
		}else{
			msi.style.display="none";
		}
		break;
		
	}
}
