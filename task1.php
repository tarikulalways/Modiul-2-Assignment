<?php
// for loop
function printEvenNumbersWithForLoop($start, $end, $step)
{
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// while loop
function printEvenNumbersWithWhileLoop($start, $end, $step)
{
    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

// do-while loop
function printEvenNumbersWithDoWhileLoop($start, $end, $step)
{
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}
?>

<div class="row">
    <div class="col-md-6 m-auto mb-3">
        <div class="alert alert-success">Task 1: Looping with Increment using a Function</div>
        <ul class="list-group">
            <li class="list-group-item"><span class="fw-bold">For Loop:</span> <?php printEvenNumbersWithForLoop(2,20,2); ?></li>
            <li class="list-group-item"><span class="fw-bold">While Loop:</span> <?php printEvenNumbersWithWhileLoop(2,20,2); ?></li>
            <li class="list-group-item"><span class="fw-bold">Do-While Loop:</span> <?php printEvenNumbersWithDoWhileLoop(2, 20, 2) ?></li>
        </ul>   
    </div>
</div>
