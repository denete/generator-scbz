var UI_WAIT_MSG = {
    message: "<h3><i class='icon-spinner icon-spin'></i> Processing... </h3>",
    css: { border: "3px solid pink", padding: "5px", 'min-width': "300px" }
}

function autotab (current, next) {
    if (current.getAttribute && current.value.length == current.getAttribute("maxlength")) {
        next.focus();
    }
}

$(function() {
    /* use to prevent scroll to top if using fancybox for popups
    $('.fancybox').fancybox({
        helpers: {
            overlay: {locked: false}
        }
    });
    */
});
