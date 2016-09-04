(function($) {
    $(document).ready(function() {
        "use strict";

        $('.isotope-grid-post').each(function() {
            var $this = $(this);
            var $filter = $this.parent().find('.grid-filter');
            $this.imagesLoaded(function() {
                $this.isotope({
                    itemSelector: '.grid-item',
                    layoutMode: 'fitRows',
                });
            });

            $filter.find('a').on("click", function(e) {
                e.preventDefault();
                $filter.find("a").removeClass('active');
                $(this).addClass('active');
                var data_filter = $(this).data('filter');
                $this.isotope({
                    filter: data_filter
                });
            });
        });

        $('.isotope-masonry-post').each(function() {
            var $this = $(this);
            var $filter = $this.parent().find('.grid-filter');
            $this.imagesLoaded(function() {
                $this.isotope({
                    itemSelector: '.grid-item',
                });
            });
            $filter.find('a').click(function(e) {
                e.preventDefault();
                $filter.find("a").removeClass('active');
                $(this).addClass('active');
                var data_filter = $(this).data('filter');
                $this.isotope({
                    filter: data_filter
                });
            });
            $('#portfolio-masonry-sort a').on('click', function() {
                $('#portfolio-masonry-sort a').removeClass('active');
                $(this).addClass('active');
                var cols = parseInt($(this).attr('id').replace('columns', ''));
                var item_class = '';
                switch (cols) {
                    case 2:
                        item_class = 'col-xs-12 col-sm-12 col-md-6 col-lg-6';
                        break;
                    case 3:
                    default:
                        item_class = 'col-xs-12 col-sm-12 col-md-4 col-lg-4'
                        break;
                }
                $this.find('.grid-item').removeClass(function(index, css) {
                    return (css.match(/(^|\s)col-\S+/g) || []).join(' ');
                });
                $this.find('.grid-item').addClass(item_class);
                $this.isotope({
                    itemSelector: '.grid-item'
                });
            })
        });
    });
})(jQuery);
