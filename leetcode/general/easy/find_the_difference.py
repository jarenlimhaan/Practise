class Solution:
    def findTheDifference(self, s: str, t: str) -> str:

        if not s:
            return t

        m = {}

        for char in t:
            m[char] = m.get(char, 0) + 1

        for char in s:
            m[char] -= 1
            if m[char] == 0:
                del m[char]

        return list(m.keys())[0]
        