<?php
// Grading Students Problem

function gradingStudents($grades)
{
    // Write your code here
    foreach ($grades as $grade) {
        $mod = $grade % 5;
        $roundGrade = $grade - $mod;

        if ($mod > 0) {
            $roundGrade += 5;
        }
        if (($roundGrade - $grade) < 3) {
            $newGrade = $roundGrade;
        }
        if (($roundGrade - $grade) >= 3) {
            $newGrade = $grade;
        }

        if ($newGrade < 40) {
            $array[] = $grade;
        } else {
            $array[] = $newGrade;
        }

    }
    return $array;

}

?>