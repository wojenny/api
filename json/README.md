#Private API of KryptoPay - json

##Target info:
https://kryptopay.pl/api/json/info/


eg. https://kryptopay.pl/api/json/info/?api_public_key=xxx&api_private_key=xxxx


{"success":"true","user_name":"acount","user_verified":"2","user_balance":"20.3"}

##Target create:
https://kryptopay.pl/api/json/create/


eg. https://kryptopay.pl/api/json/create/?amount=43&api_public_key=xxx&api_private_key=xxxx


{"success":"true","error":"0","transaction":"MMIDTVDK89R","address":"1B5Eo8GPbrR6eCiNYCu5khvyi4iak9F5zB","amount_btc":0.0506765,"amount":43}

##Target withdrawals:
https://kryptopay.pl/api/json/withdrawals/


eg. https://kryptopay.pl/api/json/withdrawals/?amount=43&api_public_key=xxx&api_private_key=xxxx


{"success":"true","error":""}

##Target check condition:
https://kryptopay.pl/api/json/transaction/


eg. https://kryptopay.pl/api/json/transaction/?transaction=P3FSQX2LJS5


{"success":"true","condition":"false","start_time":"1431980041"}


{"success":"true","condition":"true","url":"https%3A%2F%2Fmystore.com%3Finvoice_id%3D999999%26status%3Dok","url_fail":"https%3A%2F%2Fmystore.com%3Finvoice_id%3D999999%26status%3Dfail","start_time":"1431891738"}

##Target variables:
api_public_key (sh1 string) (in all)


api_private_key (sh2 string) (in all)


amount (float) (in withdrawals,create)


##Errors list:
403 - too many attempts


400 - bad keys


401 - unconfirmed account


402 - over limit


403 - incorrect amount PLN


405 - lack of resources


504 - server not ressponding
