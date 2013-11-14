$(document).ready(function() {
    
    if($('#tipoParticipacao').val().length != 0) {
        $.getJSON("listar_atividades_json",{
            tipoParticipacaoId: $('#tipoParticipacao').val()
        }, function(atividades) {
            if(atividades != null)
                popularListaDeAtividades(atividades, $('#id-Atividade').val());
        });
    }    
    $('#tipoParticipacao').change(function() {
        if($(this).val().length != 0) {            
            $.getJSON("listar_atividades_json",{                
                tipoParticipacaoId: $(this).val()
            }, function(atividades) {                
                if(atividades != null)
                    popularListaDeAtividades(atividades);
            });
        } else 
            popularListaDeAtividades(null);
    });
});

function popularListaDeAtividades(atividades, idAtividade) {
    var options = '<option value>selecione uma atividade</option>';
    if(atividades != null) {
        $.each(atividades, function(index, atividade){
            if(idAtividade == index)
                options += '<option selected="selected" value="' + index + '">' + atividade + '</option>';
            else
                options += '<option value="' + index + '">' + atividade + '</option>';
        });
    }
    $('#atividades').html(options);
}

