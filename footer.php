<footer>
	<div class="footer-a-c"><a class="footer_a" href="https://twitter.com/unitext_ku?lang=ja">Twitter</a></div>
	<div class="footer-a-c"><a class="footer_a" href="https://www.facebook.com/unitext.ku/?ref=nf">Facebook</a></div>
	<div class="footer-a-c"><a class="footer_a" href="http://unitext.chu.jp/">提供サービス</a></div>
	<img class="footer_log" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoBAMAAACLAuyrAAAAD1BMVEVedrlHcExfd7prgb9fd7ooZSjSAAAABXRSTlP9AMJPjHMLTLIAAAG4SURBVEjH7ZZZkoMgEIZxOYCIB1CSA2i4gCbc/0zTG7gkBGtqnqbkQaWhP/6GphOl/7ipC3gB/zGwtQO+nnbSurOV5o7Gzk1rY+/ee4uDltodRkryeFicw8NbYKMKfPUKfFrFRunU4KG4TWjEVsIi+AD/Ep25pYDgvmyAFS2xByoE8twTQHCvuIMhE9D6WUFYBHw55z0Ng8uIATys73F4t4d7hWoPpBUHHY1iqbHL5pGDSoZM0zJAjLmjuD8Bo0LNwDoFnNc8A3UUMQOnb8CKFp4zQIg5RJxTWMw4MQc08WTTCoVRUPZRx7wB4TgpsfFbBj8Ch61CjTEnFCrZYsq/5aRCmFCkFK7AeMZphRGINyChEO/yTSjhTPJACH5JKNSbvAlZ8+mUD8BRVblT7uR6n1MIxWT+flNwzdN5yPFkgHDGzXpTDkDxIwbDmxwQy6ZJ3mWqa/FZyD3YAEcOgcuHdhyx1DDaqwMQ3Evv+dRiTrLcAAwKle1JF+VMqA5vwFCJhxXYCrDeKYy120gAZQLYht+KCDTfgDFB+xRQm6e1L/5yvNHOUccdjNiw2rOhc2Kerr8iF/D37QdXx9malpkfwAAAAABJRU5ErkJggg==">
	<p class="footer_p">Copyright (C) 2017 UNITEXT,All right reserved.</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
jQuery(function(e){var n=e(window),t=e("header");e(document).on("click touch",function(t){n.width()<=800&&(e(t.target).closest("#header-menu-bx").length||(e(t.target).closest("#header-menu-sw").length?e("#header-menu-bx").toggle():e("#header-menu-bx").hide()))}),n.resize(function(){n.width()>800?e("#header-menu-bx").show():e("#header-menu-bx").hide()})<?php if(!isset($header_show)||$header_show!==1):?>,n.scroll(function(){n.scrollTop()>200?t.slideDown():t.slideUp()})<?php endif;?>});
</script>
</body>
</html>