var idContador = 0;
			
function exclui(id){
    var campo = $("#"+id.id);
    campo.hide(200);
}

$( document ).ready(function() {
    
    $("#btnAdicionaTelefone").click(function(e){
        e.preventDefault();
        var tipoCampo = "Telefone";
        adicionaCampo(tipoCampo);
    })
    
    function adicionaCampo(tipo){

        idContador++;
        
        var idCampo = "campoExtra"+idContador;
        var idForm = "formExtra"+idContador;
    
        var html = "";
        
        html += "<div style='margin-top: 8px;' class='input-group' id='"+idForm+"'>";
        html += "<input name='telefones[]' type='text' id='"+idCampo+"' class='form-control novoCampo' placeholder='"+tipo+"'/>";
        html += "<span class='input-group-btn'>";
        html +=	"<button class='btn' onclick='exclui("+idForm+")' type='button'><span class='fa fa-trash'></span></button>";
        html += "</span>";
        html += "</div>";
        
        $("#imendaHTML"+tipo).append(html);
    }
    
    $(".btnExcluir").click(function(){
        $(this).slideUp(200);
    })
});
