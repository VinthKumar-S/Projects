package packbank;
public class details {
    int[] balance = new int[30];
    String[] name = new String[30];
    int[] AccNO = new int[30];
    int NoofAcc;

public void get(int n, int[] bal, String[] users) {
        NoofAcc = n;
        int An = 88;
        for (int i = 1; i <= NoofAcc; i++) {
            name[i] = users[i];
            balance[i] = bal[i];
            AccNO[i] = An++;
        }

    }

   public void search(int e) {
        int element = e,flag=0;
        for (int i = 1; i <= NoofAcc; i++) {
            if (AccNO[i] == element)
            {
                System.out.println("the Account details");
                System.out.println("Name:" + name[i]);
                System.out.println("balance:" + balance[i]);
                System.out.println("Account no:" + AccNO[i]);
                flag = 1;
            }
        }

            if (flag == 0) {
                System.out.println("The Account not found");
                System.out.println("And you can't use the below option--");
            }

    }
   public void valid(int acc) {
        int accno = acc,flag1=0;
        for (int i = 1; i <= NoofAcc; i++) {
            if (AccNO[i] == accno)
            {
                System.out.println("this account number is already exist:");
                flag1=1;
            }
        }
            if(flag1==0)
            {
                System.out.println("This account is invalid and are you want to create an account press 1");
            }
    }
   public void display()
    {
        for (int i = 1; i <= NoofAcc; i++)
        {
            System.out.println("Name:" + name[i]);
            System.out.println("balance:" + balance[i]);
            System.out.println("Account no:" + AccNO[i]);
        }

    }
public void transaction(int t,int dep,int w,int it)
    {
        int trans=t;
        int deposit=dep;
        int withdrew=w;
        int item=it;
        for (int i = 1; i <= NoofAcc; i++)
        {
            if(AccNO[i]==item)
            {
                if (trans == 1)
                {
                    balance[i]+=deposit;
                    System.out.println("Balance:"+balance[i]);
                } else if (trans == 2)
                {
                    balance[i]-=withdrew;
                    System.out.println("Balance:"+balance[i]);
                }
            }
        }
    }

}