from typing import List

class Solution:

    # Naive method using sorting - O(n log n)
    def topKFrequent(self, nums: List[int], k: int) -> List[int]:
        
        m = {}
        for i in nums:
            m[i] = 1 + m.get(i, 0)

        s = sorted(m.items(), key=lambda x: x[1], reverse=True)[:k]

        return [i[0] for i in s]
    
    # Using bucket sort - O(n)

    '''
    Using the frequencies as indices in an array, 
    and storing the numbers that occur with those frequencies as the values.

    Start from the end of the bucket (highest freq) and collect numbers until you've gathered k of them.
    '''
    def topKFrequentBucketSort(self, nums: List[int], k: int) -> List[int]:
        
        m = {}
        for i in nums:
            m[i] = 1 + m.get(i, 0)

        bucket = [[] for _ in range(len(nums) + 1)]
        for num, freq in m.items():
            bucket[freq].append(num)

        res = []
        for freq in range(len(bucket) - 1, 0, -1):
            for num in bucket[freq]:
                res.append(num)
                if len(res) == k:
                    return res
