#include<stdio.h>
#include<conio.h>
#include<graphics.h>
#include<dos.h>
int main()
 {
  int d,dx,dy,x,y,p,x1,y1,x2,y2,dt,ds,x11,y11,x22,y22;
  int gd=DETECT,gm;
  printf("Enter first point:\n");
  scanf("%d%d",&x11,&y11);
  printf("Enter Second endpoint:\n");
  scanf("%d%d",&x22,&y22);
  detectgraph(&gd,&gm);
  initgraph(&gd,&gm,"");
  line(getmaxx()/2,0,getmaxx()/2,getmaxy());
  line(0,getmaxy()/2,getmaxx(),getmaxy()/2);
  x=x11;
  y=y11;
  dx=x22-x11;
  dy=y22-y11;
  dt=2*(dy-dx);
  ds=2*dy;
  d=2*dy-dx;
  line(getmaxx()/2,0,getmaxx()/2,getmaxy());
  line(0,getmaxy()/2,getmaxx(),getmaxy()/2);
  putpixel(getmaxx()/2+x,getmaxy()/2-y,RED);
  while(x<x22)
   {
     x++;
     if(d<0)
      d=d+ds;
     else
      {
	y++;
	d=d+dt;
      }
     delay(100);
     putpixel(
     getmaxx()/2+x,getmaxy()/2-y,WHITE);
    }
  getch();
  closegraph();
  return 0;
 }
