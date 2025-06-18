class Solution:
    def isSymmetric(self, root: Optional[TreeNode]) -> bool:
        
        return self.helper(root.left, root.right)

    def helper(self, l, r):
        if not l or not r:
            return l == r 
        return l.val == r.val and self.helper(l.left, r.right) and self.helper(l.right, r.left)