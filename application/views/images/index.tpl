<script src="/assets/js/modal.js"></script>

<div class="imagelist">
    {foreach from=$images item=image}
        <div class="image">

            <form method="post" action="{$BASE_URL}/images/get" name="getImg">
                <input type="hidden" name="id" value="{$image.id}">
                <div class="glyphimage">
                    <img  class="center" src="{$BASE_URL}{$image.thumb}">
                    <div style="">{$image.comment|truncate:30}</div>
                </div>
            </form>
        </div>{/foreach}
</div>


<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="glyphicon glyphicon-remove close"></span>
            <img id="modalimage" src="">
            <div class="modaldata">
                <p class="comment" id="comment">
                </p>
                <span>Ссылка на изображение</span>
                <input type="text" class="form-control center" id="url">
            </div>

        </div>
    </div>
</div>