#include<graphics.h>
#include<stdlib.h>
#include<conio.h>
#include<stdio.h>
#include<math.h>
int main()
{
int graphdriver=DETECT,graphmode,errorcode;
int i;
int x2,y2,x1,y1,x,y;
printf("Enter the 2 line end points:");
printf("(x1,y1,x2,y2)\n");
scanf("%d%d%d%d",&x1,&y1,&x2,&y2);

initgraph(&graphdriver,&graphmode,"");
line(x1,y1,x2,y2);

printf("Enter scaling co-ordinates\n");
scanf("%d%d",&x,&y);

x1=(x1*x);
y1=(y1*y);
x2=(x2*x);
y2=(y2*y);

printf("Line after scaling");
line(x1,y1,x2,y2);
getch();
closegraph();
}
