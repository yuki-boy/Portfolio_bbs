const { Modal } = require("bootstrap");
const { mapKeys } = require("lodash");

$(document).ready(function() {
  //queue()で処理を溜めてdequeue()で実行。1秒経ったらfadeOut()
 $("#timeout").fadeIn().queue(function() {
     setTimeout(function(){$("#timeout").dequeue();
     }, 1000);
 });
 $("#timeout").fadeOut();
});

// 投稿のモーダルウィンドウ
'use strict';
{
  const open = document.getElementById('open')
  const close = document.getElementById('close')
  const modal = document.getElementById('modal')
  const covor = document.getElementById('covor')

  open.addEventListener('click', () => {
    modal.classList.remove('hidden');
    covor.classList.remove('hidden');
  });

  close.addEventListener('click', () => {
    modal.classList.add('hidden');
    covor.classList.add('hidden');
  });

  covor.addEventListener('click', () => {
    close.click();
  });
}

// 投稿のモーダルウィンドウ
'use strict';
{
  const c_open = document.getElementById('c_open')
  const c_close = document.getElementById('c_close')
  const c_modal = document.getElementById('c_modal')
  const c_covor = document.getElementById('c_covor')

  c_open.addEventListener('click', () => {
    c_modal.classList.remove('c_hidden');
    c_covor.classList.remove('c_hidden');
  });

  c_close.addEventListener('click', () => {
    c_modal.classList.add('c_hidden');
    c_covor.classList.add('c_hidden');
  });

  c_covor.addEventListener('click', () => {
    c_close.click();
  });
}

