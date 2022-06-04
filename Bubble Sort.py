#!/usr/bin/env python
# coding: utf-8

# In[3]:


a = [35, 10, 31, 11, 26]    
print("Before sorting array elements are - ")  
for i in a:     
    print(i)    
for i in range(0,len(a)):    
    for j in range(i+1,len(a)):    
        if a[j]<a[i]:    
            temp = a[j]    
            a[j]=a[i]    
            a[i]=temp    
print("\nAfter sorting array elements are - ")    
for i in a:     
    print(i)  


# In[ ]:




