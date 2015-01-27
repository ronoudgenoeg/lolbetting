$(".username").focus(function() {
	$(".username-help").slideDown(500);
}).blur(function() {
	$(".username-help").slideUp(500);
});

$(".email").focus(function() {
	$(".email-help").slideDown(500);
}).blur(function() {
	$(".email-help").slideUp(500);
});

$(".password").focus(function() {
	$(".password-help").slideDown(500);
}).blur(function() {
	$(".password-help").slideUp(500);
});

$(".passwordrepeat").focus(function() {
	$(".passwordrepeat-help").slideDown(500);
}).blur(function() {
	$(".passwordrepeat-help").slideUp(500);
});
