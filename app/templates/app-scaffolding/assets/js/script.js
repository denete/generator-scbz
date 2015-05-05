var mdiIsNativeShell = function() {
    if(navigator.userAgent.match(/(Mdi Native Shell)/)) {
        return true;
    } else {
        return false;
    }
};

var autotab = function(current, next) {
    if (current.getAttribute && current.value.length == current.getAttribute("maxlength")) {
        next.focus();
    }
};
