$(document).ready(function () {
    $('.close').click(function(){
        $("#myModal").modal('hide')
    });
    $("div[class=glyphimage]").click(function(){
        $(this).parent().submit();
    });
    $("form[name=getImg]").submit(function () {
        var form = $(this);
        $.ajax({
            url: form.attr("action"),
            type: "post",
            dataType: "json",
            data: form.serialize(),
            success: function (result) {
                var image = $("#modalimage");
                var comment = $("#comment");
                var url = $("#url");

                image.attr("src", result.path);
                image.load(function(){
                    $('#myModal').modal();
                });
                comment.html(result.comment);
                url.attr("value", result.url);

            }
        });
        return false;
    });
});
