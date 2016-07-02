(function (window, document) {

    new Vue({
        el: '#menu',
        data: {
            items: []
        },
        ready: function(){
          this.$http.get('/api/v1/boards').then(function(response){
            var item_list_obj = response.json();
            this.$set("items", item_list_obj.list);
          }, function(response){});
        }
    });

}(this, this.document));
