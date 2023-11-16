#include<stdio.h>
#include<math.h>
 #include<cstdlib>
int main()
{
	system("color f0");
        float a;
        printf("Enter a number\n");
        scanf("%f",&a);
 
        int x = ceil(a);
        if ( x != a)
        {
                printf("it's a float\n");
        }
        else
        {
                printf("it's not a float\n");
        }
        return 0;
}
