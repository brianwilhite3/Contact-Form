// Brian Wilhite
// JQuery validation, regular exspressions are for Canada and United states
// xss_clean() is used in the model
        
        $(function (){ 
            
            $('#check').click(validate);
	
	function validate(){
		var userData = true;
		
               
		$('#name').each(function() {
                    var cur = $(this);
                    cur.next('div').remove();
                    var name_pattern = /^[A-Za-z0-9 ]{3,20}$/;		
                        if(!name_pattern.test(cur.val())){
                            cur.after('<div class="error">Please re-enter name.</div>');
                            $('.error').css({'color': 'red', 'font-size': 'medium'});
                            userData = false;
			}
		});
		$('#business').each(function() {
                    var cur = $(this);
                    cur.next('div').remove();
                    var business_pattern = /^[A-Za-z0-9&\'\s-]{3,30}$/; 
                        if(!business_pattern.test(cur.val())){
                            cur.after('<div class="error">Please re-enter company name.</div>');
                            $('.error').css({'color': 'red', 'font-size': 'medium'});
                            userData = false;
			}
		});
		$('#city').each(function() {
                    var cur = $(this);
                    cur.next('div').remove();
                    var city_pattern = /^[A-Za-z0-9 ]{3,30}$/; 
                        if(!city_pattern.test(cur.val())){
                            cur.after('<div class="error">Please re-enter city.</div>');
                            $('.error').css({'color': 'red', 'font-size': 'medium'});
                            userData = false;
			}
		});
		$('#address').each(function() {
                    var cur = $(this);
                    cur.next('div').remove();
                    var address_pattern = /^[A-Za-z0-9 ]{3,30}$/; 
                        if(!address_pattern.test(cur.val())){
                            cur.after('<div class="error">Please re-enter address.</div>');
                            $('.error').css({'color': 'red', 'font-size': 'medium'});
                            userData = false;
		        }
		});
			$('#e_mail').each(function() {
			var cur = $(this);
			cur.next('div').remove();
			var email_pattern = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
				if(!email_pattern.test(cur.val())){
					cur.after('<div class="error">Please re-enter e-mail.</div>');
					$('.error').css({'color': 'red', 'font-size': 'medium'});
                                        userData = false;
				}
			});
			$('#webAdderss').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var urlPattern = /^(http(s?))\:\/\/www.([0-9a-zA-Z\-]+\.)+[a-zA-Z]{2,6}(\:[0-9]+)?(\/\s*)?$/;
                                if(!urlPattern.test(cur.val())){
                                    cur.after('<div class="error">Please re-enter URL.</div>');
                                    $('.error').css({'color': 'red', 'font-size': 'medium'});
                                    userData = false;
				}
			});
                        
			$('#zip').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var zip_pattern = /(^\d{5}(-\d{4})?$)|(^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$)/;
                                if(!zip_pattern.test(cur.val())){
                                    cur.after('<div class="error">Please re-enter zip code.</div>');
                                    $('.error').css({'color': 'red', 'font-size': 'medium'});
                                    userData = false;
			        }
			});
			$('#phone').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var phone_number_pattern = /^\(?([0-9]{3})\)?[-.]?([0-9]{3})[-.]?([0-9]{4})$/;
                            if(!phone_number_pattern.test(cur.val())){
                                cur.after('<div class="error">Please re-enter phone number.</div>');
				$('.error').css({'color': 'red', 'font-size': 'medium'});
				userData = false;
			    }
			});
                        
                            // make sure someone types in the textarea
                            $('textarea#message').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var textArea = $('#message').val();
                            if(textArea === ""){
                                cur.after('<div class="error">Please write a question or message.</div>');
				$('.error').css({'color': 'red', 'font-size': 'medium'});
				userData = false;
			    }
			});
                        
                            // make sure date is selected 
                            $('#date').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var date = $('#date').val();
                            if(date === ""){
                                cur.after('<div class="error">Please choose a date in the field.</div>');
				$('.error').css({'color': 'red', 'font-size': 'medium'});
				userData = false;
			    }
			});
			
			    // drop down list
                            $('#select_box').each(function() {
                            var cur = $(this);
                            cur.next('div').remove();
                            var selectS = $('#select_box').val();
                                if( selectS === 0){
                                    cur.after('<div class="error">Please select from dropdown.</div>');
                                    $('.error').css({'color': 'red', 'font-size': 'medium'});
                                    userData = false;
				}
                         });
                         
                         
                         // drop down list 
			 $('#quantity').each(function() {
                            var cur = $(this);
                            cur.next('span').remove();
                            var selectQ = $('#quantity').val();
                                if( selectQ === 0){
                                    cur.after('<span class="error">Please select a quantity.</span>');
                                    $('.error').css({'color': 'red', 'font-size': 'medium'});
                                    userData = false;
				}
                        });
					
			if(!userData){
                            
                             $('.warning').text('Please fix the errors in the form.');
                            return false;
                        
                         }else if(userData){
                            
                            //log data 
                            var data = {
                                name     : $('input[name=name]').val(),
                                email    : $('input[name=email]').val(),
                                phone    : $('input[name=phone]').val(),
                                company  : $('input[name=company]').val(),
                                message  : $('textarea[name=message]').val()
                            };

                            
                            //$.ajax({
                               //  type 	: 'POST', 
                               // url 		: '', 
                                //data 		: data,       
                                //dataType 	: 'json' 
                           // }).done(function(data){
                                 
                                 // need to set a timer on the user feedback...                
                                 $("#response").append("<p><strong>Success</strong>&nbsp;Thank You, we will respond back as soon as we can.</p>");
                                 
                                 // error log
				 console.log(data);              
                                            
                            // });    
                            
                           event.preventDefault();
                           event.stopPropagation();
                            
                        

                     
                   
                  }
                
                            
        }
			
});
                           
