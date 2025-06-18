'''
🌳 Example:
For a tree like:

markdown
Copy
Edit
    1
   / \
  2   3
 /
4
maxDepth(4) returns 1 (leaf node)

maxDepth(2) is 1 + max(1, 0) → 2

maxDepth(3) is 1 (no children)

maxDepth(1) is 1 + max(2, 1) → 3

So each 1 + is saying: "I'm adding myself on top of the deepest child subtree."

'''

class Solution:
    def maxDepth(self, root: Optional[TreeNode]) -> int:
        if not root:
            return 0 

        return 1 + max(self.maxDepth(root.left), self.maxDepth(root.right))   