// Funçãoo limite caracteres tel,celular,cep, cnpj 
			function ExitField(id,idmsg,msg,maxSize){
			
			  var value = document.getElementById(id).value;
			  			   			
		 	   if(value.length != maxSize) {

					  document.getElementById(id).focus();//use javascript to set focus
					  document.getElementById(idmsg).innerHTML  = msg;
					  if(isNaN(value)){
						document.getElementById(idmsg).style.visibility = 'visible';
					  }else{
					    document.getElementById(idmsg).style.visibility = 'hidden';	  
					  }
				  
				}else{
					document.getElementById(idmsg).style.visibility = 'hidden';		
				}
					
			}
