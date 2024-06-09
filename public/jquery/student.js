var stu_id = 0;
$(document).on("click", "#delete", function () {

    let id = $(this).attr("data-id");
    $("#modal-delete").modal("show");
    stu_id = id;

}).on("click", "#accept-delete", function () {

    try {
        $.ajax({
            url: "http://127.0.0.1:8001/api/delete",
            type: "POST",
            data: {
                "stu_id": stu_id,
            },
            beforSend: function () { },
            success: function (response) {

                if (response.status != "success") {
                    // message
                    return;
                }
                $("#row-student[data-id='" + stu_id + "']").remove();
                $("#modal-delete").modal("hide");
            },
            error: function (xhr, status, error) { }
        });
    } catch (error) {
        throw error;
    }
}).on("click", "#update", function () {

    let id = $(this).attr("data-id");
    stu_id = id;

    try {
        $.ajax({
            url: "http://127.0.0.1:8001/api/search",
            type: "POST",
            data: {
                "stu_id": id,
            },
            beforSend: function () { },
            success: function (response) {

                if (response.status != "success") {
                    // message
                    return;
                }
                $("#modal-update").modal("show");
                $(".modal-boy-update").html(response.view);
            },
            error: function (xhr, status, error) { }
        });
    } catch (error) {
        throw error;
    }

}).on("click", "#accept-update", function () {

    let name = $("#name").val();
    let gender = $("#gender").val();
    let classes = $("#class").val();
    let major = $("#major").val();

    try {
        $.ajax({
            url: "http://127.0.0.1:8001/api/upate",
            type: "POST",
            data: {
                "stu_id": stu_id,
                "name": name,
                "gender": gender,
                "class": classes,
                "major": major,
            },
            beforSend: function () { },
            success: function (response) {

                if (response.status != "success") {
                    // message
                    return;
                }

                $("#row-student[data-id='" + stu_id + "']").replaceWith(response.view);
                $("#modal-update").modal("hide");

            },
            error: function (xhr, status, error) { }
        });
    } catch (error) {
        throw error;
    }


});

