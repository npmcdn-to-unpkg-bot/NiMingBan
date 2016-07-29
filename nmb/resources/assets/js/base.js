function range(len){
  return Array.apply(null, Array(len)).map(function (_, i) {return i;});
}

Vue.config.debug = true;
Vue.http.options.root = '/api';

new Vue({
  el: "div.new.form",
  data: {
    board_id: "0"
  },
  ready: function(){
    this.$watch("board_id", function(new_value, old_value){
      // console.log(new_value);
      if (new_value == undefined) {
        $("div.new.button > button").attr("disabled", "disabled");
      }
    });
    this.$set("board_id", config.current_board);
  },
  methods: {
    push_data: function(event){
      var url = "/api/v1/posts";
      var options = {};
      var post_id = config.current_post_id;
      if (this.post_id && this.post_id != "0"){
        post_id = this.post_id;
      }
      options.params = {
        board_id: config.current_board,
        page: config.current_page,
        post_id: post_id
      };
      console.log(config.current_board);
      options.headers = {
        "X-CSRF-TOKEN": this.csrf_token
      };
      var body = this.$data;
      this.$http.post(url, body, options).then(
        function(response){
          console.log(response);
        },
        function(response){}
      );
    },
    file_change: function(event){
      var files = event.target.files;
      var allFiles = [];

      for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(){
          allFiles.push(reader.result);
        }
      }

      this.$set("allFiles", allFiles);
    }
  }

});
