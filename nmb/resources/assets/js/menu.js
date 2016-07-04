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
