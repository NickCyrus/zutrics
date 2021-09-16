var modalCurrent;

fn = {

        modal : '',

        setHeight : function(obj = ''){

                var hW = $(window).height();
                if (!obj.menos) obj.menos = 0;
                if (obj.element){

                        $(obj.element).css({ height : (hW - obj.menos)});
                }
        },
        alert : function(msg){

                 $.alert({title : '', content : msg});
        },

        wait : function(msg , options = {} ){

              var defaul = {
                        title : '',
                        class : 'col-md-4',
                        animation : 'rotateYR',
                        closeAnimation : 'scale'
              }

              var opc = $.extend( defaul , options );


                this.modal = $.dialog({
                                animation: opc.animation,
                                closeAnimation: opc.closeAnimation,
                                title: opc.title,
                                closeIcon: false,
                                columnClass : opc.class,
                                content : msg
                                })


        },
        dialog : function(options){

                var defaul = {
                                title : '',
                                btnClose : true,
                                class : 'col-md-4',
                                msgWait: 'Por favor espere...',
                                url : 'ajax',
                                type: 'get'
                        }

                      var opc = $.extend( defaul , options );

                this.modal = $.dialog({
                                        animation: 'rotateYR',
                                        closeAnimation: 'scale',
                                        title: opc.title,
                                        closeIcon: opc.btnClose,
                                        columnClass : opc.class,
                                        content: function () {
                                                var self = this;

                                                $.ajaxSetup({
                                                    headers: {
                                                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                                    }
                                                });


                                                return $.ajax({
                                                           beforeSend: function(){
                                                                        self.setContent(opc.msgWait);
                                                           },
                                                            data: opc,
                                                            url: opc.url,
                                                            dataType: 'json',
                                                            type : opc.type,
                                                            success : function(response){

                                                                    if (response.title){
                                                                            self.setTitle(response.title);
                                                                    }

                                                                    if (response.html){
                                                                            self.setContent(response.html);
                                                                    }

                                                                    if (response.autoClose){
                                                                            self.close();

                                                                    }

                                                                    if (response.callback){
                                                                            eval(response.callback);
                                                                    }


                                                            }

                                                        })
                                            }

                                    });


                modalCurrent = this.modal;
        },

        setContentModal : function(msg){
                this.modal.setContent(msg)
        },

        setTitleModal: function(msg){
                this.modal.setTitle(msg);
        },

        closeModal : function(){
                if (modalCurrent) modalCurrent.close();
                if (this.modal) this.modal.close();
        },

        hide : function(ele){
               $(ele).hide().addClass('hidden').removeClass('visible')
        },

        show : function(ele){
                $(ele).show().removeClass('hidden').addClass('visible')
        },

        ajax : function(opc){

                opc.url = (!opc.url) ? 'ajax.php' :  opc.url;
                opc.method = (!opc.method) ? 'get' :  opc.method;
                opc.dataType = (!opc.dataType) ? 'json' :  opc.dataType;

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                        beforeSend: opc.beforeSend,
                        data: opc.data,
                        url: opc.url,
                        dataType: opc.dataType,
                        method: opc.method,
                        success : opc.success,
                        complete : opc.complete,
                        fail : opc.fail
                })

        },

        reloadContent : function(opc){

                        opc.data.option = (opc.data.option) ? opc.data.option : 'getContent';

                        this.ajax({
                                beforeSend : function(){
                                        $(opc.container).html('<div class="waitLoagin"></div>')
                                },
                                data : opc.data,
                                success : function(resp){
                                           if (resp.html) $(opc.container).html(resp.html);

                                }
                         })
        },

        reloadPart (box , datos = {}){

            $.ajax({
                    beforeSend : function(){
                            $(box).html(fn.boxLoading())
                    },
                    data : datos,
                    type : 'post',
                    url  : 'ajax.php',
                    success: function(rs){
                            if (rs){
                                $(box).html(rs);
                            }else{
                                $(box).html('Sin información');
                            }
                    }
                })

        },

        confirm (opc = {} , success = '' ){

                defaul = {
                        title : 'Confirmación',
                        content : 'Desea realizar esta acción?',
                        btnTxtConfirm : 'Aceptar'
                        }

                var options = $.extend( defaul , opc );


                $.confirm({
                        title: options.title,
                        content: options.content,
                        buttons: {
                            'Aceptar' : success,
                            cancelar: {
                                btnClass: 'btn-danger',
                                action: function () {}
                            }

                        }
                    });


        }


}


function openSelectIcons(element = ''){
    opc = {
            class : 'col-md-8',
            url   : urlHome+'/ajax/select-icons/'+element,
            type : 'post',
            element  : element
          }
    fn.dialog(opc)
}

jQuery.fn.ForceNumericOnly = function(){

    return this.each(function(){
        $(this).keydown(function(e){
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (
                key == 8 ||
                key == 9 ||
                key == 13 ||
                key == 46 ||
                key == 110 ||
                key == 190 ||
                (key >= 35 && key <= 40) ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));
        });
    });
};
