.model small 
.stack 100h
.data
array db 2,8,8,0,6
A db ?
.code 
main proc
    mov ax,@data
    mov ds,ax
    mov cx,5
    mov DI,0
    mov al,0
    compair:
    cmp al,array[DI]
    ja next
    mov al,array[DI]
    next:
    inc DI
    loop compair 
    mov ah,2
    add al,48
    mov dl,al
    int 21h
    main endp 
end main 