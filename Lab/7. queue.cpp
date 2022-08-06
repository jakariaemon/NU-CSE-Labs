#include<stdio.h>
 
#include<stdlib.h>
  
#define Size 4 
  
int front = -1, rear = -1, int_array[Size];
void enqueue();
void dequeue();
void show();
int main()
{
    int choice;
     
    while(1)    
    {
        printf("\nOperations performed by Queue");
        printf("\n1.enqueue the element\n2.dequeue the element\n3.Show\n4.End");
        printf("\n\nEnter the choice:");
        scanf("%d",&choice);
         
        switch(choice)
        {
            case 1: enqueue();
                    break;
            case 2: dequeue();
                    break;
            case 3: show();
                    break;
            case 4: exit(0);
             
            default: printf("\nInvalid choice!!");
        }
    }
}
void enqueue() {
	int value; 
  if (rear == Size - 1)
    printf("\nQueue is Full!!");
  else {
    if (front == -1)
      front = 0;
    rear++;
    scanf("%d", &value); 
    int_array[rear] = value;
    printf("\nInserted -> %d", value);
  }
}
void dequeue() {
  if (front == -1)
    printf("\nQueue is Empty!!");
  else {
    printf("\nDeleted : %d", int_array[front]);
    front++;
    if (front > rear)
      front = rear = -1;
  }
}

// Function to print the queue
void show() {
  if (rear == -1)
    printf("\nQueue is Empty!!!");
  else {
    int i;
    printf("\nQueue elements are:\n");
    for (i = front; i <= rear; i++)
      printf("%d  ", int_array[i]);
  }
  printf("\n");
}
