package library;

import io.cucumber.java.en.Given;
import io.cucumber.java.en.Then;
import io.cucumber.java.en.When;

public class SearchBook_Steps_Test {
	
	private Book sr;

	@Given("the user is not login")
	public void the_user_is_not_login() {
	Book.is_logged=false;
	}

	@Then("all the matching books appear")
	public void all_the_matching_books_appear() {
	    sr.print_books();
	    //get the index from array and print + clear array 
	}

	@Given("the user is login")
	public void the_user_is_login() {
		Book.is_logged=true;
	}

	@When("he search type title {string} and there is books with {string} in title")
	public void he_search_type_title(String title) {
	   sr.search_title(title,Book.getList());
	   //search and store the index into another array
	}
	

	@When("he search type title {string} and there is no books with {string} in title")
	public void he_search_type_title2(String title) {
	   sr.search_title(title,Book.getList());
	   //search but there is no result
	}

	@Then("message appear no matching")
	public void message_appear_no_matching() {
	   sr.check_result();
	   //if no result then print a message
	}

	@When("he search for author {string} there is authors with {string} in name")
	public void he_search_type_author(String author) {
		sr.search_author(author,Book.getList());
	 //search+result
	}
	@When("he search for author {string} there is no authors with {string} in name")
	public void he_search_type_author2(String author) {
		sr.search_author(author,Book.getList());
	 // search but there is no result
	}

	
	@When("he search type ISBN {string} there is  book with number {string} in ISBN")
	public void he_search_type_isbn(String isbn) {
		sr.search_isbn(isbn,Book.getList());
	  //search + there is result -> store index in array
	}
	@When("he search type ISBN {string} there is no book with number {string} in ISBN")
	public void he_search_type_isbn2(String isbn) {
		sr.search_isbn(isbn,Book.getList());
	  //search but there is no result
	}

	


	
}
