<div id="menu" class="uk-width-1-6">
  <div class="header uk-text-center">
    Makoto的匿名板
  </div>
  <div class="nav">
    <ul class="uk-nav uk-nav-side uk-nav-parent-icon">
        <li class="" v-for="item in items" :class="{'uk-parent': item.subboards.length > 0}">
          <a href="#"
            :href="item.subboards.length == 0 ? '/board/?board_id='+ item.id : '#' "
            >
            @{{ item.name }}
          </a>
          <ul class="uk-nav-sub" v-if="item.subboards.length > 0">
            <li v-for="sub_item in item.subboards">
              <a href="#" :href="'/board/?board_id=' + sub_item.id ">@{{ sub_item.name }}</a>
            </li>
          </ul>
        </li>
    </ul>
  </div>
</div>
