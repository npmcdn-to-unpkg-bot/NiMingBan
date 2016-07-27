(function (window, document) {
    new Vue({
        el: '#menu',
        data: {
            items: [],
            cbid: "0"
        },
        ready: function(){
          if(!config){
            config = {};
            config.current_board = 0;
          }
          console.log(config.current_board);
          this.$set("cbid", config.current_board);

          this.$http.get('/api/v1/boards').then(function(response){
            var items = response.json();
            this.$set("items", items);
            this.$nextTick(function () {
              this.$log("items");
              UIkit.nav(".nav > .uk-nav");
            });
          }, function(response){});
        }
    });

}(this, this.document));
