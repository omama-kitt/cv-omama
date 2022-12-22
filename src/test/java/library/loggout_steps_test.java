package library;

import io.cucumber.java.en.Given;
import io.cucumber.java.en.Then;
import io.cucumber.java.en.When;

public class loggout_steps_test {
	
	Book sr4;
	@Given("admin enter {string}")
	public void admin_enter(String exit) {
	    sr4.check_to_loggout(exit); //conform if he want to log out
	}

	@When("admin has already logedin")
	public void admin_has_already_logedin() {
	  if(Book.is_logged==true&&Book.to_exit==true)
		  Book.is_logged=false; //logged out done
	  else if(Book.is_logged==true&&Book.to_exit==false)
		  Book.is_logged=true; //still logged in
	}

	@Then("send message logedout sucessfully")
	public void send_message_logedout_sucessfully() {
	sr4.loggout_msg();
	}
}
