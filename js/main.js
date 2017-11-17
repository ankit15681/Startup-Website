/*navigation bar opaque property on scrolling*/
function navbarOpaque(){
	if($(this).scrollTop() > 30){
	$('.navbar').addClass('opaque');
	$('#back-to-top').show(500);


}
else{
	$('.navbar').removeClass('opaque');
	$('#back-to-top').hide(500);
}
}

$(window).scroll(navbarOpaque);

$(navbarOpaque);

/*hash links scrollable*/

$(function()
{
	$("a[href^='#']").on('click', function(event) {
		event.preventDefault();

		var hash = this.hash;

		$("html, body").animate({
			scrollTop: $(hash).offset().top - 75
		}, 900, function()
		{
			window.location.hash = hash;
		});
	});	
})



/*popup for video*/

$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#Video").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#Video").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#Video").attr('src', url);
    });
});

$(function()
 {
    $("#contactform").submit(function(e){
		e.preventDefault();

		var name = $("input[name='name']").val();
		var phone = $("input[name='phone']").val();
		var email = $("input[name='email']").val();
		var message = $("textarea[name='subject']").val();

		$.post("action.php",{name:name,phone:phone,email:email,subject:message},function(result){
			if(result=="Success")
				{
					swal("Done!","Thank you for reaching us","success");
				}	

			else	
				{
					swal("ERROR","Unsuccessful","error");
				}
		})
	})
 });