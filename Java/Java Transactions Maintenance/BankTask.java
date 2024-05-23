

import java.io.*;
import java.util.Scanner;

class transaction{
    int[] acc=new int[30];
    int[] bal=new int[30];
    String[] name=new String[30];
    int i,Noacc,search,accno=88,dep,Wd;
    Scanner sc=new Scanner(System.in);
    void get(int Na){
        Noacc=Na;
        for(i=1;i<=Noacc;i++){
            System.out.println("Enter the name for:"+i+"=");
            name[i]= sc.next();
            System.out.println("Enter the balance:"+i+"=");
            bal[i]= sc.nextInt();
            acc[i]=accno++;
        }
        for(i=1;i<=Noacc;i++){
            System.out.println("Account no:"+i+"="+acc[i]);
            System.out.println("Name      :"+i+"="+name[i]);
            System.out.println("balance   :"+i+"="+bal[i]);
        }

    }
    void search(int s){
        search=s;
        for(i=1;i<=Noacc;i++) {
            if (acc[i] == search) {
                System.out.println("the accountNo:" + acc[i]);
                System.out.println("the name     :" + name[i]);
                System.out.println("the balance  :" + bal[i]);
            }

        }

    }
    void deposite(int d){
        dep=d;
        for(i=1;i<=Noacc;i++){
            if(acc[i]==search)
            {
                bal[i]+=d;
                System.out.println("deposited:"+bal[i]);
            }

        }
    }
    void withdraw(int wd){
        Wd=wd;
        for(i=1;i<=Noacc;i++){
            if(acc[i]==search)
            {
                bal[i]=bal[i]-Wd;
                System.out.println("Withdraw"+bal[i]);
            }
        }
    }
}


public class BankTask {

    public static void main(String[] args)throws IOException {
        int Noacc,search,deposite,withdraw,choice;

        DataInputStream d= new DataInputStream(System.in);
        transaction trans=new transaction();
        do {
            System.out.println("1.CreateAccount,2.Search,3.Deposite,4.WithDraw,5.For exit..");
            System.out.println("Enter your chioce:");
            choice=Integer.parseInt(d.readLine());
            switch (choice)
            {
                case 1:
                    System.out.println("Enter how many acconts want to open:");
                        Noacc=Integer.parseInt(d.readLine());
                        trans.get(Noacc);
                        break;
                case 2:
                    System.out.println("Enter your account No which you want to search:");
                    search=Integer.parseInt(d.readLine());
                    trans.search(search);
                    break;
                case 3:
                    System.out.println("Enter amount you want to deposite:");
                    deposite=Integer.parseInt(d.readLine());
                    trans.deposite(deposite);
                    break;
                case 4:
                    System.out.println("Enter amount you want to withdraw");
                    withdraw=Integer.parseInt(d.readLine());
                    trans.withdraw(withdraw);
                    break;
                case 5:
                    System.out.println("Terminated from the loop");
                default:
                    System.out.println("Enter the rigth choice");
            }
        }while (choice!=5);
    }


}
