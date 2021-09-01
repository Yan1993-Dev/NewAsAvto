$('body').on('click', '.tab', show);
show('.tab');

function show(tab) {
    tab = $(tab.target || tab).attr('data-tab');
    $('[data-tab].active').declassify('active');
    $('[data-tab="'+tab+'"]').classify('active');
}