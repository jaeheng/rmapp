//  Andy Langton's show/hide/mini-accordion @ http://andylangton.co.uk/jquery-show-hide

// this tells jquery to run the function below once the DOM is ready
$(document).ready(function() {

// choose text for the show/hide link - can contain HTML (e.g. an image)

// // initialise the visibility check
// var is_visible = false;

// capture clicks on the toggle links
$('.panel .panel-heading').click(function() {

// // switch visibility
// is_visible = !is_visible;

// change the link text depending on whether the element is shown or hidden
if ($(this).parent().find('ul').is(":hidden")) {
$(this).parent().find('ul').show();
}
else {
$(this).parent().find('ul').hide();
}

// return false so any link destination is not followed
return false;

});
});