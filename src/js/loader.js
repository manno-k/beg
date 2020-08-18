jQuery(function ($){
// 画面が読み込まれた時、js-loaderを外し、アニメーションさせる
  $(window).on('load', function(){
    $('body').removeClass('js-loader');
  });

  $(function() {
    // ハッシュリンク(#)と別ウィンドウでページを開く場合は実行しない

    $('a:not([href^="#"]):not([target])').on('click', function(e){
      e.preventDefault();         // ページ遷移を一旦キャンセル
      url = $(this).attr('href'); // 遷移先のURLを取得

      if (url !== '') {
        $('body').addClass('js-loader-out'); // 画面遷移前のアニメーション is-slide-in

        setTimeout(function () {
          window.location = url;  // 0.7秒後に取得したURLに遷移
        }, 700);
      }
      return false;
    });

  });
});

jQuery(function ($) {
  function lazyLoadVideo () {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', "<?php echo $top_movie['url']; ?>", true);
    xhr.responseType = 'blob';
    xhr.onload = function (e) {
      if (this.status === 200) {
        // ロード完了
        var blob = this.response;
        var src = (window.webkitURL || window.URL).createObjectURL(blob);
        $('#js-bg_movie').append('<source type="video/mp4" src="' + src + '">');
      }
    };
    xhr.send();
  }

  // 実行
  lazyLoadVideo();
});

