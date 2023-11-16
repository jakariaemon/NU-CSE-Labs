          .MODEL SMALL  
.STACK 100H  
.DATA  
MSG1 DB "ENTTER A LOWER CASE LETTER:$ "
 MSG2 DB 10,13,"IN UPEER CASE: $"       
x db 0 
.code     
MAIN PROC 
    mov ax,@data
      mov ds,ax
       lea dx,msg1 
mov ah,9 
int 21h 
 mov ah,1 
 int 21h  
 mov x,al 
  sub x,20h
  lea dx,msg2
   mov ah,9
    int 21h 
     mov dl,x
      mov ah,2
       int 21h 
        mov ah,4ch  
int 21h  
MAIN ENDP END MAIN  
