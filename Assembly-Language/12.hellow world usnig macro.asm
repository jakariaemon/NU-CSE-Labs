       EMON MACRO MSG
            push AX
            push DX
            MOV AH,09h
            lea DX,MSG
            int 21h
            pop DX
            pop AX
        ENDM 
        .MODEL SMALL 
        .STACK 64
        .DATA
        MSG1 DB 10,"HELLOW WORLD $"
        .code 
          start: 
          mov ax,@data
          mov ds,ax
         EMON MSG1
          .EXIT 
          END START 