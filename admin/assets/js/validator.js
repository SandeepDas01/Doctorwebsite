
	//To change error class on blur
      function changeInputStyle(element)
      {
      	$("#"+element.id).removeClass("textboxError");
      }
      function changeTextAreaStyle(element)
      {
      	$("#"+element.id).removeClass("textAreaError");
      }
	  
	  // To check reuired inputs and apply error class 
      function checkRequiredFields(obj)
      {
		 
		var flag=1;
      			$("#"+obj).find('.requiredInput').each(function(index)
				{
      				  var inputVal = $("#"+this.id).val();
      				 
      				  if(inputVal.trim()=="" || inputVal.trim()==0)
      					{
      				    	  $("#"+this.id).addClass("textboxError");
							  flag=0;
      					}
      				});
				
      			$("#"+obj).find('.requiredTextAreaInput').each(function(index)
				{
      				  var inputVal = $("#"+this.id).val();
      				 
      				  if(inputVal.trim()=="" || inputVal.trim()==0)
      					{
      				    	  $("#"+this.id).addClass("textAreaError");
      					}
      			});
				
				if(flag==0){
      			$().toastmessage('showToast', {
					text     : 'Please Fill Required Fields',
					position : 'top-right',
					stayTime: 4000,
					type     : 'error'
					});
				return false;
				}
				else 
				return true;
      }
	//Checks invalid value columns
     
      function checkInvalidValueErrors(obj)
      {
      	var flag=0;
      	
      	$("#"+obj).find('.errorSpan').each(function(index) {
      		
      		
      		  var inputVal = $("#"+this.id).html();
      		  if(inputVal.trim()!="")
      			{
      		    	alert("Please Correct Invalid Values");
      		    	flag=1;
      		    	return false;
      			}
      		});
      	return flag;
      	 
      }
      
	  
	  //Toast
		function showSuccessToast(obj)
		{
		  jSuccess(
			obj,
			{
			  autoHide : true, // added in v2.0
			  clickOverlay : false, // added in v2.0
			  MinWidth : 250,
			  TimeShown : 5000,
			  ShowTimeEffect : 1200,
			  HideTimeEffect : 1200,
			  LongTrip :20,
			  HorizontalPosition : 'left',
			  VerticalPosition : 'bottom',
			  ShowOverlay : false,
			  ColorOverlay : '#000',
			  OpacityOverlay : 0.3,
			  onClosed : function(){ // added in v2.0
			   
			  },
			  onCompleted : function(){ // added in v2.0
			   
			  }
			});
		}
		
		function showErrorToast(obj)
		{
		  jError(
			obj,
			{
			  autoHide : true, // added in v2.0
			  clickOverlay : false, // added in v2.0
			  MinWidth : 250,
			  TimeShown : 5000,
			  ShowTimeEffect : 1200,
			  HideTimeEffect : 1200,
			  LongTrip :20,
			  HorizontalPosition : 'left',
			  VerticalPosition : 'bottom',
			  ShowOverlay : false,
			  ColorOverlay : '#000',
			  OpacityOverlay : 0.3,
			  onClosed : function(){ // added in v2.0
			   
			  },
			  onCompleted : function(){ // added in v2.0
			   
			  }
			});
		}
		
	  $(document).ready(function() {
				$(".numberOnly").keydown(function(event) {
                // Allow special chars + arrows 
                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 
                    || event.keyCode == 27 || event.keyCode == 13 
                    || (event.keyCode == 65 && event.ctrlKey === true) 
                    || (event.keyCode >= 35 && event.keyCode <= 39)){
                        return;
                }else {
                    if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                        event.preventDefault(); 
                    }   
                }
				});
				
				});
			
		$(document).ready(function() {
				$(".alphaNumeric").keypress(function(event) {
				
				var theEvent = event || window.event;
				var key = theEvent.keyCode || theEvent.which;
				var keychar = String.fromCharCode(key);
				var keycheck = /[a-zA-Z0-9 ]/;
				// backspace || delete || escape || arrows
				if (!(key == 8 || key == 9 )) {
					if (!keycheck.test(keychar)) {
						theEvent.returnValue = false; //for IE
						if (theEvent.preventDefault) theEvent.preventDefault(); //Firefox
					}
				}
 
			});
			});
	  
	  $(document).ready(function() {
				$(".alphaOnly").keypress(function(event) {
				
			 var theEvent = event || window.event;
				var key = theEvent.keyCode || theEvent.which;
				var keychar = String.fromCharCode(key);
				//alert(keychar);
				var keycheck = /[a-zA-Z ]/;
				// backspace || delete || escape || arrows
				if (!(key == 8 || key == 9 || key == 27 || key == 46 || key == 37 || key == 39)) {
					if (!keycheck.test(keychar)) {
						theEvent.returnValue = false; //for IE
						if (theEvent.preventDefault) theEvent.preventDefault(); //Firefox
					}
				}
			});
			});
	 
	 
	 // Export To Excel Results
		function exportToExcel(obj,colNo){
		
			var tempResult = document.getElementById(obj).innerHTML;
			$('th:nth-child('+colNo+')').remove();
			$('td:nth-child('+colNo+')').remove();
			window.open('data:application/vnd.ms-excel,'+document.getElementById(obj).innerHTML);
			document.getElementById(obj).innerHTML = tempResult;
		}

		// Print
		
		function printBlock(obj,colNo){
			data =  document.getElementById(obj).innerHTML;
			var mywindow = window.open( "", "new div", "height=630,width=700" );
			mywindow.document.write( "<html><head><title></title>" );
			mywindow.document.write( "<link rel=\"stylesheet\" href=\"assets/css/printDoc.css\" type=\"text/css\"/><link rel=\"stylesheet\" href=\"assets/css/lightbox-css.css\" type=\"text/css\"/>" );
			mywindow.document.write( "</head><body>" );
			mywindow.document.write( data );
			mywindow.document.write( "</body></html>" );
			 elements = mywindow.document.getElementsByClassName("colNotToPrint");
			while(elements.length > 0){
				elements[0].parentNode.removeChild(elements[0]);
			}
			mywindow.print();
		}
		//Number To Words Currency
		function numToWords(num){
			var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
									var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];
									  if ((num = num.toString()).length > 9) return 'overflow';
									  n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
									  if (!n) return; var str = '';
									  str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
									  str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
									  str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
									  str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
									  str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
									  
			return str;
		}

		function passwordConfirm(pas1,pas2){
		
			if(pas1==pas2){
				return true;
			}
			else{
			alert("Confirm Password Does Not Match !!");
			return false;
			}
		}
		
		function validateEmail(email) { 
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}
		