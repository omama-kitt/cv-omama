Feature: Admin logout
Scenario: Administrator logs out
Given admin enter "logsout" 
When admin has already logedin
Then send message logedout sucessfully