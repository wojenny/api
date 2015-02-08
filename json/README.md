#Private API of KryptoPay - json

##Target:
https://kryptopay.pl/api/json/

##Target variables:
api_public_key (sh1 string)


api_private_key (sh2 string)


amount (float)


example return: {"success":"true","error":"0","transaction":"OGJS2QVK1PL","address":"1LfuecSfmWmJFbD1uypigKSHbdZtSspGQ7"}

##Errors list:
403 - too many attempts


400 - bad keys


401 - unconfirmed account


402 - over limit


403 - amount below 10zł


405 - lack of resources


504 - serwer not ressponding
