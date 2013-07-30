/**
 * Função para imprimir mensagens na tela
 * 
 * @param {string} mens
 * @returns {undefined}
 */
function _message(mens) {
        alert(mens);
}
;

/**
 * Função que carrega um loader na tela
 * 
 * @param {integer} tipe 1 para exibir e 0 para esconder
 * @returns {undefined}
 */
function _load(tipe) {
        if (tipe) {
                if (!$(".ui-overlay").size()) {
                        var overlay = $('<div class="ui-overlay"  style="position: absolute; top: 0pt; left: 0pt; display: inline-block; overflow: hidden;"><img src=' + loader + ' /><div class="ui-widget-overlay" style="top: 0pt; left: 0pt; width: 9999px; height: 99999px;"></div></div>').hide().appendTo($('body'));
                        $(overlay).width('100%');
                        $(overlay).height('100%');
                        $(".ui-overlay img").position({
                                my: "center",
                                at: "center",
                                of: ".ui-overlay"
                        });
                        $(overlay).fadeIn();
                } else {
                        $(".ui-overlay").fadeIn();
                }
        } else {
                $(".ui-overlay").fadeOut(function() {
                        $(".ui-overlay").remove();
                });
        }
}

/**
 * Função genérica para efetuar post para actions
 * 
 * @param {array} data
 * @returns {integer}
 */
function _post(data) {
        _load(1);
        /* DEPRECATED
        return = $.post(action, data, function(result) {
                if (result === -1) {
                        _load(0);
                        return false;
                } else {
                        _load(0);
                        return result;
                }
        });
        */
       return $.ajax({
             url: action,
             type: 'post',
             data:data,
             async: false,
             success: function (response){
                   _load(0);
                   return response;
             },
             error:function (){
                  return false;
             }
       });
}
;

/**
 * Função genérica para inserção de dados
 * 
 * @param {string} table
 * @param {array} dados
 * @param {string} field
 * @returns {Boolean}
 */
function _insrt(table, dados, field) {
        var data = {
                "action": "_insrtData",
                "table": table,
                "data": dados,
                "field": field
        };
        var result = _post(data);
        
        if (!result) {
                _message("Houve algum problema com a inserção!");
                return false;
        } else {
                return result.responseText;
        }
        ;
}
;

/**
 * Função genérica para atualização de dados
 * 
 * @param {string} table
 * @param {array} dados
 * @param {integer} id
 * @param {string} field
 * @returns {Boolean}
 */
function _updt(table, dados, id, field) {
        var data = {
                "action": "_updtData",
                "table": table,
                "data": dados,
                "id": id,
                "field": field
        };
        var result = _post(data);

        if (!result) {
                _message("Houve algum problema com a atualização!");
                return false;
        } else {
                _message("A atualização foi realizada com sucesso!");
                return true;
        }
        ;
}
;

/**
 * Função genérica para deleção de item
 * 
 * @param {string} table
 * @param {integer} id
 * @param {string} field
 * @param {string} obj
 * @returns {Boolean}
 */
function _del(table, id, field, obj) {
        var data = {
                "action": "_delData",
                "table": table,
                "id": id,
                "field": field
        };

        if (!$("#confirm-del").size())
                $('<div id="confirm-del">Você deseja deletar?</div>').appendTo('body');

        $("#confirm-del").dialog({
                modal: true,
                title: 'Confirma Ação?',
                zIndex: 10000,
                autoOpen: true,
                width: '200px',
                resizable: false,
                buttons: {
                        Sim: function() {
                                var result = _post(data);

                                if (!result) {
                                        _message("Houve algum problema com a deleção!");
                                        $("#confirm-del").remove();
                                } else {
                                        _message("A deleção foi realizada com sucesso!");
                                        $("#confirm-del").remove();
                                        if (obj != ''){
                                                var oTable = $('#lst-field-full').dataTable();
                                                oTable.fnDeleteRow( $(obj).index() );
                                        }
                                }
                                ;
                        },
                        Não: function() {
                                $("#confirm-del").dialog("close");
                        }
                }
        });
}
;