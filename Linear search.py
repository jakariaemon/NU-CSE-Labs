#!/usr/bin/env python
# coding: utf-8

# In[7]:


arr = [2, 3, 9, 10, 40]
x = 90
n = len(arr)


def search(arr, n, x):
 
    for i in range(0, n):
        if (arr[i] == x):
            return i
    return -1
 


 
# Function call
result = search(arr, n, x)
if(result == -1):
    print("Element is not present in array")
else:
    print("Element is present at index", result) 


# In[ ]:




