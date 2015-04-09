$(function() {
  $("#sortable").sortable({
    placeholder: 'sortHelper',
    update: refreshItems,
    items: '.ui-state-default',
  });
  $("#sortable").disableSelection();
});

var refreshItems = function(e) {
  $(e.target).children('.ui-state-default').not(".ui-sortable-helper").each(function(i) {
    n = i + 1;
    $(this).find('.order').text(n);
  });
  saveItems(e);
}
var saveItems = function(e) {
  var params = $(e.target).sortable('serialize');
  $(e.target).sortable('disable');
  $.post("/index.php/admin/modelo/saveorder/", params, function(){
    $(e.target).sortable('enable');
  });
}
