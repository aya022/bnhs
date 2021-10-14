// warning message
$("input[name='roll_no']").on("blur", function () {
    if ($(this).val() == "") {
        $(".btnEnroll").show();
        $("#staticBackdrop").modal("hide");
    } else {
        $.ajax({
            url: "form/check/lrn/" + $(this).val(),
            type: "GET",
        })
        .done(function (data) {
            if (data.warning) {
                $("#staticBackdrop").modal("show");
                $(".modal-title").text("Warning!");
                $(".txt").text("You are already registered! Please try again.");
                $(".btnEnroll").hide();
                document.getElementById("enrollForm").reset();
            } else {
                $("#staticBackdrop").modal("hide");
                $(".btnEnroll").show();
            }
        })
        .fail(function (jqxHR, textStatus, errorThrown) {
            getToast("error", "Eror", errorThrown);
        });
    }
});

// for Strand
$("#forStrand").hide();
$('select[name="grade_level"]').on("change", function () {
    if (parseInt($(this).val()) > 10) {
        getStrandNow();
        $("#forStrand").show();
        $("#forcurriculum").hide();
    } else {
        $("#forStrand").hide();
        $("#forcurriculum").show();
    }
});

let getStrandNow = () => {
    let hold = "";
    $.ajax({
        url: "form/strand",
        type: "GET",
        dataType: "json",
    })
        .done(function (data) {
            data.forEach((val) => {
                hold += `<option value="${val.id}">${val.description}</option>`;
            });
            $('select[name="strand"]').html(hold);
        })
        .fail(function (a, b, c) {
            getToast("error", "Eror", errorThrown);
        });
};

// for Balik
$("#forBalik").hide();
$('select[name="grade_level"]').attr("disabled", true);
$('select[name="status"]').on("change", function () {
    if ($(this).val() == "new") {
        $("#forStrand").hide();
        $("#forcurriculum").show();
        $('select[name="grade_level"]').val("").attr("disabled", true);
    } else if ($(this).val() == "new_eleven") {
        getStrandNow();
        $("#forStrand").show();
        $("#forcurriculum").hide();
        $('select[name="grade_level"]').val("").attr("disabled", true);
    } else {
        $("#forStrand").hide();
        $("#forcurriculum").show();
        $('select[name="grade_level"]').val("").attr("disabled", false);
    }
    if ($(this).val() == "balikAral") {
        $("#forBalik").show();
    } else {
        $("#forBalik").hide();
    }
});
// save pre-enroll
$("#enrollForm").submit(function (e) {
    $(".btnEnroll").attr("disabled", true);
    e.preventDefault();
    $.ajax({
        url: "form/save",
        type: "POST",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function (data) {
            $(".btnEnroll")
                .html(` <div class="spinner-border spinner-border-sm" role="status">
            <span class="sr-only">Loading...</span>
          </div>`);
        },
    })
        .done(function (data) {
            // if the admission is disabled
            if (data.warning) {
                getToast(
                    "warning",
                    "Warning",
                    data.warning + ", Please Contact the School Administrator"
                );
                $(".btnEnroll").html("Submit");
                $(".btnEnroll").attr("disabled", false);
            } else {
                // if the admission is active
                window.location.href = "/done/" + data;
            }
        })
        // error message
        .fail(function (jqxHR, textStatus, errorThrown) {
            $(".btnEnroll").html("Submit");
            $(".btnEnroll").attr("disabled", false);
            getToast("error", "Eror", errorThrown);
        });
});