<div class="pagination">
    <a class="pure-button first"
        href="@{{ paginate.first_page_url }}">
        第一页
    </a>
    <a class="pure-button prev"
        href="@{{ paginate.prev_page_url }}"
       v-bind:class="{'pure-button-disabled': !paginate.has_prev_page}"
    >
        上一页</a>
    <a class="pure-button next"
        href="@{{ paginate.next_page_url }}"
        v-bind:class="{'pure-button-disabled': !paginate.has_next_page}"
    >
        下一页</a>
    <a class="pure-button last"
        href="@{{ paginate.last_page_url }}">
        最终页
    </a>

</div>
