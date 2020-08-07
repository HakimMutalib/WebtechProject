var jsDivBox = document.getElementById("loopDiv");
var jsImg = document.getElementById("pic");

var jsLeft = document.getElementById("left");
var jsRight = document.getElementById("right");

var jsUl = document.getElementById("list");
var jsLis = jsUl.getElementsByTagName("li");

jsLis[0].style.backgroundColor = "red";


var currentPage = 0;


var timer = setInterval(func, 3000);
function func() {
    currentPage++;
    changePic();

}
function changePic() {
    if (currentPage == 3) {
        currentPage = 0;
    }
    if (currentPage == -1) {
        currentPage = 2;
    }

    jsImg.style.background="url(img/"+currentPage+".jpg)";


    for (var i = 0; i < jsLis.length; i++) {
        jsLis[i].style.backgroundColor = "#aaa";
    }

    jsLis[currentPage].style.backgroundColor = "red";
}


jsDivBox.addEventListener("mouseover", func1, false);
function func1() {

    clearInterval(timer);

    jsLeft.style.display = "block";
    jsRight.style.display = "block";
}

jsDivBox.addEventListener("mouseout", func2, false);
function func2() {

    timer = setInterval(func, 3000);


    jsLeft.style.display = "none";
    jsRight.style.display = "none";
}


jsLeft.addEventListener("click", func3, false);
function func3() {
    currentPage--;
    changePic();
}
jsLeft.onmouseover = function() {
    this.style.backgroundColor = "rgba(0,0,0,0.6)";
}
jsLeft.onmouseout = function() {
    this.style.backgroundColor = "rgba(0,0,0,0.2)";
}
jsRight.addEventListener("click", func4, false);
function func4() {
    currentPage++;
    changePic();
}
jsRight.onmouseover = function() {
    this.style.backgroundColor = "rgba(0,0,0,0.6)";
}
jsRight.onmouseout = function() {
    this.style.backgroundColor = "rgba(0,0,0,0.2)";
}

for (var j = 0; j < jsLis.length; j++) {
    jsLis[j].onmouseover = function() {
        currentPage = parseInt(this.innerHTML) - 1;
        changePic();
    };
}
