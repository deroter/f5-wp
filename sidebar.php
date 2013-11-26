<h3>サイト内検索</h3>
<form method="get" action="<?php bloginfo('home'); ?>" id="searchbox">
<input type="text" class="inputField" id="searchKeyword"  name="s" size="20" onFocus="if (this.value == '<?php _e('検索キーワードを入力してね'); ?>') this.value = '';" onBlur="if (this.value == '') this.value = '<?php _e('検索キーワードを入力してね'); ?>';" value="<?php if ( is_search() ) echo wp_specialchars($s, 1); else _e('検索キーワードを入力してね'); ?>" />
<input type="image" name="searchbtn" src="<?php bloginfo('template_url'); ?>/img/btn_seach.jpg" width="76" height="30" alt="けんさくする" class="search-btn" id="submit" />
</form>
<h3>メニュー</h3>
<?php dynamic_sidebar( 'side-bar' ); ?>
<h3>Docs</h3>

<a href="http://foundation.zurb.com/docs/" class="button [radius round]">Doc</a>