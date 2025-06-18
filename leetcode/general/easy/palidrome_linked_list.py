# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, val=0, next=None):
#         self.val = val
#         self.next = next
class Solution:
    def isPalindrome(self, head: Optional[ListNode]) -> bool:

        dummy = head 

        stack = []

        while dummy:
            stack.append(dummy.val)
            dummy = dummy.next

        l, r = 0, len(stack) - 1

        while l <= r:
            if stack[l] != stack[r]:
                return False 
            l += 1
            r -= 1

        return True