<div class="posts-board uk-container">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" v-model="csrf_token">
    <div class="posts-entry uk-width-1-1" v-for="post in posts">
        <div class="post first">
            <template v-if="post.image">
                <a href="" :href="post.image" data-uk-lightbox title="post image">
                    <img :src="post.image">
                </a>
            </template>
            <span>
                <div class="head">
                    <span class="title">
                        <template v-if="post.title">
                            @{{ post.title }}
                        </template>
                        <template v-else>
                            无标题
                        </template>
                    </span>
                    <span class="nick">
                        <template v-if="post.nickname">
                            <template v-if="post.email">
                                <a href="" :href="'mailto:'+post.email">@{{post.email}}</a>
                            </template>
                            <template v-else>
                                @{{ post.nickname }}
                            </template>
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
                        <a href="javascript:;" @click="report_post_model($event, post.id)">
                            举报
                        </a>
                    </span>
                    <span class="subscribe">
                    [订阅]
                    </span>
                </div>
            </span>
        </div>
        <div class="post tooltip" v-if="(post.hidden_count > 0) & (post_id == 0)">
            <a href="/board?board_id={{ $board_id}}&post_id=@{{ post.id }}&page=1">
                …有@{{ post.hidden_count }}条被隐藏，点击进入详情页查看
            </a>
        </div>
        <div class="post item" v-for="subpost in post.subs">
            <template v-if="subpost.image">
                <a href="" :href="subpost.image" data-uk-lightbox title="subpost image">
                    <img :src="subpost.image">
                </a>
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
    @include("components.pagination")
</div>
