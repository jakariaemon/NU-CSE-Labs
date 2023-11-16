#include<stdio.h>
#include<conio.h>
#include<graphics.h>
#include<dos.h>
int main()
 {

  int gd=DETECT,gm;
  int x,y,r,d,xm,ym,i;
  detectgraph(&gd,&gm);
  initgraph(&gd,&gm,"c:\\turboc3\\bgi");
     xm=getmaxx()/2;
     ym=getmaxy()/2;
     line(getmaxx()/2,0,getmaxx()/2,getmaxy());
     line(0,getmaxy()/2,getmaxx(),getmaxy()/2);
  for(i=10;i<=200;i+=20)
  {
    x=0;y=i;d=3-2*i;
    while(x<=y)
    {
     putpixel(x+xm,y+ym,WHITE);
      putpixel(y+xm,x+ym,WHITE);
      putpixel(-y+xm,x+ym,WHITE);
      putpixel(-x+xm,y+ym,WHITE);
      putpixel(-x+xm,-y+ym,WHITE);
      putpixel(-y+xm,-x+ym,WHITE);
      putpixel(y+xm,-x+ym,WHITE);
      putpixel(x+xm,-y+ym,WHITE);
      delay(10);
      if(d<0)
      {
	d=d+4*x+6;
      }
     else
     {
       d=d+4*(x-y)+10;
       y--;
     }
     x++;
    }
  }
  getch();
  closegraph();
 }
