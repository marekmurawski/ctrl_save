$(document).keydown(function(event) {
    if (!( String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey && !event.altKey) && !(event.which == 19)) return true;
    //alert("Ctrl-s pressed");
    //find submit button with name == "continue" and travel upwards DOM to find parent form and sumbit it
    if ($('#content').find('input[name|="continue"]').parents('form').submit()) {
    event.preventDefault(); return false;
    }
});