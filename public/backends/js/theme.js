$(document).ready(function () {
    //Category Select 2
    $(".size-color").select2();

    //Append Value for remove post
    // $('#remove-post-key').click(function() {
    //     var postId = $(this).attr('data-value');
    //     $('#remove-val').val(postId);
    // })
    $("body").on("click", "#remove-post-key", function () {
        var postId = $(this).attr("data-value");
        $("#remove-val").val(postId);
        // alert(postId);
    });

    $("#print-button").click(function () {
        $("#card-to-print").html();
        window.print();
    });

    $("#print_report").click(function () {
        $("#print").html();
        window.print();
    });
    // $("#print_report").click(function () {

    //     window.print();
    //     // Assuming you have a route named 'print.report'
    // });
});
