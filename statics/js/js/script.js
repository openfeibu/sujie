function yaosi(){
	if($(".yaosi").hasClass("cufz")){
		//alert(1);
		$(".yaosi").removeClass("cufz");
	}else{
		$(".yaosi").addClass("cufz");
	}
}
$(function(){
	$("#login").show().addClass("login-dh");
	$(".mountain").show().addClass("mountain-animation");
	$(".con-header").show().addClass("header-animation");
	setTimeout(function(){
		$(".phone").show().addClass("phone-animation");
		$(".ship").show().addClass("ship-animation");
		$(".text a").removeClass("opacity");
	},1000);
	setTimeout(function(){
		$(".cloud").show().addClass("cloud-animation");
		$("section .text").show().addClass("text-animation");
	},1500);
	//setTimeout(yaosi,2000);
	setInterval(yaosi,1000)
})
