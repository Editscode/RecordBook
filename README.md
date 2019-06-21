# RecordBook
API RecordBook

#create_user.php
{
    "firstname" : "tolocks",
    "lastname" : "tolocks",
     "dob" : "2019-06-03",
    "email" : "tolocks@codeofaninja.com",
    "password" : "123456"
}

#login.php
{
    "email" : "tolocks@codeofaninja.com",
    "password" : "123456"
}
http_response_code(200)
{
"message": "Successful login.",
"jwt": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9leGFtcGxlLm9yZyIsImF1ZCI6Imh0dHA6XC9cL2V4YW1wbGUuY29tIiwiaWF0IjoxMzU2OTk5NTI0LCJuYmYiOjEzNTcwMDAwMDAsImRhdGEiOnsiaWQiOiIzIiwiZmlyc3RuYW1lIjoidG9sb2NrcyIsImxhc3RuYW1lIjoidG9sb2NrcyIsImVtYWlsIjoidG9sb2Nrc0Bjb2Rlb2ZhbmluamEuY29tIn19.bPZtEBB3dG8FUAI5jFFImcNA12qnkA0Vw5C1G_afigk"
}
