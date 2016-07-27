<div class="new button">
    <button class="uk-button uk-button-primary" data-uk-toggle="{target:'.new.form'}">来一串~</button>
</div>

<div class="new form uk-hidden">
    {!! csrf_field() !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}" v-model="csrf_token">
    <form class="uk-form uk-form-stacked">
        <div class="uk-form-row">
            <label class="uk-form-label" for="nickname">名称</label>
            <div class="uk-form-controls">
                <input type="text" id="nickname" v-model="nickname" placeholder="别人对你的称呼">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="email">邮箱</label>
            <div class="uk-form-controls">
                <input type="email" id="email" v-model="email" placeholder="联系你的一种方式">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="title">标题</label>
            <div class="uk-form-controls">
                <input type="text" id="title" v-model="title" placeholder="可能存在的中心主题">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="content">正文</label>
            <div class="uk-form-controls">
                <textarea id="content" v-model="content" placeholder="内容"></textarea>
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="image">图片</label>
            <div class="uk-form-controls">
                <input type="file" id="image" v-on:change="file_change">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="submit">发表</label>
            <div class="uk-form-controls">
                <button v-on:click.prevent.stop="push_data" class="uk-button uk-button-success">提交</button>
            </div>
        </div>
    </form>
</div>
