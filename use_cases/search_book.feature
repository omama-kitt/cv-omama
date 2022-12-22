Feature: searchbook feature
 
#title cases
Scenario:  Searching for a substring of the title "the"
Given the user is not login
When he search type title "the" and there is books with "the" in title
Then all the matching books appear

Scenario: Searching for a substring of the title "the"
Given the user is login
When he search type title "the" and there is books with "the" in title
Then all the matching books appear

Scenario:  Searching for a substring of the title "magic"
Given the user is not login
When he search type title "magic" and  there is no book with "magic" in name 
Then message appear no matching

Scenario:  Searching for a substring of the title "magic"
Given the user is login
When he search type title "magic" and  there is no book with "magic" in name
Then message appear no matching

 
 #author cases
 Scenario:  Searching for a substring of the author "r"
Given the user is not login
When he search type author "r" and there is authors with "r" in name 
Then all the matching books appear

Scenario:  Searching for a substring of the author "r"
Given the user is login
When he search type author "r" and there is authors with "r" in name 
Then all the matching books appear

Scenario:  Searching for a substring of the author "jack"
Given the user is not login
When he search for type author "jack" and there is no author with "jack" in the name  
Then message appear no matching

Scenario:  Searching for a substring of the author "jack"
Given the user is login
When he search for type author "jack" and there is no author with "jack" in the name  
Then message appear no matching


#isbn cases
Scenario:  Searching for a substring of the ISBN "14"
Given the user is not login
When he search type ISBN "14" and there is books with "14" in ISBN
Then all the matching books appear

Scenario:  Searching for a substring of the ISBN "14"
Given the user is login
When he search type ISBN "14" and there is books with "14" in ISBN
Then all the matching books appear

Scenario:  Searching for a substring of the ISBN "88"
Given the user is not login
When he search type ISBN "88" and there is no book with number "88" in ISBN  
Then message appear no matching

Scenario:  Searching for a substring of the ISBN "88"
Given the user is login
When he search type ISBN "88" and there is no book with number "88" in ISBN
Then message appear no matching

 
