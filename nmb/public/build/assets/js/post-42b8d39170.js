(function (window, document) {

    new Vue({
        el: '.posts-board',
        data: {
            posts: []
        },
        ready: function(){
          var options = {};
          options.params = {
            board_id: config.current_board,
            page: config.current_page,
            post_id: config.current_post_id
          };
          this.$set("board_id", config.current_board);
          this.$set("page", Number(config.current_page));
          this.$set("post_id", Number(config.current_post_id));

          var url = "/api/v1/posts"
          if(this.post_id > 0){
            url = url + "/" + this.post_id;
          }

          this.$http.get(url, options).then(function(response){
            var post_list_obj = response.json();
            // console.log(post_list_obj);
            this.$set("posts", post_list_obj.data);
            this.$set("paginate", post_list_obj.paginate);

            // paginate url
            var base_paginate_url = "/board/?";
            base_paginate_url += "board_id=" + this.board_id;
            base_paginate_url += "&";
            base_paginate_url += "post_id=" + this.post_id;

            this.$set(
              "paginate.last_page_url",
              base_paginate_url+"&page="+this.paginate.last_page_num
            );
            this.$set(
              "paginate.first_page_url",
              base_paginate_url+"&page=1"
            );


            if(post_list_obj.paginate.has_prev_page){
              this.$set(
                "paginate.prev_page_url",
                base_paginate_url+"&page="+(this.page-1)
              );
            }else{
              this.$set(
                "paginate.prev_page_url",
                "javascript:;"
              );
            }

            if(post_list_obj.paginate.has_next_page){
              this.$set(
                "paginate.next_page_url",
                base_paginate_url+"&page="+(this.page+1)
              );
            }else{
              this.$set(
                "paginate.next_page_url",
                "javascript:;"
              );
            }

          }, function(response){});

        }
    });

}(this, this.document));

//# sourceMappingURL=post.js.map
