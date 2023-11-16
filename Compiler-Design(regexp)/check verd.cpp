#include<stdio.h>

#include<conio.h>

#include<string.h>
#include<cstdlib>
int main()

{
system("color f0");
 char keyword[32][10]={"is","am","are","was","were","be","being",

       "been","do","does","did","will","would",

       "should","can","could","has","have","had",

       "go"} ;

char string[10];

 int flag=0,i;

 printf("enter any string:");

 gets(string);

 for(i=0;i<32;i++)

 {

   if(strcmp(string,keyword[i])==0)

   {

     flag=1;

   }



 }



 if(flag==1)

   printf("%s is a verb",string);

   else

   printf("%s is not a verd",string);



getch();

}
