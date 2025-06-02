    $(".increment_quantity").click(function () {
    var counter = parseInt($(this).parent().siblings(".quantity").val());
    counter++;
    $(this).parent().siblings(".quantity").val(counter);
    // $("#theCount").text(counter);
});
$(".decrement_quantity").click(function () {
    var counter = parseInt($(this).parent().siblings(".quantity").val());
    counter--;
    $(this).parent().siblings(".quantity").val(counter);
    // $("#theCount").text(counter);
});
// ********* PROFILE SCRIPT START  *********** \\
// Copy Link To Clip Board

$(".copy_link").click(function () {
    // Get the text field
    var copyText = document.getElementById("myInput");
    // Select the text field
    // copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
});

$(".edit_profile_option").click(function () {
    $(".my_profile").addClass("hide");
    $(".edit_profile_start").removeClass("hide");
});
$(".edit_password_option").click(function () {
    $(".my_profile").addClass("hide");
    $(".edit_password_start").removeClass("hide");
});
$(".add_address_btn").click(function () {
    $(".current_addresses").addClass("hide");
    $(".new_address_section").removeClass("hide");
});

$(".see_order_details").click(function () {
    $(".the_orders_table").addClass("hide");
    $(".orders_details_start_here").removeClass("hide");
});

