#Private API of KryptoPay

##Target variables:

####api_public_key 
string a-z A-Z 1-9

####api_private_key 
string  a-z A-Z 1-9
####amount 
float

##Additional variables:
####order_nr 
string  a-z A-Z 1-9
####description 
string  a-z A-Z 1-9 ','
####company 
string  a-z A-Z 1-9
####name 
string  a-z A-Z
####surname 
string  a-z A-Z
############address 
string  a-z A-Z 1-9 ','
####url 

##ERROR LIST:
####503 - too many attempts
####502 - an incorrect amount
####501 - the amount above 1000 zł
####500 - invalid data of user

===
##Target:
https://kryptopay.pl/api
##Code examples:
IN PHP : https://github.com/Kryptopay/api/blob/master/examplecode.php
