
<!-- Menu toggle -->
<a href="#menu" id="menuLink" class="menu-link">
<!-- Hamburger icon -->
    <span></span>
</a>
<div id="menu">
    <div class="pure-menu">
        <a class="pure-menu-heading" href="#">匿名板</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"
                v-bind:class="{'pure-menu-item': !item.is_top, 'menu-item-divided': item.is_top}"
                v-for="item in items">
                <a href="#" class="pure-menu-link">@{{ item.name }}</a>
            </li>
        </ul>
    </div>
</div>
