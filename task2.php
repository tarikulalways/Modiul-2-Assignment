<?php
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
