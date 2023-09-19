<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>মডিউল ২ এর এসাইনমেন্ট</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mb-4 m-auto">
                <div class="alert alert-success">মডিউল ২ এর এসাইনমেন্ট</div>
            </div>
        </div>
        <?php 
            include('task1.php');
            include('task2.php');
            include('task3.php');
            include('task4.php');
        ?>
    </div>

    <?php 



        // Function to calculate the nth Fibonacci number
    // function fibonacci($n) {
    //     if ($n <= 0) {
    //         return 0;
    //     } elseif ($n == 1) {
    //         return 1;
    //     } else {
    //         return fibonacci($n - 1) + fibonacci($n - 2);
    //     }
    // }

    // $count = 0;

    // for ($i = 1; $count < 10; $i++) {
    //     $fibonacciNumber = fibonacci($i);
        
    //     // Check if the Fibonacci number is greater than 100
    //     if ($fibonacciNumber > 100) {
    //         break; // Break out of the loop if it's greater than 100
    //     }
        
    //     echo $fibonacciNumber . " ";
        
    //     $count++;
    // }





    // function generateFibonacci($count) {
    //     $fibonacci = array();
        
    //     // First two Fibonacci numbers
    //     $fibonacci[0] = 0;
    //     $fibonacci[1] = 1;
        
    //     // Generate the remaining Fibonacci numbers
    //     for ($i = 2; $i < $count; $i++) {
    //         $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    //     }
        
    //     // Print the Fibonacci numbers
    //     for ($i = 0; $i < $count; $i++) {
    //         echo $fibonacci[$i] . ' ';
    //     }
    // }

    // // Call the function to print the first 15 Fibonacci numbers
    // generateFibonacci(15);

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>





