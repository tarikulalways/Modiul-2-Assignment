<div class="row">
    <div class="col-md-6 m-auto mb-3">
        <div class="alert alert-success">Task 3: Break on Condition</div>
        <ul class="list-group">
                <li class="list-group-item"><span class="fw-bold">For Loop:</span>
                <?php
                    $first = 0;
                    $second = 1;
                    $count = 0;

                    while ($count < 10) {
                        $next = $first + $second;
                        if ($next > 100) {
                            break;
                        }
                        echo $next . " ";

                        $first = $second;
                        $second = $next;

                        $count++;
                    }
                ?>
            </li>
        </ul>
    </div>
</div>