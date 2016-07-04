(function (window, document) {

    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    menuLink.onclick = function (e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    };

}(this, this.document));

(function (window, document) {

    var menu_obj = new Vue({
        el: '#menu',
        data: {
            items: []
        },
        ready: function(){
          if(!config){
            config = {};
            config.current_board = 0;
          }
          this.$set("cbid", config.current_board);

          this.$http.get('/api/v1/boards').then(function(response){
            var item_list_obj = response.json();
            this.$set("items", item_list_obj.list);
          }, function(response){});
        }
    });

}(this, this.document));

function nihao(name){
  console.log(name);
}

Vue.http.options.root = '/api';

//# sourceMappingURL=base.js.map
