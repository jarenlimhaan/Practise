'''
The idea is that every time you see a new binary digit, you shift the current value left (just like how place values work in binary):

In binary, shifting left by 1 is the same as multiplying by 2.

So every step of val = 2 * val + head.val means:

"Shift the current value left one bit (i.e., multiply by 2)"

"Then add the next binary digit (0 or 1)"
'''

class Solution:
    
    def getDecimalValue(self, head: Optional[ListNode]) -> int:
        val = 0
        while head:
            val = 2*val + head.val
            head = head.next
        return val 