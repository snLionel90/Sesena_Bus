function startTime(){
    todaY = new Date();
    h = todaY.getHours();
    m = todaY.getMinutes(),
    s = todaY.getSeconds();
    m= checkTime(m);
    s= checkTime(s);

    document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
    t=setTimeout('startTime()', 500);
}
function checkTime(i){
    if (i<10){i="0" +i;} return i;
}
window.onload=function(){startTime();}
