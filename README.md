#Private API of KryptoPay


##Target:
https://kryptopay.pl/api
####GRAPHIC (simple)
#####Creating transaction:


https://kryptopay.pl/api/create/ (api_public_key+api_private_key+amount)


#####View of transaction


Default: https://kryptopay.pl/api/payments/ (transaction)


Polish version: https://kryptopay.pl/api/payments/pl/ (transaction)


English version: https://kryptopay.pl/api/payments/en/

####JSON (All account information and accessories)
https://kryptopay.pl/api/json/info/ (api_public_key+api_private_key)


https://kryptopay.pl/api/json/create/ (api_public_key+api_private_key+amount)


https://kryptopay.pl/api/json/withdrawals/ (api_public_key+api_private_key+amount)


https://kryptopay.pl/api/json/transaction/ (transaction)


##Code examples:
####PHP : https://github.com/Kryptopay/api/tree/master/php
####PYTHON V2/V3 : https://github.com/Kryptopay/api/tree/master/python

##Target variables:
api_public_key (sh1 string)


api_private_key (sh2 string)


amount (float)
##Additional variables:
order_nr (only a-z A-Z 1-9)


description (only a-z A-Z 1-9 and ',')


company (only a-z A-Z 1-9)


name (only a-z A-Z)


surname (only a-z A-Z)


address string(only a-z A-Z 1-9 and ',')


url 


===
##Errors list:
403 - too many attempts


402 - an incorrect amount


401 - the amount above limit


400 - invalid data of user
