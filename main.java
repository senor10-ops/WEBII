import java.util.*;

class main {

    int factorial(int n) {
        // if (n == 0) {
        //     return 1;
        // }

        int smaller = factorial(n - 1);
        int bigger = n * factorial(n - 1);
        return bigger;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        main m = new main();

        int ans = m.factorial(n);
        System.out.println(ans);
    }
}
