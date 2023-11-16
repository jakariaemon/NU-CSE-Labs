.MODEL SMALL 
    .STACK 100H 
    .CODE    
     MAIN PROC 
    MOV  	AH, 1 	; read character function 
 	INT  	21h 	; char in AL 
 	CMP 	AL, 'Y' 	; char = "Y" 
 	JE  	THEN 	; yes, display the char 
 	CMP 	AL, 'y' 	; char = "y" 
 	JE  	THEN 	; yes, display the char 
 	JMP    ELSE 
 	THEN: 
 		
 	MOV  	DL, AL ; get the char 
 	MOV  	AH, 2 	; display character function 
 	INT  	21h 	; display the character 
ELSE: 
            MOV AH, 4CH 
            INT 21H 
        MAIN ENDP 
    END MAIN 
 
