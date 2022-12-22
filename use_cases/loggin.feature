Feature: Admin login
Scenario: Administrator can log in with valid credentials
Given the admin has valid username "omama_masa" and password "12345"
When admin enter his username and password
Then program send message you are logedin

Scenario: Administrator has the wrong password
Given  the admin has valid username "omama_masa" and password "1234"
When admin enter his username and password
Then program send message you are enter wrong password