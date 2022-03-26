<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Income Statements</title>
    <link rel="shortcut icon" type="image/x-icon" href="" /> <!-- Icon for Website -->
    <!-- tailwind CSS -->
    <link rel="stylesheet" href="build/styles.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>

<!-- Script/s -->
<script>
    $(document).ready(function() {
        // FOR DEBUGGING Purposes
        var debug = false;
        var IsTriggered = false;

        if (debug == true) {
            $("#btn-1").click(function() {
                if (IsTriggered == false) {
                    $("*").addClass("border border-black");
                    IsTriggered = true;
                } else if (IsTriggered == true) {
                    $("*").removeClass("border border-black");
                    IsTriggered = false;
                }
            })
        } else {
            $("#dev-bar").hide();
        }
    });
</script>

<?php
// Session store data
session_start();
?>

<!-- BODY -->

<body>
    <!-- banner -->
    <div class="w-full h-24 md:h-72 bg-no-repeat bg-center bg-cover bg-blue-600" style="background-image:url(banner/Blue_Income-Statement_Banner_no-words.png);">
        <div class="text-center flex-row">
            <p class="text-white py-8 md:py-24 text-xl md:text-7xl font-semibold italic">👛 Income Statement </p>
            <p class="text-white text-xs md:text-sm -mt-5 md:-mt-1 font-semibold italic">by Michael Jacob M. Delos Santos 
            <a class="bg-blue-500 text-blue-900 hover:text-white transition duration-150 py-1 md:px-2 text-xs md:text-sm truncate no-underline shadow rounded-full" href="https://tailwindcss.com/"> in TailwindCSS~</a>
            </p>
        </div>
    </div>
    <div class="mx-5 md:mx-10">
        <div class="flex flex-row position-relative -mt-3 md:-mt-7 md:text-6xl">
            <p>💰</p>
        </div>
        <div class="flex flex-row justify-start text-md my-0.5 font-bold md:my-5 md:text-4xl">
            <h1 class="font-bold text-blue-500">Income Statements</h1>
        </div>
    </div>

    <!-- Input the Time, Inventory and Service -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="grid justify-center mx-1 md:mx-12 xl:mx-60 transition-all duration-500 ease-in-out">

            <!-- Row 1: Time Annually or Monthly -->
            <div class="flex-row">
                <div class="p-10 my-2 bg-gray-100 shadow-md rounded">
                    <div class="grid gap-2 w-full">
                        <div>
                            <span class="bg-white bg-gradient-to-r from-blue-400 to-blue-300 rounded py-1 px-2 text-white font-semibold">⏰ Time:</span>
                        </div>
                        <div class="w-full">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="time" name="time" step="any" min="0" placeholder="How many months are you planning to run the store?">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Input Inventory & Service -->
            <div class="flex-row font-mono">
                <div class="grid grid-cols-2 gap-0.5 lg:gap-2 m-1">
                    <!-- 1st Box: Inventory -->
                    <div class="flex-col w-full bg-gray-600 rounded-t-lg rounded-b">
                        <div class="py-2 px-3 bg-gradient-to-r from-blue-400 to-blue-300 rounded-t font-bold uppercase text-lg text-white">
                            <p>📦 Inventory</p>
                        </div>
                        <!-- Inner Column -->
                        <div class="grid grid-cols-2 gap-0.5 lg:gap-4 justify-center p-0.5 lg:p-2 text-xs lg:text-md">
                            <!-- 1st Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal italic p-2 rounded">Product's Name:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inventory-name" name="p-name" type="text" placeholder="product name">
                                </div>
                            </div>

                            <!-- 2nd Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal p-2 rounded italic">Product's Price:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inventory-price" name="p-price" type="number" min="0" step="any" placeholder="product price">
                                </div>
                            </div>

                            <!-- 3rd Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal italic p-2 rounded">Amount of Products:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inventory-amount" name="p-amount" type="number" min="0" placeholder="amount of products">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2nd Box: Services -->
                    <div class="flex-col w-full bg-gray-600 rounded-t-lg rounded-b">
                        <div class="py-2 px-3 bg-gradient-to-r from-blue-400 to-blue-300 rounded-t font-bold uppercase text-lg text-white">
                            <p class="">⚒ Services:</p>
                        </div>
                        <!-- Inner Column -->
                        <div class="grid grid-cols-2 gap-0.5 lg:gap-4 justify-center p-0.5 lg:p-2 text-xs lg:text-md">
                            <!-- 1st Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal italic p-2 rounded">Service Name:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service-name" name="s-name" type="text" placeholder="service name">
                                </div>
                            </div>

                            <!-- 2nd Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal italic p-2 rounded">Service Price/Fee:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service-price" name="s-price" type="number" min="0" step="any" placeholder="service price">
                                </div>
                            </div>

                            <!-- 3rd Row -->
                            <div class="flex-row rounded w-full px-1 py-4 lg:p-5 bg-white">
                                <p class="bg-gray-200 break-normal italic p-2 rounded">Times Workers Labored:</p>
                            </div>
                            <div class="flex-row rounded w-full py-5 px-2 bg-white">
                                <div class="flex-row rounded w-full">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="service-amount" name="s-amount" type="number" min="0" placeholder="amount of services">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Function Buttons that affects the lists -->
            <div class="grid justify-center transition-all duration-500 ease-in-out grid-cols-2 gap-4 flex-row">
                <input class="text-center px-2 py-0.5 bg-blue-300 transition-all duration-500 hover:bg-green-500" type="submit" name=submit[AddToList] value='Add to list'>
                <div class="grid grid-cols-3 gap-4 justify-center w-full">
                    <input class="text-center px-2 py-0.5 bg-red-300 transition-all ease-out duration-150 hover:bg-red-400" type="submit" name=submit[ClearAllList] value='Clear All List'>
                    <input class="text-center px-2 py-0.5 bg-red-300 transition-all ease-out duration-150 hover:bg-red-400" type="submit" name=submit[ClearInventList] value='Clear Invetory List'>
                    <input class="text-center px-2 py-0.5 bg-red-300 transition-all ease-out duration-150 hover:bg-red-400" type="submit" name=submit[ClearServiceList] value='Clear Services List'>
                </div>
            </div>
        </div>

    </form>

    <!-- Collecting Variables and putting in $_POST['name'] SCRIPT -->
    <?php
        // Functions
        function IsNullOrEmpty($intOrString)
        {
            if ((is_null($intOrString)) || (empty($intOrString))) {
                return true;
            } else {
                return false;
            }
        }

        // Initialization of Array
        if (!isset($_SESSION["listOfInventories"])) {
            $_SESSION["listOfInventories"] = array();
        } 
        if (!isset($_SESSION["listOfServices"])) {
            $_SESSION["listOfServices"] = array();
        }
        if (!isset($time)){
            $time = 0;
        }

        
        if (isset($_POST["submit"])) { // Checks if user clicked btn.
            //Initialization of Variables
            $sub = $_POST["submit"];
            $time = $_POST["time"];
        
            $pName = $_POST["p-name"];
            $pPrice = $_POST["p-price"];
            $AmountOfProducts = $_POST["p-amount"];
        
            $sName = $_POST["s-name"];
            $sPrice = $_POST["s-price"];
            $TimesWorkersLabored = $_POST["s-amount"];



            // Adding and Clearing of Arrays;
            if (isset($sub["AddToList"])) {

                // Check Variable's Value
                $isInventoryDataEmpty = false;
                $isServiceDataEmpty = false;

                echo "<div class='grid justify-center py-2 mt-2 w-auto delay-100'>";
                if (IsNullOrEmpty($time) || $time <= 0){
                    echo "<span class='p-2 bg-yellow-300'> <p class='my-1'> IMPORTANT:  Amount of <span class='mx-2 ring ring-yellow-400 bg-white py-1 px-2 rounded-md text-sm'>Months ⏳</span> <i class='text-red-500 italic'> missing </i> or <i class='text-red-500 italic'> less than or equal to 0</i>.</p> </span>";
                    $isInventoryDataEmpty = true;
                    $isServiceDataEmpty  = true;
                }
                if (IsNullOrEmpty($pName)) {
                    echo "<p class='my-1'> Product must have name or leave <span class='bg-gray-300 py-1 px-2 rounded-md text-sm text-gray-500'><span class='border px-2 border-black rounded'>spacebar</span></span> . </p>";
                    $pName = "";
                    $isInventoryDataEmpty = true;
                } 
                if (IsNullOrEmpty($pPrice)) {
                    echo "<p class='my-1'> Product must have <span class='bg-red-500 py-1 px-2 rounded-md text-sm text-white'>price</span> . </p>";
                    $pPrice = 0;
                    $isInventoryDataEmpty = true;
                }
                if (IsNullOrEmpty($AmountOfProducts)) {
                    echo "<p class='my-1'> Product must have <span class='bg-red-500 py-1 px-2 rounded-md text-sm text-white'>quantity</span> . </p>";
                    $AmountOfProducts = 0;
                    $isInventoryDataEmpty = true;
                }

                if (IsNullOrEmpty($sName)) {
                    echo "<p class='my-1'> Service must have name or leave <span class='bg-gray-300 py-1 px-2 rounded-md text-sm text-gray-500'><span class='border px-2 border-black rounded'>spacebar</span></span> . </p>";
                    $sName = "";
                    $isServiceDataEmpty  = true;
                } 
                if (IsNullOrEmpty($sPrice)) {
                    echo "<p class='my-1'> Service must have <span class='bg-red-500 py-1 px-2 rounded-md text-sm text-white'>price</span> . </p>";
                    $sName = 0;
                    $isServiceDataEmpty  = true;
                } 
                if (IsNullOrEmpty($TimesWorkersLabored)) {
                    echo "<p class='my-1'> Service must have <span class='bg-red-500 py-1 px-2 rounded-md text-sm text-white'>quantity</span> . </p>";
                    $TimesWorkersLabored = 0;
                    $isServiceDataEmpty  = true;
                }
                echo "</div>";
                
                // isInventoryDataEmpty && isServiceDataEmpty
                echo "<div class='grid justify-center m-2 w-auto bg-green-400 font-bold text-gray-100'>";
                if ($isInventoryDataEmpty == false) {
                    array_push($_SESSION["listOfInventories"], array($pName, $pPrice, $AmountOfProducts));
                } 
                if ($isServiceDataEmpty == false) {
                    array_push($_SESSION["listOfServices"], array($sName, $sPrice, $TimesWorkersLabored));
                }
                // Echo Success
                if ($isInventoryDataEmpty == false || $isServiceDataEmpty == false){
                    echo "<p class='py-2 m-2'> Added to list </p>";
                } 
                echo "</div>";

                //Resetting the Boolean for Checking Variables
                $isServiceDataEmpty = true;
            } elseif (isset($sub["ClearAllList"])) {
                // Claer All
                $_SESSION["listOfInventories"] = [];
                $_SESSION["listOfServices"] = [];
            } elseif (isset($sub["ClearInventList"])) {
                // Clear List of Inventories
                $_SESSION["listOfInventories"] = [];
            } elseif (isset($sub["ClearServiceList"])) {
                // Clear List of Services
                $_SESSION["listOfServices"] = [];
            }
        }
    ?>



    <!-- Displaying of Items & Services in the Lists -->
    <div class="justify-center mx-1 my-2 md:mx-12 xl:mx-60 transition-all duration-500 ease-in-out">
        <div class="text-center mx-2 my-2">
            <h1> Lists: </h1>
        </div>

        <!-- Lists -->
        <div class="grid grid-cols-2 gap-2">
            <!-- Inventory List -->
            <div class="bg-gray-500 w-auto lg:w-full rounded-t">
                <p class="bg-gradient-to-r from-blue-400 to-blue-300 text-center font-semibold py-2 lg:px-20 rounded-t"> 📦 List of Inventory: <?php echo count($_SESSION['listOfInventories']); ?> </p>

                <!-- Inner Column -->
                <div class="h-72 overflow-y-scroll overflow-x-hidden">

                    <!-- Output List of Inventories -->
                    <?php
                    if (isset($_POST["submit"])) { // Checks if user clicked btn.
                        $sub = $_POST["submit"];

                        foreach ($_SESSION["listOfInventories"] as $product) {
                            echo "
                                    <!-- Product Box -->
                                    <div class='bg-gray-100 m-6 mx-10 shadow-2xl rounded rounded-t-md transition ease-out duration-150 transform hover:rotate-1 hover:scale-105'>
                                        <div class='bg-blue-500 relative py-4 px-2 rounded-t' id='inventory-1'>
                                            <span class='bg-blue-400 shadow px-2 p-2 absolute transform -translate-x-7 -translate-y-7 text-lg font-bold rounded-full'>
                                                <p class='text-center px-2'> $product[2] </p> 
                                            </span>
                                        </div>
                                        <div class='grid grid-cols-1 transition duration-500 ease-in md:grid-cols-2 rounded'>
                                            <div class='p-10 md:rounded-bl overflow-ellipsis'>
                                                <p> <span class='font-bold'> Product Name: </span> $product[0] </p>
                                                <br>
                                                <p> <span class='font-bold'> Product Price: </span> PHP $product[1] </p>
                        
                                            </div>
                                            <div class='bg-blue-200 rounded-b md:rounded-br'>
                                                <p class='p-10 flex justify-center text-center'>Image</p>
                                            </div>
                                        </div>
                                    </div>
                                ";

                            if (count($_SESSION['listOfInventories']) > 1) {
                                echo "
                                        <!-- Divider -->
                                        <div class='px-8 py-4'>
                                            <hr class='border border-opacity-50'>
                                        </div>
                                    ";
                            }
                        }
                    }
                    ?>

                </div>

            </div>

            <!-- Services List -->
            <div class="bg-gray-500 w-full rounded-t">
                <p class="bg-gradient-to-r from-red-400 to-red-300 text-center font-semibold py-2 lg:px-20 rounded-t"> ⚒ List of Services: <?php echo count($_SESSION['listOfServices']); ?> </p>

                <!-- Inner Column -->
                <div class="h-72 overflow-y-scroll overflow-x-hidden">

                    <!-- Output List of Inventories -->
                    <?php
                    if (isset($_POST["submit"])) { // Checks if user clicked btn.
                        $sub = $_POST["submit"];
                        foreach ($_SESSION["listOfServices"] as $service) {

                            echo "
                                    <!-- Service Box -->
                                    <div class='bg-gray-100 m-6 mx-10 shadow-2xl rounded rounded-t-md transition ease-out duration-150 transform hover:rotate-1 hover:scale-105'>
                                        <div class='bg-red-500 relative py-4 px-2 rounded-t' id='inventory-1'>
                                            <span class='bg-red-400 shadow px-2 p-2 absolute transform -translate-x-7 -translate-y-7 text-lg font-bold rounded-full'>
                                                <p class='text-center px-1.5'> $service[2] </p> 
                                            </span>
                                        </div>
                                        <div class='grid grid-cols-1 transition duration-500 ease-in md:grid-cols-2 rounded'>
                                            <div class='p-10 md:rounded-bl overflow-ellipsis'>
                                                <p> <span class='font-bold'> Service Name: </span> $service[0] </p>
                                                <br>
                                                <p> <span class='font-bold'> Service Price: </span> PHP$service[1] </p>
                        
                                            </div>
                                            <div class='bg-blue-200 rounded-b md:rounded-br'>
                                                <p class='p-10 flex justify-center text-center'>Image</p>
                                            </div>
                                        </div>
                                    </div>
                                ";

                            if (count($_SESSION['listOfServices']) > 1) {
                                echo "
                                        <!-- Divider -->
                                        <div class='px-8 py-4'>
                                            <hr class='border border-opacity-50'>
                                        </div>
                                    ";
                            }
                        }
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>

    <!-- Getting Total Revenue -->
    <div class="w-auto bg-white shadow my-10 mx-1 lg:mx-20 mb-12">
        <div class='w-full p-2 bg-green-500 rounded-t'>
            <p class="font-semibold italic"> 📃 Results: </p>
        </div>

        <div class="w-auto m-2 relative rounded">
            <div>
                <p class="bg-gradient-to-r from-blue-500 via-green-400 to-red-400 py-2 px-1 text-transparent bg-clip-text shadow rounded-xl">Variables
                </p>

                <?php
                $sumOfInventories = 0;
                $sumOfServices = 0;

                // Gather the data of sumOfInventories & sumOfServices
                foreach ($_SESSION['listOfInventories'] as $product) {
                    $product[1] = $product[1] / 1;
                    $product[2] = $product[2] / 1;
                    $itemSale = ($product[1] * $product[2]) * $time;
                    $sumOfInventories = $sumOfInventories + $itemSale;
                }
                foreach ($_SESSION['listOfServices'] as $service) {
                    $service[1] = $service[1] / 1;
                    $service[2] = $service[2] / 1;
                    $serviceSale = ($service[1] * $service[2]) * $time;
                    $sumOfServices = $sumOfServices + $serviceSale;
                }
                
                print "#OfMonths: " . $time . "<br>";
                print "Item Summary: " . $sumOfInventories . "<br>";
                print "Services Summary: " . $sumOfServices . "<br>";
                ?>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-2 p-10 m-2 text-xs md:text-md bg-white shadow rounded-md">


            <!-- Sum of Inventories -->
            <div >
                <p> 📦 inventory: </p>
                <?php
                    $i = 1;
                    foreach ($_SESSION["listOfInventories"] as $product) {
                        //multiply product's price x amount
                        $product[1] = $product[1] / 1;
                        $product[2] = $product[2] / 1;
                        $itemSale = ($product[1] * $product[2]) * $time;
                        print "$i.) Item Name: $product[0] | Investment: $itemSale <br>";
                        $i++;

                        $sumOfInventories = $sumOfInventories + $itemSale;
                    }
                ?>
                <br>
            </div>

            <!-- Sum of Services -->
            <div>
                <p> ⚒ service: </p>
                <?php
                    $i = 1;
                    foreach ($_SESSION["listOfServices"] as $service) {
                        //Divide by 1 if there's any decimals
                        $service[1] = $service[1] / 1;
                        $service[2] = $service[2] / 1;

                        //Multiply by "price" times "amount of products" times "time"
                        $serviceSale = ($service[1] * $service[2]) * $time;
                        print "$i.) Service Name: $service[0] | Investment: $serviceSale <br>";
                        $i++;

                        $sumOfServices = $sumOfServices + $serviceSale;
                    }
                ?>
            </div>

            <!-- Total Revenue -->
            <div>
                <p> 💲 Total Revenue: </p>
                <?php
                $totalRevenue = $sumOfInventories + $sumOfServices;
                echo "PHP " . $totalRevenue;
                ?>
            </div>
        </div>



    </div>
    
    <!-- DevTools -->
    <div class="h-4 md:h-10 flex justify-center bg-gray-600 fixed bottom-0 w-full" id="dev-bar">
        <p> DevTools </p>
        <button id="btn-1">Click to add borders</button>
    </div>



</body>

</html>