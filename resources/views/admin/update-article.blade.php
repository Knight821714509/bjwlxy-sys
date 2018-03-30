@extends('layouts.frame')

@section('form')
    <div class="panel">
        <div class="panel-heading">编辑文章</div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{url('up-arti')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$article[0]->id}}">
                <div class="form-group">
                    <label class="control-label col-md-3" for="title">文章标题：</label>
                    <div class="col-md-7">
                        <input type="text" name="title" id="title" class="form-control" value="{{$article[0]->title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="keywords">关键字：</label>
                    <div class="col-md-7">
                        <input type="text" name="keywords" id="keywords" class="form-control" value="{{$article[0]->keywords}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="description">摘要：</label>
                    <div class="col-md-7">
                        <input type="text" name="description" id="description" class="form-control" value="{{$article[0]->description}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="category">分类：</label>
                    <div class="col-md-7">
                        <select class="form-control" name="category" id="category">
                            <option class="form-control" value="">请选择</option>
                            @foreach($col as &$item)
                                <option class="form-control" value="{{$item->url}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3" for="editor_id">文章内容：</label>
                    <textarea id="editor_id" name="content" style="width:668px;height:600px;">{{$article[0]->content}}</textarea>
                </div>
                <div class="col-md-offset-3 col-md-7">
                    <input class="btn btn-success" type="submit" value="发布文章">
                    <input class="btn btn-info pull-right" type="reset">
                </div>
            </form>
        </div>
    </div>
    <script charset="utf-8" src="{{asset('kindeditor/kindeditor-all.js')}}"></script>
    <script charset="utf-8" src="{{asset('kindeditor/lang/zh-CN.js')}}"></script>
    <script>
        KindEditor.ready(function(K) {
            window.editor = K.create('#editor_id');
        });
    </script>
    <script>
        // 取得HTML内容
        html = editor.html();

        // 同步数据后可以直接取得textarea的value
        editor.sync();
        html = document.getElementById('editor_id').value; // 原生API

        // 设置HTML内容
        editor.html(html);
    </script>
    <script>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content1"]', {
                cssPath : '../plugins/code/prettify.css',
                uploadJson : '../php/upload_json.php',
                fileManagerJson : '../php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    </script>
@endsection