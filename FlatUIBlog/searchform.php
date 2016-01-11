<!--
MyCustomeSearchForm
ウィジェットから検索フォームを追加した際に、デフォルトではなくこちらが呼ばれます
 -->
<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" >
    <input class="form-control" type="search" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="キーワード検索" />
</form>
