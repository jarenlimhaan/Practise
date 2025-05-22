from typing import List

class Solution:
    def groupAnagrams(self, strs: List[str]) -> List[List[str]]:
        m = {}
        for i in strs:
            tupl = tuple(sorted(i))
            if tupl in m:
                m[tupl].append(i)
            else:
                m[tupl] = [i]

        return m.values() 