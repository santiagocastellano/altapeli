//setup vue instance
console.log("hhhhhh")
var $v = new Vue({

    el: '#vue-container',

    data: {
            rows: [],
            pagination: {
                    markup: '',
                    currentPage: -1
            }
        },

        methods: {     

            getRows: function(page) {

                    if (!isNaN(page) && page > 0) {
                        page = '?page=' + page;
                    } else {
                        page = '';
                    }
                    
                    $.ajax({
                        url: 'postajax' + page,
                        method: 'POST',
                        dataType: 'json'
                    }).done(function(response) {
                        
                        if (response.status == 'success' && Object.keys(response.data.rows).length > 0) {

                                $v.rows = response.data.rows.data;
                                $v.pagination.currentPage = response.data.rows.current_page;
                                $v.pagination.markup = convertPaginationMarkup(response.data.paginationMarkup, $v.pagination.currentPage, '$v.getRows');

                        } else {

                                $v.rows = [];
                                $v.pagination.currentPage = -1;
                                $v.pagination.markup = '';

                        }

                    });

        }

    }

});

//handle AJAX supplied pagination - this can be moved to your main app library and used on other pages
function convertPaginationMarkup(markup, currentPage, onClickMethod) {

    var miniDOM = $(markup);

    //remove HREFs and add vue code
        $.each(miniDOM.find('a'), function() {

        var $link = $(this), linkValue = $link.html();
            
        //parse link value - is actual page number that we're after
        if (isNaN(parseInt(linkValue))) {

                    if (linkValue === '»') {
                            fetchPage = currentPage + 1;
                    }

                    if (linkValue === '«') {
                            fetchPage = currentPage - 1;
                    }

                } else {

                    fetchPage = parseInt(linkValue);

                }

                //remove straight up href
                $link.attr('href', 'javascript:void(0)');

                //add onclick event to load next page via AJAX rather than straight up href
                $link.attr('onclick', onClickMethod + '(' + fetchPage + ')');

        });

        //use the innerHTML of a DOM clone to convert the HTML object to HTML string
        return $('<div>').append(miniDOM.clone()).html();

}