'''
Given the roots of two binary trees p and q, write a function to check if they are the same or not.

Solution Explanation:
    - First, check if the current node values are the same.
    - Then, recursively check their left and right subtrees.
    - The trees are the same only if all three checks pass.
'''

class Solution:
    def isSameTree(self, p: Optional[TreeNode], q: Optional[TreeNode]) -> bool:

        if not p or not q:
            return p == q

        return p.val == q.val and self.isSameTree(p.left, q.left) and self.isSameTree(p.right, q.right)
        