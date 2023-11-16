
#include<stdio.h>
#include<math.h>
 #include<cstdlib>
int main()
{
	system("color f0");
        float a;
        printf("Enter a Number\n");
        scanf("%f",&a);
 
        int x = ceil(a);
        if ( x == a)
        {
                printf("it's an integer\n");
        }
        else
        {
                printf("it's not an integer\n");
        }
        return 0;
}
