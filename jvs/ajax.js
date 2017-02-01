$(function(){
	$("#loading").hide();
	$("#notificacao").hide();

	$("#usuario").click(function(){
		$("#usuario").val('');
	})

	$("#senha").click(function(){
		$("#senha").val('');
	})

	$('#btnlog').click(function(){			         		   			   
		if ($("#usuario").val() == '' || $("#senha").val() == ''){
			$("#notificacao").html('Preencha todos os campos'); 
			$("#notificacao").show();
		}else{
			$("#loading").show(); 
			$.ajax({
				type: 'POST',
				url : 'action/actionLogin.php',
				data: $("form").serialize(),
				dataType: 'html',
				success: function(resultado){
					if (resultado == 'Logado' ){
						$("#loading").hide(); 
						window.location.href="restrito/painel.php";								  
					}else{
						$("#loading").hide();
						$("#notificacao").html(resultado); 
						$("#notificacao").show(); 
					}
				}
			});
		} 
	});
});