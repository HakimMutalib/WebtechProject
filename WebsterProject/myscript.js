var oBtn1 = document.getElementById('btn1');
var oBtn2 = document.getElementById('btn2');
var oShowtime = document.getElementById('showTime');


oBtn1.addEventListener('click', showTime);
oBtn2.addEventListener('click', getCode);
showTime();
function showTime(){
  var oDate = new Date();
  var now = "";
  now = oDate.getDay()+" ";
  now = now + (oDate.getMonth()+1) + " ";
  now = now + oDate.getDate()+" ";
  now = now + oDate.getFullYear() + " ";
  now = now + oDate.getHours() + ":";
  now = now + oDate.getMinutes() + ":";
  now = now + oDate.getSeconds() + " ";
  now = now + "GMT+0800(Malaysia Time)";
  document.getElementById("showTime").innerHTML = now;
  setTimeout("showTime()",1000);
}

function getCode(){
  alert("Your code is INFO 2302");
}
