class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $isFound=false;
        $firstElement = 0;
        $secondElement = 0;
        while(!$isFound) {
            for ($i=0; $i < sizeOf($nums); $i++) {
                if ($nums[$firstElement] + $nums[$i] == $target && $firstElement != $i) {
                    $isFound = true;
                    $secondElement = $i;
                    break;
                }
            }
            if (!$isFound)
                $firstElement++;
        }

        return [$firstElement, $secondElement];
    }
}
