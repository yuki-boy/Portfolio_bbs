$(document).ready(function() {
  //queue()で処理を溜めてdequeue()で実行。1秒経ったらfadeOut()
 $("#timeout").fadeIn().queue(function() {
     setTimeout(function(){$("#timeout").dequeue();
     }, 1000);
 });
 $("#timeout").fadeOut();
});

// モーダルウィンドウ
'use strict';
{
  const open = document.getElementById('open')

  open.addEventListener('click', () => {
    modal.classList.remove('hidden');
  });




}

