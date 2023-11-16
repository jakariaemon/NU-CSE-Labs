#include <stdio.h>
#include <ctype.h>
#include<cstdlib>
int main()
{
	system("color f0");
    char c;
    int result;
    printf("Enter a character:");
    scanf("%c",&c);
    result = ispunct(c);
    if (result != 0)
    {
        printf("%c is a punctuation", c);
    }
    else
    {
        printf("%c is not a punctuation", c);
    }

    return 0;
}
