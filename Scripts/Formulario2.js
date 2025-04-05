Formulario	= Class.create();

Formulario.prototype = {
	error			: [],
	errorCount		: Array(),
	erEmail			: RegExp(/^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$/),
	erDDD			: RegExp(/^\d{2}$/),
	erTelefone		: RegExp(/^\(\d{2}\)\d{4}\-\d{4}$/),
	erCEP			: RegExp(/^\d{5}\-\d{3}$/),
	erCPF			: RegExp(/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/),
	erCNPJ			: RegExp(/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/),
	erData			: RegExp(/^\d{2}\/\d{2}\/\d{4}$/),
	
	maskCEP		: String('99999-999'),
	maskCPF		: String('999.999.999-99'),
	maskCNPJ	: String('99.999.999/9999-99'),
	maskData	: String('99/99/9999'),
	
	initialize : function(){
		this.error	= [];
	},
	
	Msgs	: {
		minLength		: String('N&atilde;o pode conter menos de %n caracteres'),
		maxLength		: String('N&atilde;o pode conter mais de %n caracteres'),
		notNull			: String('Campo Obrigatório'),
		cepFormato		: String('<strong>Formato</strong> inv&aacute;lido'),
		cpfFormato		: String('<strong>Formato</strong> inv&aacute;lido'),
		dataFormato		: String('<strong>Formato</strong> inv&aacute;lido'),
		cnpjFormato		: String('<strong>Formato</strong> inv&aacute;lido'),
		dataInvalida	: String('<strong>Data</strong> inv&aacute;lida'),
		telefoneFormato	: String('<strong>Formato</strong> inv&aacute;lido'),
		emailFormato	: String('<strong>Formato</strong> inv&aacute;lido'),
		cpfNumero		: String('<strong>CPF</strong> inválido'),
		cepNumero		: String('<strong>CEP</strong> inválido'),
		cnpjNumero		: String('<strong>CNPJ</strong> inválido'),
		dataNumero		: String('<strong>N&uacute;mero</strong> inválido'),
		onlyNumero		: String('Este campo s&oacute; aceita <strong>N&uacute;meros</strong>'),
		mask			: String('<strong>Formato</strong> inv&aacute;lido')
	},
	
	addErroHtml	: function(msgHolder,errorCollection){
		msgHolder.innerHTML	= '';
		errorCollection.each(function(s,i){
			msgHolder.innerHTML	+= "- " + s + "<br />";
		});
	},
	
	addErro : function(field, error, name){
		name			= (name) ? name : 'Error';
		field			= $(field);
		if(!field || !field.nextSibling){
			return false;
		}			
		field.addClassName(name);
		
		var	msgHolder	= this.getMsgHolder(field, name);
		
		// se nao tiver as colecoes, cria
		this.prepareError(name,field.id);
		
		// nao acrescenta o msm erro mais de uma vez
		var jaTemErro	= false;
		this.error[name][field.id].each(function(s,i){
			if(s == error){
				jaTemErro	= true;
				throw $break;
			}
		});
		if(!jaTemErro){
			this.error[name][field.id].push(error);
			this.errorCount[name]++;
		}
		else{
			return false;
		}
		
		this.addErroHtml(msgHolder,this.error[name][field.id]);
		
		var holder	= name+'CountHolder';
		if($(holder) && $(holder) != 'undefined'){
			$(holder).innerHTML	= this.getErrorCount(name);
		}
		
		Element.show(msgHolder);		
		return true;
	},
		
	removeErro : function(field, name){
		name	= (name) ? name : 'Error';
		field	= $(field);
		if(!field || !field.nextSibling){
			return false;
		}
		// se nao tiver as colecoes, cria
		this.prepareError(name,field.id);
		field.removeClassName(name);
		
		var self	= this;
		this.error[name][field.id].each(function(s,i){
			self.removeSingleErro(field, s, name);
		});
		
		var	msgHolder	= this.getMsgHolder(field, name);		
		if(msgHolder && msgHolder.innerHTML){
			Element.hide(msgHolder);
		}
	},
	
	removeSingleErro : function(field, error, name){
		name	= (name) ? name : 'Error';
		field	= $(field);
		if(!field || !field.nextSibling){
			return false;
		}
		
		// se nao tiver as colecoes, cria
		this.prepareError(name,field.id);
		
		var self	= this;
		var errors	= new Array();
		this.error[name][field.id].each(function(s,i){
			if(s == error){
				self.error[name][field.id][i] = '';
				self.errorCount[name]--;
			}
		});
		this.error[name][field.id].each(function(s,i){
			if(s+'' != ''){
				errors.push(s);
			}
		});
		this.error[name][field.id]	= errors;
		
		var	msgHolder		= this.getMsgHolder(field, name);
		var qtdErrosCampo	= this.getFieldErrorCount(name,field.id);
		if(qtdErrosCampo == 0){
			field.removeClassName(name);
		
			if(msgHolder && msgHolder.innerHTML){
				msgHolder.innerHTML	= '';
				Element.hide(msgHolder);
			}
		}
		else{
			this.addErroHtml(msgHolder,this.error[name][field.id]);
		}
		
		var holder	= name+'CountHolder';
		if($(holder) && $(holder) != 'undefined'){
			$(holder).innerHTML	= this.getErrorCount(name);
		}
	},
	
	// recupera a div que captura as msgs de erro de um campo
	getMsgHolder	: function(field, name){
		field	= $(field);
		if(!field || !field.nextSibling){
			return;
		}
		
		var	next	= field.nextSibling;
		var i		= 0;
		while(next.nodeName != 'DIV' || next.className != name){
			next	= next.nextSibling;
			if(++i == 10 || !next){
				return next;	
			}
		}
		
		return next;
	},
	
	prepareError : function(name,fieldName){
		if(!this.error[name]){
			this.error[name]	= new Array();
		}
		if(!this.error[name][fieldName]){
			this.error[name][fieldName]	= new Array();
		}
		if(!this.errorCount[name]){
			this.errorCount[name]	= 0;
		}
	},
	
	getErrorCount : function(name){
		return this.errorCount[name];
	},
	
	getFieldErrorCount : function(name,fieldName){
		return this.error[name][fieldName].length;
	},
	
	
	/**
	 * VALIDACOES
	 */
		
	notNullValidate : function(fieldName, error, formName, sufix){
		var element	= $(fieldName);
		var form	= $(formName);
		var error	= (error) ? error : this.Msgs.notNull;
		if (sufix == 'Radio' || sufix == 'Check') {
			if (!form.serialize(true)[fieldName]) {
				this.addErro(fieldName, error);
			}
			return;
		}
		
		if (!element.value || element.value == 'org.jboss.seam.ui.NoSelectionConverter.noSelectionValue') {
			this.addErro(fieldName, error);
			return true;
		}
		else{
			this.removeSingleErro(fieldName,error);
		}
	},

	minLengthValidate : function(field, minLength, error){
		field	= $(field);
		error	= (error) ? error : this.Msgs.minLength;
		error	= error.replace('%n', minLength);
		
		this.removeSingleErro(field, error);
		
		if(!field.value){ return false; }
		
		if(field.value.length < minLength){
			this.addErro(field, error);
		}
	},
	
	maxLengthValidate : function(field, maxLength, error){
		field	= $(field);
		error	= (error) ? error : this.Msgs.maxLength;
		error	= error.replace('%n', maxLength);
		
		this.removeSingleErro(field, error);
		
		if(!field.value){ return false; }
		
		if(field.value.length > maxLength){
			this.addErro(field, error);
		}
	},
	
	cepValidate : function(field, errorFormato, errorNumero){
		field	= $(field);
		errorFormato	= (errorFormato) ? errorFormato : this.Msgs.cepFormato;
		errorNumero		= (errorNumero) ? errorNumero : this.Msgs.cepNumero;
		
		this.removeSingleErro(field, errorFormato);
		this.removeSingleErro(field, errorNumero);
		
		if(!field.value){ return false; }
			
		if(!field.value.match(this.erCEP)){
			// a mask ja da o erro de formato!
			return;
			//return this.addErro(field, errorFormato);
		}
	
		s	= field.value;
		s	= s.replace(/\.|\-/g, '');
		
		// verifica se são todos iguais
		igual	= true;
		for (i = 0; i < 7; i++){
			igual	= (s.charAt(i) == s.charAt(i+1)) ? true : false;
			if(!igual){
				break;
			}
		}
		if(igual){
			this.addErro(field, errorNumero);
		}
	},
	
	emailValidate : function(field, error){
		field	= $(field);
		error	= (error) ? error : this.Msgs.emailFormato;
		
		this.removeSingleErro(field, error);
		
		if(!field.value){ return false; }
		
		if(!field.value.match(this.erEmail)){
			this.addErro(field, error);
		}
	},
			
	cpfValidate : function(field, errorFormato, errorNumero){
		field			= $(field);
		errorFormato	= (errorFormato) ? errorFormato : this.Msgs.cpfFormato;
		errorNumero		= (errorNumero) ? errorNumero : this.Msgs.cpfNumero;
		
		this.removeSingleErro(field, errorNumero);
		this.removeSingleErro(field, errorFormato, 'Error');
		
		if(!field.value){ return false; }
		
		if(!field.value.match(this.erCPF)){
			// a mask ja da o erro de formato!
			return;
			//return this.addErro(field, errorFormato);
		}
		
		var i;
		s	= field.value;
		s	= s.replace(/\.|\-/g, '');
		
		var c = s.substr(0,9);
		var dv = s.substr(9,2);
		var d1 = 0;
		
		// verifica se são todos iguais
		igual	= true;
		for (i = 0; i < 10; i++){
			igual	= (s.charAt(i) == s.charAt(i+1)) ? true : false;
			if(!igual){
				break;
			}
		}
		if(igual || s == '00000000191'){
			return this.addErro(field, errorNumero);
		}
		
		for (i = 0; i < 9; i++){
			d1 += c.charAt(i)*(10-i);
		}
		if (d1 == 0){
			return this.addErro(field, errorNumero);
		}
		 
		d1	= 11 - (d1 % 11);
		d1	= (d1 > 9) ? 0 : d1
		if (dv.charAt(0) != d1){
			return this.addErro(field, errorNumero);
		}
		 
		d1 *= 2;
		for (i = 0; i < 9; i++){
			d1 += c.charAt(i)*(11-i);
		}
		d1	= 11 - (d1 % 11);
		d1	= (d1 > 9) ? 0 : d1
		if (dv.charAt(1) != d1){
			return this.addErro(field, errorNumero);
		}
	},
	
	cnpjValidate : function(field, errorFormato, errorNumero){
		field			= $(field);
		
		errorFormato	= (errorFormato) ? errorFormato : this.Msgs.cnpjFormato;
		errorNumero		= (errorNumero) ? errorNumero : this.Msgs.cnpjNumero;
		
		this.removeSingleErro(field, errorFormato, 'Error');
		this.removeSingleErro(field, errorNumero, 'Error');
		
		if(!field.value){	return;	}
		
		var valor	= field.value;
			valor	= valor.replace(/\.|\-|\//g, '');
			valor	= valor;
		
		if(!$(field).value.match(this.erCNPJ)){
			// a mask ja da o erro de formato!
			return;
			// return this.addErro(field, errorFormato);
		}
		
		// verifica se são todos iguais
		igual	= true;
		for (i = 0; i < 13; i++){
			igual	= (valor.charAt(i) == valor.charAt(i+1)) ? true : false;
			if(!igual){
				break;
			}
		}
		if(igual || valor == '00000000000191'){
			return this.addErro(field, errorNumero);
		}

		soma2 = soma1 = 0;
		for (i = 11, j = 2, k = 3; i >= 0; i--) {
			c = valor.charAt(i) - '0';
			soma1 += c * j;
			soma2 += c * k;
			j = (j + 1) % 10;
			if (j == 0) {
				j = 2;
			}
			k = (k + 1) % 10;
			if (k == 0) {
				k = 2;
			}
		}

		d1 = soma1 % 11;
		if (d1 < 2) {
			d1 = 0;
		} else {
			d1 = 11 - d1;
		}

		soma2 += d1 * 2;
		d2 = soma2 % 11;
		if (d2 < 2) {
			d2 = 0;
		} else {
			d2 = 11 - d2;
		}

		valid = valor.charAt(12) - '0' == d1
				&& valor.charAt(13) - '0' == d2;
					
		if(!valid){
			return this.addErro(field, errorNumero);
		}
	},	
	
	dataValidate : function(field, errorFormato, errorNumero, errorData){
		field			= $(field);
		
		errorFormato	= (errorFormato) ? errorFormato : this.Msgs.dataFormato;
		errorNumero		= (errorNumero) ? errorNumero : this.Msgs.dataNumero;
		errorData		= (errorData) ? errorData : this.Msgs.dataInvalida;
		
		this.removeSingleErro(field, errorFormato, 'Error');
		this.removeSingleErro(field, errorNumero, 'Error');
		this.removeSingleErro(field, errorData, 'Error');
		
		if(!field.value){	return;	}
		
		if(!field.value.match(this.erData)){
			return;
			//this.addErro(field, errorFormato);
		}
		
		var parts	= field.value.split('\/');
		var dia		= parseFloat(parts[0]);
		var mes		= parseFloat(parts[1]);
		var ano		= parseFloat(parts[2]);
		var diasTot	= new Array(31,28,31,30,31,30,31,31,30,31,30,31);
		
		// Acrescenta um dia a fevereiro em caso de ano bissexto
		if(mes == 2 && (ano%400 == 0 || (ano%4 == 0 && ano%100 != 0))){
			diasTot[mes-1]++;
		}
		
		if(
			(ano < 1582 || ano > 4881) ||
			(mes < 1 || mes > 12) ||
			(dia < 1 || dia > diasTot[mes-1])
		){
			this.addErro(field, errorData);
		}
	},
	
	telefoneValidate : function(field, error){
		field	= $(field);
		error	= (error) ? error : this.Msgs.telefoneFormato;
		
		this.removeSingleErro(field, error, 'Error');
		if(!field.value){	return;	}
		
		// verifica se são todos iguais
		s		= field.value;
		s		= s.replace(/\.|\-/g, '');
		igual	= true;
		for (i = 0; i < 7; i++){
			igual	= (s.charAt(i) == s.charAt(i+1)) ? true : false;
			if(!igual){
				break;
			}
		}
		
		if(igual || !field.value.match(this.erTelefone)){
			this.addErro(field, error);
		}
	},
	
	onlyNumberValidate : function(field, error){
		field	= $(field);
		error	= (error) ? error : this.Msgs.onlyNumero;
		
		this.removeSingleErro(field, error, 'Error');
		if(!field.value){	return;	}
		if((field.value*1) != field.value){
			this.addErro(field, error);
		}
	},
	
		
	Util : {
		removeLetras : function(input){
			var output;
			if (Object.isString(input)){
				output	= input.replace(/[a-zA-Z]/g, '');
				return output;
			}
			else if(input.value){
				input.value	= input.value.replace(/[a-zA-Z]/g, '');
				return true;
			}
		},
		
		removeCaracteresEspeciais : function(input){
			var output;
			if (Object.isString(input)){
				output	= input.replace(/[^a-zA-Z0-9]/g, '');
				return output;
			}
			else if(input.value){
				input.value	= input.value.replace(/[^a-zA-Z0-9]/g, '');
				return true;
			}
		},
		
		removeNumeros : function(input){
			var output;
			if (Object.isString(input)){
				output	= input.replace(/[0-9]/g, '');
				return output;
			}
			else if(input.value){
				input.value	= input.value.replace(/[0-9]/g, '');
				return true;
			}
		},
		
		keyCodeIsNumber : function(keyCode){
			return ((keyCode >= 48 && keyCode <= 57) || (keyCode >= 96 && keyCode <= 105)) || false;
		},
		
		keyCodeIsEscaped : function(keyCode){
			// 37~40 - setinhas
			// 16 - shift
			// 222,192,219 - acentos
			return (keyCode == 8 || keyCode == 16 || keyCode == 46 || (keyCode >= 37 && keyCode <= 40) || keyCode == 219 || keyCode == 222 || keyCode == 192) || false;
		},
		
		handleObrigatorio : function(fieldName, holder, formName, sufix){
			var element				= $(fieldName);
			var form				= $(formName);

			var hasObrigatorio		= Element.hasClassName(holder, 'Obrigatorio');
			var hasObrigatorioOK	= Element.hasClassName(holder, 'ObrigatorioOK');
			if(
				((sufix == 'Input' || sufix == 'Select') && (element.value && element.value != 'org.jboss.seam.ui.NoSelectionConverter.noSelectionValue')) ||
				((sufix == 'Radio' || sufix == 'Check') && (form.serialize(true)[fieldName]))
			){
				if(hasObrigatorio){
					holder.removeClassName('Obrigatorio');
				}
				if(!hasObrigatorioOK){
					holder.addClassName('ObrigatorioOK');
				}
			}
			else{
				if(hasObrigatorioOK){
					holder.removeClassName('ObrigatorioOK');
				}
				if(!hasObrigatorio){
					holder.addClassName('Obrigatorio');
				}
			}
		},
		
		Obrigatoriedade : {
			add : function(fieldElement,fieldController,formulario,message){
				message	= (message) ? message : formulario.Msgs.notNull;
				fieldController.handleRequired	= function(){
					formulario.notNullValidate(fieldElement, message);
					formulario.Util.handleObrigatorio(fieldElement, fieldElement.parentNode.parentNode, null, 'Input');
				}
				fieldController.handleRequiredMessage	= message;
				formulario.Util.handleObrigatorio(fieldElement, fieldElement.parentNode.parentNode, null, 'Input');
			},
			
			remove : function(fieldElement,fieldController, formulario){
				fieldController.handleRequiredBackuped = (fieldController.handleRequired != Prototype.emptyFunction) ? fieldController.handleRequired : fieldController.handleRequiredBackuped;
				fieldController.handleRequired = Prototype.emptyFunction;
				Element.removeClassName(fieldElement.parentNode.parentNode,'Obrigatorio');
				Element.removeClassName(fieldElement.parentNode.parentNode,'ObrigatorioOK');
				formulario.removeSingleErro(fieldElement,fieldController.handleRequiredMessage,'Error');
			},
			
			bringBack : function(fieldElement,fieldController, formulario){
				if(fieldController.handleRequiredBackuped){
					fieldController.handleRequired = fieldController.handleRequiredBackuped;
					formulario.Util.handleObrigatorio(fieldElement, fieldElement.parentNode.parentNode); 
				}
			},
			
			onlyOne : function(formulario, arrElements){
				var hasValue	= false;
				arrElements.each(function(s,i){
					if(hasValue){	return;	}
					var fieldElement	= s[0];
					var fieldController	= s[1];
					
					if(fieldElement.value && fieldElement.value != fieldController.mask.mask){
						hasValue	= s;
					}
				});
				
				arrElements.each(function(s,i){
					var fieldElement	= s[0];
					var fieldController	= s[1];
					var message			= s[2];
					
					message	= (message) ? message : formulario.Msgs.notNull;
					if(hasValue && hasValue[0].id != s[0].id){
						formulario.Util.Obrigatoriedade.remove(fieldElement,fieldController,formulario);
					}
					else{
						if(fieldController.handleRequired == Prototype.emptyFunction){
							formulario.Util.Obrigatoriedade.add(fieldElement,fieldController,formulario,message);
						}
						else{
							fieldController.handleRequiredMessage	= (fieldController.handleRequiredMessage) ? fieldController.handleRequiredMessage : message;
							if(hasValue && hasValue[0].id != s[0].id){
								formulario.Util.Obrigatoriedade.bringBack(fieldElement,fieldController,formulario);
							}
						}
					}
				});
			}
		}
	}
}






Formulario.Mask	= Class.create();

Formulario.Mask.prototype	= {
	target : Object,
	regExp : RegExp,
	expression : String,
	placeHolder : '_',
	started : false,
	mask : new String(''),
	
	charMap : {
		'9':"[0-9]",
		'a':"[A-Za-z]",
		'*':"[A-Za-z0-9]"
	},
	
	setPlaceHolder : function(placeHolder){
		this.placeHolder	= placeHolder;
	},
	
	addPlaceholder : function(c,r){
		this.charMap[c]	= r;
	},
	
	caret	: function(begin,end){
		var target	= this.target;
		
		if(target.length==0){ return; }
		
		if (typeof begin == 'number') {
			end = (typeof end == 'number')?end:begin;
			
			if(target.setSelectionRange){
				target.focus();
				target.setSelectionRange(begin,end);
			}else if (target.createTextRange){
				var range = target.createTextRange();
				range.collapse(true);
				range.moveEnd('character', end);
				range.moveStart('character', begin);
				range.select();
			}
		}
		else {
			if (target.setSelectionRange){
				begin = target.selectionStart;
				end = target.selectionEnd;
			}else if (document.selection && document.selection.createRange){
				var range = document.selection.createRange();			
				begin	= 0 - range.duplicate().moveStart('character', -100000);
				end		= begin + range.text.length;
			}
			return {begin:begin, end:end};
		}       
	},

	initialize : function(target, expression, doit){
		doit	= (!doit);
		this.target		= $(target);
		this.expression	= expression;
		if(doit){
			this.doit();	
		}
	},
	
	doit : function(){
		if (this.started){	return;	}
		
		var placeHolder		= this.placeHolder;
		var target			= this.target;
		var expression		= this.expression;

		var self			= this;
		var completed		= null
		var expString		= new Array();
		var locked			= new Array();
		var buffer			= new Array();
		var firstNonMaskPos	= null;
		var valid			= null;
		var ignore			= null;
		
		// monta a expressao regular
		expression.split('').each(function(s, i){
			expString	+= self.charMap[s]||((s.match(/[A-Za-z0-9]/)?"":"\\")+s);
			self.mask	+= (self.charMap[s]) ? '_' : s;
		});
		var regExp		= new RegExp(expString);
		this.regExp		= regExp;
		
		// bufferiza o layout e marca o caracter editavel
		expression.split('').each(function(s, i){
			locked[i]	= (self.charMap[s]==null);
			buffer[i]	= locked[i] ? s : self.placeHolder;
			if(!locked[i] && firstNonMaskPos == null){
				firstNonMaskPos	= i;
			}
		});
		
		var focusEvent	= function(){		
			checkVal();
			writeBuffer();
			setTimeout(function(){
				self.caret(valid ? expression.length : firstNonMaskPos);					
			},2);
		};
		
		
		var keydownEvent = function(e){			
			var pos	= self.caret();
			var k	= e.keyCode;
			ignore=(k < 16 || (k > 16 && k < 32 ) || (k > 32 && k < 41));
			
			//deleta a selecao antes de tudo
			if((pos.begin-pos.end)!=0 && (!ignore || k==8 || k==46)){
				clearBuffer(pos.begin,pos.end);
			}	
			//backspace e delete tem tratamento especial
			if(k==8){//backspace					
				while(pos.begin-- >= 0){
					if(!locked[pos.begin]){								
						buffer[pos.begin]	= placeHolder;
						//if($.browser.opera){							
							//s=writeBuffer();
							//input.val(s.substring(0,pos.begin)+" "+s.substring(pos.begin));
							//$(this).caret(pos.begin+1);								
						//}else{
							writeBuffer();
							self.caret(Math.max(firstNonMaskPos,pos.begin));							
						//}
						Event.stop(e);
						return false;								
					}
				}						
			}else if(k==46){//delete
				clearBuffer(pos.begin,pos.begin+1);
				writeBuffer();
				self.caret(Math.max(firstNonMaskPos,pos.begin));
				Event.stop(e);
				return false;
			}else if (k==27){//escape
				clearBuffer(0,expression.length);
				writeBuffer();
				$(this).caret(firstNonMaskPos);	
				Event.stop(e);
				return false;
			}									
		};
		
		
		var	keypressEvent = function(e){
			//nao da enter
			if(e.keyCode == 13){
				Event.stop(e);
			}
				
			if(ignore){
				ignore=false;
				//ff bug no mac
				if(e.keyCode == 8){
					Event.stop(e);
					return false;
				}
				else{
					return null;
				}
			}
				
			e=e||window.event;
			var k	= e.charCode||e.keyCode||e.which;						
			var pos	= self.caret();
			
			if(k >= 96 && k <= 105){
				k	= k - 48
			}
			
			if(e.ctrlKey || e.altKey){//ignora
				return true;
			}else if ((k>=41 && k<=122) ||k==32 || k>186){//caracteres digitaveis
				var p=seekNext(pos.begin-1);					
				if(p<expression.length){
					if(new RegExp(self.charMap[expression.charAt(p)]).test(String.fromCharCode(k))){
						buffer[p]=String.fromCharCode(k);									
						writeBuffer();
						var next=seekNext(p);
						self.caret(next);
						//if(completed && next == expression.length){
							//completed.call(input);
						//}
					}				
				}
			}
			Event.stop(e);
			return false;				
		};
		
		
		var clearBuffer	= function (start,end){
			for(var i = start;	i < end && i < expression.length	; i++){
				if(!locked[i])
					buffer[i]	= placeHolder;
			}				
		};
		
		var writeBuffer	= function(){
			return target.value	= buffer.join('')+'';	
		};
		
		var checkVal	= function(){	
			//coloca os caracteres nos lugares certos
			var test	= target.value;
			var pos		= 0;
			for(var i = 0;	i < expression.length;	i++){					
				if(!locked[i]){
					buffer[i]	= placeHolder;
					while(pos++ < test.length){
						//Regex Testa cada caractere
						var reChar	= new RegExp(self.charMap[expression.charAt(i)]);
						if(test.charAt(pos-1).match(reChar)){
							buffer[i]	= test.charAt(pos-1);								
							break;
						}									
					}
				}
			}
			var s	= writeBuffer();
			if(!s.match(regExp)){
				var onlyPlaceHolder	= true;
				for(var i = 0; i < expression.length; i++){
					if(!locked[i] && buffer[i] != placeHolder){
						onlyPlaceHolder	= false;
						break;
					}
				}	
				
				if(onlyPlaceHolder){
					target.value	= '';
					clearBuffer(0,expression.length);
				}
				valid	= false;
			}else
				valid	= true;
		};
		
		var seekNext	= function(pos){				
			while(++pos<expression.length){					
				if(!locked[pos])
					return pos;
			}
			return expression.length;
		};
		
		target.maxLength	= expression.length;
		target.size			= expression.length;
		
		Event.observe(target, 'focus', focusEvent);
		Event.observe(target, 'blur', checkVal);
		Event.observe(target, 'keydown', keydownEvent);
		Event.observe(target, 'keypress', keypressEvent);
		
		if(target.value){
			checkVal();
			writeBuffer();
		}
		
		this.started	= true;
	}
}


Formulario.SeamField	= Class.create();

Formulario.SeamField.prototype	= {
	handleValidate : Prototype.emptyFunction,
	handleRequired : Prototype.emptyFunction,
	handleRequiredBackuped : Prototype.emptyFunction,
	handleRequiredMessage : String(''),
	handleBlur : Prototype.emptyFunction,
	handleKeypress : Prototype.emptyFunction,
	handleChange : Prototype.emptyFunction,
	handleClick : Prototype.emptyFunction,
	handleSubmit : Prototype.emptyFunction,
	handleWindowLoad : Prototype.emptyFunction,
	mask : Prototype.emptyFunction,
	formName : String(''),
	name : String(''),
	required : Boolean(false),
	
	submitSemValidar : function(formName){
		Event.stopObserving($(formName));
		$(formName).submit();
	},
	
	initialize : function(sufix, name, formName, required, mask, jsValidator, onBlurValidate, notNullMessage, maskMessage){
		var code	= new String("");
		if(mask != ''){
			eval('maskMessage	= (maskMessage) ? maskMessage : '+formName+'.Msgs.mask');
			// esse espacinho no fim eh pra nao conflitar com outras mensagens!
			maskMessage	= maskMessage+' ';
			this.mask	= new Formulario.Mask(name+"Decorate:"+name+sufix, mask);
		}
		
		this.formName	= formName;
		this.name		= name;
		this.required	= required;
		
		code += 
			"this.handleSubmit	= function(e){"+
				"if(seamField_"+name+".handleValidate() > 0){" +
					"Event.stop(e);"+
				"}"+
			"};"+
			"this.handleValidate	= function(e){"+
				formName+".removeSingleErro($('"+name+"Decorate:"+name+sufix+"'),'"+maskMessage+"');"	+ 
				"if(!seamField_"+name+".handleRequired()){";
				
		if(jsValidator != ''){
			code	+= formName+"."+jsValidator+"($('"+name+"Decorate:"+name+sufix+"')); ";
		}
		if(mask != ''){
			code	+=
			"if($('"+name+"Decorate:"+name+sufix+"').value != '' && $('"+name+"Decorate:"+name+sufix+"').value.match('_')){"	+
				formName+".addErro($('"+name+"Decorate:"+name+sufix+"'),'"+maskMessage+"');"	+ 
			"}";
		}
		
		code +=
				"}"+
				"return "+formName+".getErrorCount('Error');"	+
			"};";
			
		if(required){
			code +=
			"this.handleRequired	= function(e){"	+
				"var output	= "+formName+".notNullValidate('"+name+"Decorate:"+name+sufix+"', notNullMessage, '"+formName+"', '"+sufix+"'); "+
				formName+".Util.handleObrigatorio('"+name+"Decorate:"+name+sufix+"', $('"+name+"Decorate:"+name+sufix+"').parentNode.parentNode, '"+formName+"', '"+sufix+"'); "+
				"return output;"+
			"};"
		}
		
		code +=
			"this.handleBlur	= function(e){"	+
				"setTimeout(seamField_"+name+".handleRequired,0);"	+
				"setTimeout(seamField_"+name+".handleValidate,0);"	+
			"};"	+
			"this.handleWindowLoad	= function(e){";
		if(required){
				code += formName+".Util.handleObrigatorio('"+name+"Decorate:"+name+sufix+"', $('"+name+"Decorate:"+name+sufix+"').parentNode.parentNode, '"+formName+"', '"+sufix+"'); ";
		}
			code += "};"+
			
			"this.handleKeypress	= function(e){setTimeout(seamField_"+name+".handleRequired,0);};"	+
			"this.handleChange		= this.handleBlur;"	+
			"this.handleClick		= this.handleBlur;"	+
			
			"Event.observe(window, 'load', this.handleWindowLoad);"	+
			"Event.observe($('"+formName+"'), 'submit', this.handleSubmit);";
			
		if(sufix != 'Radio' && sufix != 'Check'){
			code += "Event.observe($('"+name+"Decorate:"+name+sufix+"'), 'keypress', this.handleKeypress);";
		
			if (onBlurValidate == 'true') {
				code += "Event.observe($('"+name+"Decorate:"+name+sufix+"'), 'blur', this.handleBlur);";
			}
		}
		
		if(sufix == 'Radio' || sufix == 'Check'){
			//code += "Event.observe($('"+name+"Decorate:"+name+sufix+"'), 'click', this.handleClick);";
		}
			
		if(sufix == 'Select'){
			code += "Event.observe($('"+name+"Decorate:"+name+sufix+"'), 'change', this.handleChange);";
		}
		
		eval(code);
	}
}