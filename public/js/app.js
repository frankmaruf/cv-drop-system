// Education ajax

$("#add_education_btn").on("click", function () {
    var url = $(this).data("url");
    $.ajax({
        url: url,
        success: function (result) {
            $("#education_body_no").remove();
            $("#education_body").append(result);
        },
    });
});

$(document).on("click", ".education-form-btn", function () {
    var key = $(this).data("key");
    $("#" + key).remove();
    var body = $("#education_body");

    if (body.children().length <= 0) {
        body.append('<span id="education_body_no"> No Education </span>');
    }
});

// Training Ajax

$("#add_training_btn").on("click", function () {
    var url = $(this).data("url");
    $.ajax({
        url: url,
        success: function (result) {
            $("#training_body_no").remove();
            $("#training_body").append(result);
        },
    });
});

$("#training_check").on("click", function () {
    var checked = $(this).is(":checked");
    if (checked) {
        $("#training_card_base").removeClass("d-none");
    } else {
        $("#training_card_base").addClass("d-none");
    }
});

$(document).on("click", ".training-form-btn", function () {
    var key = $(this).data("key");
    $("#" + key).remove();
    var body = $("#education_body");

    if (body.children().length <= 0) {
        body.append('<span id="education_body_no"> No Education </span>');
    }
});

// Division ajax

$(document).on("change", "#division", function () {
    var url = $(this).data("url");

    $.ajax({
        url: url,
        data: { division: $(this).val() },
        success: function (result) {
            var parent = $("#district").parent();
            $("#district").remove();
            parent.append(result);
            var parent = $("#thana").parent();
            $("#thana").remove();
            parent.append(
                '<select id="thana" name="thana" class="form-select"><option selected>Choose...</option><option>...</option></select>'
            );
        },
    });
});
// District ajax

$(document).on("change", "#district", function () {
    if (url == "null") {
        return;
    }
    var url = $(this).data("url");
    $.ajax({
        url: url,
        data: { district: $(this).val() },
        success: function (result) {
            var parent = $("#thana").parent();
            $("#thana").remove();
            parent.append(result);
        },
    });
});







// Data submit

// $(document).on("click", "#submit_data", function () {
//     var name = $("#name").val();
//     validate("name", name);
//     var email = $("#email").val();
//     validate("email", email);
//     var address = $("#address").val();
//     validate("address", address);
// });

// function validate(name, value) {
//     if (value.length <= 0) {
//         alert(name + " field is require");
//         return;
//     }
//     if (name == "email") {
//         var validate = emailValidate(value);
//         if (!validate) {
//             alert("email address is invalid");
//             return;
//         }
//     }
// }

// function emailValidate(email) {
//     var check = "" + email;
//     if (check.search("@") >= 0 && check.search(/\./) >= 0)
//         if (
//             check.search("@") <
//             check.split("@")[1].search(/\./) + check.search("@")
//         )
//             return true;
//         else return false;
//     else return false;
// }
