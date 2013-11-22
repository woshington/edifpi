$(document).ready(function() {
    if($('#tipoParticipacao').val().length != 0) {                
        $.getJSON("../listar_atividades_json",{
            tipoParticipacaoId: $('#tipoParticipacao').val()
        }, function(atividades) {                        
            if(atividades != null)                
                popularListaDeAtividades(atividades, $('#id-Atividade').val());
        });
    }    
    $('#tipoParticipacao').change(function() {            
        if($(this).val().length != 0) {
            $.getJSON("../listar_atividades_json",{
                tipoParticipacaoId: $(this).val()                
            }, function(atividades) {
                if(atividades != null){
                    popularListaDeAtividades(atividades);                    
                }
//                getAtividades2();
            });
        } else {
            popularListaDeAtividades(null);
  //          getAtividades2();
        }        
        getAtividades2();
    });
    
    $('#atividades').change(function() {
        getAtividades2();
    });
});

function popularListaDeAtividades(atividades, idAtividade) {
    var options = '';
    var agrupados = '';
    
    if(atividades != null) {
        $.each(atividades, function(index, atividade){            
            if(index!="agrupados"){
                if(idAtividade == index)
                    options += '<option selected="selected" value="' + index + '">' + atividade + '</option>';
                else
                    options += '<option value="' + index + '">' + atividade + '</option>';
            }else{
                $.each(atividade, function(index, valor){
                    agrupados += "<li>"+index+"</li>";
                });
            }
        });        
    }        
    $('#atividades').html(options);
    getAtividades2();
    $('#agrupados').html(agrupados);
}

function getAtividades2(){        
    popularListaDeAtividades2(null);
    if($("#atividades").val()!=null) {
        var funcao = $.getJSON("../listar_atividades2_json",{
            atividade_id: $("#atividades").val(),
            tipoParticipacao: $('#tipoParticipacao').val()
        }, function(atividades2) {            
            if(atividades2 != null){
                popularListaDeAtividades2(atividades2);                        
            }

        });         
    } else {
        
        popularListaDeAtividades2(null);
    }
}
function popularListaDeAtividades2(atividades, idAtividade) {
    var options = '';            
    if(atividades != null) {
        $.each(atividades, function(index, atividade){                        
            options += '<option value="' + index + '">' + atividade + '</option>';        
        });        
    }
    $('#atividades2').html(options);    
}