package library;

import io.cucumber.java.en.Given;
import io.cucumber.java.en.Then;
import io.cucumber.java.en.When;

public class AddBook_Steps_Test {
	private Book sr2;
	
	@Given("the admin in logged in")
	public void the_admin_in_logged_in() {
	 Book.is_logged=true;
	}

	/*@When("add book info {string} {string} {string} {string} and the ISBN is valied")
	public void add_book_info_and_the_isbn_is_valied(String title, String isbn, String author, String sig) {
		Book.is_valied=false;
		Book.right_sig=false;
	   sr2.check_isbn(isbn); //check isbn
	   sr2.check_sig(author,sig); //check sig
	}*/

	@When("add book info {string} {string} {string} {string} and the isbn is valied")
	public void add_book_info_and_the_isbn_is_valied(String title, String isbn, String author, String sig) {
		Book.is_valied=false;
		Book.right_sig=false;
	   sr2.check_isbn(isbn); //check isbn
	   sr2.check_sig(author,sig); //check sig
	}


	@Then("add the {string} {string} {string} {string} to the arraylist")
	public void add_the_to_the_arraylist(String title, String isbn, String author, String sig) {
		sr2.add_book(title, isbn, author, sig);
		//add to list
	}

	@Given("the admin in not logged in")
	public void the_admin_in_not_logged_in() {
	    Book.is_logged=false; 
	}

	@When("add book info {string} {string} {string} {string}")
	public void add_book_info(String string, String isbn, String string3, String string4) {
	    //first check isbn --the user here is not logged in not need to add 
		 sr2.check_isbn(isbn);
	}

	@Then("login error message appear")
	public void login_error_message_appear() {
	    sr2.err_msg();
	}

	@When("add book info {string} {string} {string} {string} and isbn  the ISBN is no valied")
	public void add_book_info_and_isbn_the_isbn_is_no_valied(String title, String isbn, String author, String sig) {
		sr2.check_isbn(isbn);
	}

	@Then("isbn error message appear")
	public void isbn_error_message_appear() {
	    sr2.err_msg();
	}

	
}
