Feature: add book feature

Scenario: Add a book when the administrator is logged in 
Given  the admin in logged in 
When  add book info "harry potter" "0140449116" "j.k. Rowling" "Rowling1999" and the isbn is valied
Then  add the "harry potter" "0140449116" "j.k. Rowling" "Rowling1999" to the arraylist

Scenario: Add a book when the administrator is not logged in 
Given  the admin in not logged in 
When  add book info "harry potter" "0140449116" "j.k. Rowling" "Rowling1999"
Then login error message appear

Scenario: Add a book when the administrator is logged in 
Given  the admin in logged in 
When add book info "harry potter" "0140449117" "j.k. Rowling" "Rowling1999" and isbn  the ISBN is no valied
Then  isbn error message appear 

Scenario: Add a book when the administrator is not logged in 
Given  the admin in not logged in 
When  add book info "harry potter" "0140449116" "j.k. Rowling" "Rowling1999" 
Then login error message appear