window.onscroll = function () {
    if (document.documentElement.scrollTop + document.body.scrollTop > 100) {
        document.getElementById("amz-toolbar").style.display = "block";
		$('#amz-toolbar').addClass('am-animation-slide-bottom');
    }
    else {
        document.getElementById("amz-toolbar").style.display = "none";
    }
}

$(function () {
	var i=-1;
	$('.list-group').find('.categorychild').each(function(index, item){
		$(this).click(function(){
			//$('.nav-list').toggle();
			var childname=$(this).attr('data-child');
			var liststatus=$('#'+childname).css('display');//alert(liststatus);
			if(i!=index && liststatus!='none'){//alert(1);
				$('.nav-list').removeClass('am-animation-slide-left');
				$('.nav-list').addClass('am-animation-slide-left');
				$('.nav-list').css('display','none');
				$('#'+childname).css('display','block');	
			} 
			else if(liststatus=='none'){
				$('.nav-list').removeClass('am-animation-slide-left');
				$('.nav-list').addClass('am-animation-slide-left');
				$('.nav-list').css('display','none');
				$('#'+childname).css('display','block');
				
			}else{
				$('.nav-list').css('display','none');
			}
			//$('.nav-list').html($(this).html());
			i=index;
		});
	});
});