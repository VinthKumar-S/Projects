import packbank.details;
import java.io.*;
public class Bankpack {
    public static void main(String[] args)throws IOException {
	// write your code here
        DataInputStream d=new DataInputStream(System.in);
        details show = new details();
        details add = new details();
        int choice;
        do {
		System.out.println("1.CreateAccount,2.Search(deposite and withdrew),3.Valid or not,4.Display,or press zero for exit:");
            System.out.println("Enter your choice:");
            choice = Integer.parseInt(d.readLine());
            switch (choice) {
                case 1: {
                    int NoofACC;
                    int[] balance = new int[30];
                    String[] name = new String[30];
                    System.out.println("Enter how many accounts want to create:");
                    NoofACC = Integer.parseInt(d.readLine());
                    for (int i = 1; i <= NoofACC; i++) {
                        System.out.println("Enter the name-" + i + ":");
                        name[i] = new String(d.readLine());
                        System.out.println("Enter the balance-" + i + ":");
                        balance[i] = Integer.parseInt(d.readLine());
                    }
                    show.get(NoofACC, balance, name);
                }
                break;
                case 2: {
                    int element, dep = 0, wid = 0;
                    String op, op1 = "yes";
                    System.out.println("Are you want to do any transaction with search?,say yes or no:");
                    op = new String(d.readLine());
                    System.out.println(" Than enter the search Account No:");
                    element = Integer.parseInt(d.readLine());
                    show.search(element);
                    if (op.equals(op1)) {
                        int trans;
                        do {
                            System.out.println("press 1 for deposit,press 2 for withdrew,press zero for exit");
                            trans = Integer.parseInt(d.readLine());
                            if (trans == 1&& trans !=0) {
                                System.out.println("Enter the deposit amount");
                                dep = Integer.parseInt(d.readLine());
                            } else {
                                if (trans == 2 && trans !=0) {
                                    System.out.println("Enter the amount for withdrew");
                                    wid = Integer.parseInt(d.readLine());
                                } else
                                    System.out.println("Thanks for used us..");
                            }
                            show.transaction(trans, dep, wid, element);
                        }while (trans !=0);
                        }
                    else
                        System.out.println("Thanks for answer..");

                }
                break;
                case 3:
                    int acc;
                    System.out.println("Enter the account to check the account is valid or not");
                    acc=Integer.parseInt(d.readLine());
                    show.valid(acc);
                    break;
                case 4:
                    show.display();
                    break;
            }

        }while (choice!=0);
    }
}