$(function() {
  $('.btn-toggle').on("click", function() {
    let parent = $(this).parents(".tabien-box")
    let target = parent.find(".tabien-list-box")
    target.slideToggle(200)
    parent.toggleClass("show")
  })
});