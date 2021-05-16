$(document).ready(function() {
  //queue()で処理を溜めてdequeue()で実行。3秒経ったらfadeOut()
 $("#timeout").fadeIn().queue(function() {
     setTimeout(function(){$("#timeout").dequeue();
     }, 1000);
 });
 $("#timeout").fadeOut();
});