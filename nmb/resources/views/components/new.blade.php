<div class="new button">
    <button class="uk-button uk-button-primary" data-uk-toggle="{target:'.new.form'}">来一串~</button>
</div>

<div class="new form uk-hidden">
    <form class="uk-form uk-form-stacked">
        <div class="uk-form-row">
            <label class="uk-form-label" for="username">名称</label>
            <div class="uk-form-controls">
                <input type="text" id="username" placeholder="别人对你的称呼">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="email">邮箱</label>
            <div class="uk-form-controls">
                <input type="email" id="email" placeholder="联系你的一种方式">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="title">标题</label>
            <div class="uk-form-controls">
                <input type="text" id="title" placeholder="可能存在的中心主题">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="content">正文</label>
            <div class="uk-form-controls">
                <textarea id="content" placeholder="内容"></textarea>
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="image">图片</label>
            <div class="uk-form-controls">
                <input type="file" id="image">
            </div>
        </div>
        <div class="uk-form-row">
            <label class="uk-form-label" for="submit">发表</label>
            <div class="uk-form-controls">
                <button class="uk-button uk-button-success">提交</button>
            </div>
        </div>
    </form>
</div>
