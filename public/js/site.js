$(function(){

    $(document).on('click','.confirmacion', {} , function(e){

            var self = $(this);
            e.preventDefault();

            var title = ( $(this).data('title') ) ?  $(this).data('title') : 'Desea realizar esta acción';
            fn.confirm({ content : title }, function(){
                    if (self.is('a')) window.location = self.attr('href');
                    if (self.is('button')) $(self).parents('form').submit();
            })

    })


    $('.select2').select2();

})
