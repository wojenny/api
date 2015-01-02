#Private API of KryptoPay

##Code examples:
IN PHP : https://github.com/Kryptopay/api/blob/master/examplecode.php
IN PYTHON V2 : https://github.com/Kryptopay/api/blob/master/examplecode_v2.py
IN PYTHON V3 : https://github.com/Kryptopay/api/blob/master/examplecode_v3.py

##Target:
https://kryptopay.pl/api

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
####address 
string  a-z A-Z 1-9 ','
####url 
===
##Errors list:
####503 - too many attempts
####502 - an incorrect amount
####501 - the amount above 1000 zł
####500 - invalid data of user
