<?php
function s(){
    for ($i = 1; $i <= 50; $i++) {
        // Check if $i is a multiple of 5
        if ($i % 5 == 0) {
            // Skip this iteration and continue to the next number
            continue;
        }
        return $i." ";
    }
}


?>



<div class="row">
    <div class="col-md-6 m-auto mb-3">
        <div class="alert alert-success">Task 2: Skip Multiples of 5</div>
        <ul class="list-group">
            <li class="list-group-item"><span class="fw-bold">For Loop:</span> 
               <?php 
                    for ($i = 1; $i <= 50; $i++) {
                        if ($i == 5) {
                            continue;
                        }
                        echo $i." ";
                    }
               ?>                
            </li>
        </ul>
    </div>
</div>