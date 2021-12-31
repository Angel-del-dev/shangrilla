$(".desc").each(function (f) {
    // Length for Novels, Stories and Short stories
    const newstr = $(this).text().substring(0, 60) + "...";
    $(this).text(newstr);
});
$(".books-micro-story .relatos-desc").each(function (f) {
    // Length for microstories
    const newstr = $(this).text().substring(0, 100) + "...";
    $(this).text(newstr);
});

$(".books-nano-story .relatos-desc").each(function (f) {
    // Length for nanostories
    const newstr = $(this).text().substring(0, 20) + "...";
    $(this).text(newstr);
});
