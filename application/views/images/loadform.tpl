<script src="/assets/js/loadform.js"></script>

<form id="fileform" class="center" action="{$BASE_URL}images/uploadpost" method="post" enctype="multipart/form-data">
    <div class="center glyphupload"><span class="glyphicon glyphicon-cloud-upload"></span></div>
    <h2 class="center interval">Загрузка изображений</h2>
    <div class="file_upload">
        <button class="btn btn-default" type="button">Выбрать</button>
        <div>Файл не выбран</div>
        <input type="file" value="Выбрать файл" accept="image/*" name="userfile[]">

    </div>
    <input type="text" class="form-control center" name="comment" placeholder="Комментарий">
    <input class="btn btn-primary center interval" type="submit" value="Загрузить">
</form>



