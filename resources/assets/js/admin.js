window.onload = function () {
    var alerts = document.querySelectorAll(".alert");
    for ( let i = 0; i < alerts.length; i++ ) {
        alerts[i].onclick = function() {this.parentNode.removeChild(this);}
    }
}