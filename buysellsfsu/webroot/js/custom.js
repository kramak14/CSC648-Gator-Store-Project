/* Finder in 3 Buttons */
$(document).ready(function () {
    $(".col-lg-4").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
/**
 * Created by spenc on 2/26/2017.
 */
