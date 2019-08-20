<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"  style = "margin: 0px;">
    <div>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s"/>
    </div>
</form>