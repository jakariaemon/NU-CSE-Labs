#include <stdio.h>
#include<cstdlib>

int main()
{
	system ("color f3");
    char ch;

    /* Input character from user */
    printf("Enter any character: ");
    scanf("%c", &ch);


    /* Alphabet check */
    if(ch >= '0' && ch <= '9')
    {
        printf("'%c' is digit.", ch);
    }
    else
    {
        printf("'%c' is not a digit.", ch);
    }

    return 0;
}


