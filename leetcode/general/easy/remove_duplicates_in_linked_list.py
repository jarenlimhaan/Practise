# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, val=0, next=None):
#         self.val = val
#         self.next = next
class Solution:
    def deleteDuplicates(self, head: Optional[ListNode]) -> Optional[ListNode]:

        if not head:
            return head

        dummy = head
        curr = dummy
        nums = set()
        nums.add(dummy.val)

        while dummy.next:

            if dummy.next.val in nums:
                dummy.next = dummy.next.next
            else:
                nums.add(dummy.next.val)
                dummy = dummy.next
    
        return curr