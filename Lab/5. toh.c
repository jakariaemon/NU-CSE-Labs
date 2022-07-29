
#include <stdio.h>

// C recursive function to solve tower of hanoi puzzle
towerOfHanoi(int n, char src, char dst, char aux)
{
	
    if (n>0)
    {
    towerOfHanoi(n-1, src, aux, dst);
    printf("\n Move disk %d from rod %c to rod %c", n, src, dst);
    towerOfHanoi(n-1, aux, dst, src);
    }
}
    
 
 main()
{
    int n = 3; // Number of disks
    towerOfHanoi(n, 'A', 'C', 'B');  // A, B and C are names of rods A source C destination B aux/helper
     
    return 0;
}
