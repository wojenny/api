#Private API of KryptoPay - withdrawals

##Target:
https://kryptopay.pl/api/withdrawals/

##Target variables:
api_public_key (sh1 string)


api_private_key (sh2 string)


amount (float)

##Errors list:
403 - too many attempts


400 - bad keys


401 - unconfirmed account


402 - over limit


403 - amount below 10zł


405 - lack of resources


504 - serwer not ressponding
