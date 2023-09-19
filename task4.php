<?php 
    function printFibonacci($count) {
        $first = 0;
        $second = 1;
    
        for ($i = 1; $i <= $count; $i++) {

            echo $first . " ";

            $next = $first + $second;

            $first = $second;
            $second = $next;
        }
    }
?>

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="alert alert-success">Task 4: Fibonacci Series printing using a Function</div>
        <ul class="list-group">
                <li class="list-group-item"><span class="fw-bold">For Loop:</span>
                <?php 
                    printFibonacci(15);
                ?>
            </li>
        </ul>
    </div>
</div>