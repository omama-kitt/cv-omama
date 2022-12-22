package library;

import java.util.ArrayList;

public class Book {
	private String ISBN;
	private String Title;
	private String Author;
	private String Signature;
	static private ArrayList <Book> list =new ArrayList <Book>();
	static private ArrayList<Integer> array =new ArrayList <Integer>();
	static public int counter;
	static public boolean is_valied=false; // for isbn check
	static public boolean is_logged=false; //for log in check
	static public boolean right_sig=false; //for signature check
	static public boolean to_exit=false; //for log out check
	public String getISBN() {
		return ISBN;
	}
	public void setISBN(String iSBN) {
		ISBN = iSBN;
	}
	public String getTitle() {
		return Title;
	}
	public void setTitle(String title) {
		Title = title;
	}
	public String getAuthor() {
		return Author;
	}
	public void setAuthor(String author) {
		Author = author;
	}

	public String getSignature() {
		return Signature;
	}
	public void setSignature(String signature) {
		Signature = signature;
	}
	public Book (String ISBN,String Title,String Author,String Signature) {
		super();
		this.ISBN=ISBN;
		this.Title=Title;
		this.Author=Author;
		this.Signature=Signature;
		
	}
	
	
	public static ArrayList <Book> getList() {
		return list;
	}
	public static void setList(ArrayList <Book> list) {
		Book.list = list;
	}

public static ArrayList<Integer> getArray() {
	return array;
}
public static void setArray(ArrayList<Integer> array) {
	Book.array = array;
}
public static void main(String[] args)
{
	
	/*Book b1 = new Book ("0140449117","harry potter","J.K. Rowling", "Rowling1999");
	getList().add(b1);
	Book b2= new Book ("0198526636","the secrit","rhonda byrne","byrne2013");
	getList().add(b2);
	Book b3 =new Book ("1861972717","the danger","renne ashley","ashley1983");
	getList().add(b3);*/
}
//title search
public void search_title(String title,ArrayList <Book> b) {
	 counter=0; 
	for(int i=0;i<b.size();i++) {
		Book a= b.get(i);
		boolean is_found=a.Title.contains(title);
		if (is_found==true) {
			
			Book.array.add(i);
			
		}
		counter++;
	}
	
}
//author search
public void search_author(String author,ArrayList <Book> b) {
	 counter=0; 
	for(int i=0;i<b.size();i++) {
		Book a= b.get(i);
		boolean is_found=a.Author.contains(author);
		if (is_found==true) {
			
			Book.array.add(i);
			
		}
		counter++;
	}

}
//isbn search
public void search_isbn(String isbn,ArrayList <Book> b) {
	 counter=0; 
	for(int i=0;i<b.size();i++) {
		Book a= b.get(i);
		boolean is_found=a.ISBN.contains(isbn);
		if (is_found==true) {
			
			Book.array.add(i);
			
		}
		counter++;
	}
	
}
//signature
public void search_sig(String sig,ArrayList <Book> b) {
	 counter=0; 
	for(int i=0;i<b.size();i++) {
		Book a= b.get(i);
		boolean is_found=a.Signature.contains(sig);
		if (is_found==true) {
			
			Book.array.add(i);
			
		}
		counter++;
	}
	
}
//no matching
public void check_result() {
	 if (counter==0) System.out.println("there is no matching");
	
}
//there is a matching
public void print_books() {
	if (counter!=0) {
		//for loop the get the num that have the books we need to print
		for(int i=0;i<array.size();i++) {
			//store the book info in b 
			 Book b= Book.list.get(Book.array.get(i));
			 
			String isbn=b.getISBN();
			String titlee=b.getTitle();
			String author=b.getAuthor();
			String sig=b.getSignature();
			String book=String.format("%-20s %-20s %-20s %-20s /n",isbn,titlee,author,sig); 
			System.out.println(book);
			
		}

		
	}
	Book.array.clear(); //delete all the books index for the another search
	
}
public void add_book(String title2, String isbn2, String author2, String sig) {
	Book b1 = new Book (title2,isbn2,author2,sig);
	getList().add(b1);
	
}

public void check_isbn(String iSBN) {
	int count=1;int sum=0;
	for (int i=ISBN.length();i>=1;i++) {
		int  c=(int)ISBN.charAt(i);
		sum =c*count;
		count++;
	}
	if(sum %11==0)
	Book.is_valied=true;
	else 
		Book.is_valied=false;
}
public void err_msg() {
	if(Book.is_valied==false)
	System.out.println("isbn number is not valied");
	else if (Book.is_logged==false)
	System.out.println("you are not logged in");
}
public void islogedin (String username,String password ) {
	 if("omama_masa".equals(username)&&"12345".equals(password)) 
		  
		 Book.is_logged=true;
	  else {
		  
		  Book.is_logged=false;
	  }
	  
	 
}
public void passwaord_msg() {
	if(Book.is_logged==true) 
		System.out.println("logged-in successfull");
	else if(Book.is_logged==false) 
		System.out.println("word password!");
}
public void check_sig(String author2, String sig) {

		int d=0;
		for (int i=0;i<author2.length();i++) {
			if(author2.charAt(i)==' ')
				d=i;
			 String sig2=author2.substring(d+1);
			 String subsig=sig.substring(0,d);
			 if (sig2.equals(subsig))
		Book.right_sig=true;
			 else Book.right_sig=true;
			 
		}

}
public void check_to_loggout(String exit) {
	if(exit.equalsIgnoreCase(exit)) Book.to_exit=false; //want to log out
	else if (!(exit.equalsIgnoreCase(exit))) Book.to_exit=true; //still log in 
	
}
public void loggout_msg() {
	if(Book.is_logged==false) System.out.println("logged out successfully");
	else if(Book.is_logged==true) System.out.println("still logged in .. type 'exit' to log out");	
	
}


}
