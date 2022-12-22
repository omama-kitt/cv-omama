package library;

import io.cucumber.java.en.Given;
import io.cucumber.java.en.Then;
import io.cucumber.java.en.When;

public class Loggin_step_test {
	String actusername,actpassword;
	Book sr3;
	boolean flag=true;


	@Given("the admin has valid username {string} and password {string}")
	public void the_admin_has_valid_username_and_password(String username , String password) {
		this.actusername=username;
		this.actpassword=password;
	}



		@When("admin enter his username and password")
		public void admin_enter_his_username_and_password() {
		 sr3.islogedin(actusername,actpassword );
		 //compare info with the real admain info
		}

		@Then("program send message you are logedin")
		public void program_send_message_you_are_logedin() {
			sr3.passwaord_msg();
		   
		}
		@Then("program send message you are enter wrong password")
		public void program_send_message_you_are_enter_wrong_password() {
			sr3.passwaord_msg();

		}
}
