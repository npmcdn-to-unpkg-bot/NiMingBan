<div class="posts-board pure-g">
    <div class="posts-entry pure-u-1 pure-u-md-1" v-for="post in posts">
        <div class="post first">
            <template v-if="post.image">
                <img src="http://cdn.ovear.info:8998/image/2016-06-26/576f4980070d7.jpg">
            </template>
            <span>
                <div class="head">
                    <span class="title">
                        <template v-if="ok">
                            @{{ post.title }}
                        </template>
                        <template v-else>
                            无标题
                        </template>
                    </span>
                    <span class="nick">
                        <template v-if="ok">
                            @{{ post.nickname }}
                        </template>
                        <template v-else>
                            无名氏
                        </template>
                    </span>
                    <span class="datetime">
                        @{{ post.created_at }}
                    </span>
                    <span class="uid">
                        <template v-if="post.user">
                            ID: @{{ post.user.no }}
                        </template>
                        <template v-else>
                            ID: xxxxxxx
                        </template>
                    <span>
                    <span class="pno">
                        No.@{{ post.id }}
                    </span>
                </div>
                @{{ post.content }}
                <div class="options">
                    <span class="response">
                        [回应]
                    </span>
                    <span class="report">
                    [举报]
                    </span>
                    <span class="subscribe">
                    [订阅]
                    </span>
                </div>
            </span>
        </div>
        <div class="post item" v-for="subpost in post.subposts">
            <template v-if="subpost.image">
                <img src="http://cdn.ovear.info:8998/image/2016-06-26/576f4980070d7.jpg">
            </template>
            <span>
                <div class="head">
                    <span class="title">
                        <template v-if="ok">
                            @{{ subpost.title }}
                        </template>
                        <template v-else>
                            无标题
                        </template>
                    </span>
                    <span class="nick">
                        <template v-if="ok">
                            @{{ subpost.nickname }}
                        </template>
                        <template v-else>
                            无名氏
                        </template>
                    </span>
                    <span class="datetime">
                        @{{ subpost.created_at }}
                    </span>
                    <span class="uid">
                        <template v-if="subpost.user">
                            ID: @{{ subpost.user.no }}
                        </template>
                        <template v-else>
                            ID: xxxxxxx
                        </template>
                    <span>
                    <span class="pno">
                        No.@{{ subpost.id }}
                    </span>
                </div>
                @{{ subpost.content }}
                <div class="options">
                    <span class="response">
                        [回应]
                    </span>
                    <span class="report">
                    [举报]
                    </span>
                    <span class="subscribe">
                    [订阅]
                    </span>
                </div>
            </span>
        </div>

    </div>

</div>
