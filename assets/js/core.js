$(document).ready(function() { 
	
		$("ul.products form").submit(function(e) {
			e.preventDefault();
			// Get the product ID and the quantity 
			var id = $(this).find('input[name=product_id]').val();
			var qty = $(this).find('input[name=quantity]').val();
			
			alert('ID:' + id + '\n\rQTY:' + qty);
			$.post("http://drived.com/ci_cart/cart/add_cart_item", { product_id: id, quantity: qty, ajax: '1' },function(data){
				console.log(data);
				if(data == 'true'){
					$.get("http://drived.com/ci_cart/cart/show_cart", function(cart){ // Get the contents of the url cart/show_cart
							$("#cart_content").html(cart); // Replace the information in the div #cart_content with the retrieved data
					}); 		 
	 			}else{
	 				alert("Product does not exist");
	 			}
 			});
		});

		$(".empty").live("click", function(){
	    	$.get("http://drived.com/ci_cart/cart/empty_cart", function(){
	    		$.get("http://drived.com/ci_cart/cart/show_cart", function(cart){
	  				$("#cart_content").html(cart);
				});
			});
			return false;
	    });
	
});