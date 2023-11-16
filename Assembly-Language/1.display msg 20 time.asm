 .MODEL SMAll 
 .STACK 100h 
 .Data
   msg DB 10,13,"My name is Emon  $" 
.code  
MAIN PROC  
    MOV AX,00 
    MOV CX,20 
    START-LOOP: 
    MOV AX,@data 
    MOV DS,AX 
    LEA DX,msg 
    MOV AH,9 
    INT 21h   
    LOOP START-LOOP  
    MOV AH,4ch 
    INT 21h  
    MAIN ENDP  
END MAIN 
