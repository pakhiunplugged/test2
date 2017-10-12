$(document).ready(function()
{
	$(".col").hover(function()
	{
		$(this).addClass("change");
	},
	function()
	{
		$(this).removeClass("change");
	});
});

