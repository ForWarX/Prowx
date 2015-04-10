 $(function () {
 /// scroll to top ////
 function scrollTop() {
        if (window.pageYOffset) {
            return window.pageYOffset;
        } else if (document.body.scrollTop) {
            return document.body.scrollTop;
        } else {
            return document.documentElement.scrollTop;
        };
    }
    window.onscroll = function () {
        var num = scrollTop();
        if (num > 200) {
            document.getElementById("scroll_to_top").style.display = "block";
        } else {
            document.getElementById("scroll_to_top").style.display = "none";
        }
    };
    document.getElementById("scroll_to_top").onclick = backTop;
	
	 var backTopTimer;
    function backTop() {
        var numTop;
        numTop = scrollTop();
        if (numTop == 0) {
            clearTimeout(backTopTimer);
        } else {
            window.scrollBy(0, -50);
            backTopTimer = setTimeout(backTop, 10);
        }
    }
});