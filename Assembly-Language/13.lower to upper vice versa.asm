
.MODEL SMALL  
.STACK 100H  
.DATA  
MSG1 DB "ENTTER  LETTER:$ "
 MSG2 DB 10,13,"IN LOWER CASE: $" 
 MSG3 DB 10,13," IN Upper CASE $"      
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
 cmp al,41h 
 jl Exit
 cmp al,5ah
   jg up
   
            
   mov x,al 
    ADD x,20h
    lea dx,msg2
    mov ah,9
    int 21h 
     mov dl,x
      mov ah,2
       int 21h 
        mov ah,4ch 
        
int 21h 
        up: 
        cmp al, 61h 
        cmp al, 7Ah
        jG EXIT
        mov x,al 
        SUB x,20h
        lea dx,msg3
        mov ah,9
        int 21h 
        mov dl,x
        mov ah,2
        int 21h 
        mov ah,4ch 
 Exit:
MAIN ENDP
END MAIN  
