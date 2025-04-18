def twoSum(sums, target):
    hashmap = {}
    for idx, n in enumerate(sums):
        missing = target-n
        if missing in hashmap:
            return [hashmap[missing], idx]
        hashmap[n] = idx