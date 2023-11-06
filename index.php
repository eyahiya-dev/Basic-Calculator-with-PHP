<?php
session_start();
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Basic Calculator with PHP</title>
</head>
<body>
  <div class="h-screen flex justify-center items-center">    
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-7 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="calculate.php" method="POST">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Simple Calculator</h5>
            <div>                
                <input type="text" name="numberOne" class="bg-gray-50 border w-full p-2.5 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Numbers" required value="<?php if(isset($_SESSION['numOne'])){echo $_SESSION['numOne'];} ?>">
            </div>
            <div>
              <select name="operation" class="text-center bg-gray-50 border w-full p-2.5 border-gray-300 text-gray-900 text-m rounded-lg focus:ring-blue-500 focus:border-blue-500 block  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                <option value="+">Addition ( + )</option>
                <option value="-">Subtraction ( - )</option>
                <option value="*">Multiplication ( * )</option>
                <option value="/">Division ( / )</option>
              </select>
            </div>
            <div>                
                <input type="text" name="numberTwo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Numbers" required value="<?php if(isset($_SESSION['numTwo'])){echo $_SESSION['numTwo'];} ?>">
            </div>            
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Calculate</button>            
        </form>
        <?php
          if(isset($_SESSION['result'])){  
        ?>
        <div class="text-sm text-center pt-10 font-medium text-gray-500 dark:text-gray-300">          
          <?php          
            echo  $_SESSION['numOne'] . $_SESSION['operation'] . $_SESSION['numTwo'] . "</br>";
           ?>
          <?php echo "</br>". $_SESSION['result']; ?>
        </div>
        <?php
          }
        ?>
    </div>    
  </div>
</body>
</html>
<?php
session_unset();
session_destroy();
?>