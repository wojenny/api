#Private API of KryptoPay - json

##Target info:
https://kryptopay.pl/api/json/info/


eg. https://kryptopay.pl/api/json/info/?api_public_key=xxx&api_private_key=xxxx


{"success":"true","user_name":"acount","user_verified":"2","user_balance":"20.3"}

##Target create:
https://kryptopay.pl/api/json/create/


eg. https://kryptopay.pl/api/json/create/?amount=43&api_public_key=xxx&api_private_key=xxxx


{"success":"true","error":"0","transaction":"OGJS2QVK1PL","address":"1LfuecSfmWmJFbD1uypigKSHbdZtSspGQ7"}

##Target withdrawals:
https://kryptopay.pl/api/json/withdrawals/


eg. https://kryptopay.pl/api/json/withdrawals/?amount=43&api_public_key=xxx&api_private_key=xxxx


{"success":"true","error":""}

##Target variables:
api_public_key (sh1 string) (in all)


api_private_key (sh2 string) (in all)


amount (float) (in withdrawals,create)


##Errors list:
403 - too many attempts


400 - bad keys


401 - unconfirmed account


402 - over limit


403 - amount below 10zł


405 - lack of resources


504 - serwer not ressponding
