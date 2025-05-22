class Solution:

    def remove_duplicates(self, head: Optional[ListNode]) :
            if not head:
                return None
                
            s = set()
            temp = head
            s.add(temp.value)
            
            while temp.next:
                if temp.next.value in s:
                    temp.next = temp.next.next
                else:
                    s.add(temp.next.value)
                    temp = temp.next
            return temp