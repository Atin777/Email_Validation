<?php

if(filter_var($fields['email'], FILTER_VALIDATE_EMAIL)){

				$email = $fields['email'];

				$domain = substr($email, strpos($email, "@") + 1);    

				if($domain == 'gmail.com' || $domain == 'yahoo.com' || $domain == 'mailinator.com' || $domain == 'yopmail.com' || $domain == 'outlook.com' || $domain == 'e4ward.com' || $domain == 'spamgourmet.com' || $domain == 'gishpuppy.com' || $domain == 'spamex.com' ||  $domain == 'jetable.org'){
					return ['email', 'Please use company email' ];
				}
			}else{
				return ['email', 'Invalid email format' ];
			}

?>