(function (window, document) {

    new Vue({
        el: '.posts-board',
        data: {
            posts: []
        },
        ready: function(){
          this.$http.get('/api/v1/posts').then(function(response){
            var post_list_obj = response.json();
            // console.log(post_list_obj);
            this.$set("posts", post_list_obj.data);
          }, function(response){});
        }
    });

}(this, this.document));

//# sourceMappingURL=post.js.map
