<?php
error_reporting(E_ALL ^ E_WARNING);
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT'] . "../CED312/auth/auth.php";

use App\model\user;
use App\model\Mform;

$userObj = new user;
$formObj = new Mform;

$user=$userObj->getuser($_SESSION['user_id']);
foreach ($user as $user) {};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="../dist/output.css">
</head>
<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/CED312/Index/navbar.php";?>
    <?php 
        include("navbar.php");
    ?>
    <main class="bg-blue-100 h-full">
        <div class="container mx-auto w-auto mt-6">
            <div class="bg-white shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2">
                        <img class="w-32 h-32 rounded-full mx-auto" src="../img/logo.png"">
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl text-gray-900 font-medium leading-8"><?php echo "{$_SESSION['user_sname']} {$_SESSION['user_lname']}" ;?></h3>
                        <div class="text-center text-gray-400 text-xs font-semibold mb-6">
                            <p><?php echo "{$_SESSION['user_tier']}" ;?></p>
                        </div>
                        <!-- ?????????????????????????????? -->
                        <div class="flex justify-between px-5">
                            <!-- ???????????????????????????????????????????????? -->
                            <div class="flex items-end">
                                <?php 
                                    if ($_SESSION['user_tier']=='student'){
                                        echo '<p class="px-2 py-2 text-gray-500 font-semibold">??????????????????????????????????????????????????????</p>';
                                    }
                                ?>
                                <!-- ??????????????? -->
                                <p class="px-2 py-2 text-gray-500 font-semibold">???????????????????????????????????? : </p>
                                <p class="px-2 py-2 text-blue-600"><?php echo $user['Class'] ;?></</p>
                            </div>
                            <!-- ????????????????????????????????? -->
                            <?php 
                                    if ($_SESSION['user_tier']=='student'){
                                        echo '<div class="flex items-end">
                                                <p class="px-2 py-2 text-gray-500 font-semibold">????????????????????? : </p>
                                                <p class="px-2 py-2 "><?php echo $user["Subject"] ;?></p>
                                            </div>';
                                    }
                                ?>

                            
                            <!-- ??????????????? -->
                            <div class="flex items-end">
                                <p class="px-2 py-2 text-gray-500 font-semibold">Email : </p>
                                <p class="px-2 py-2 text-blue-600"><?php echo $user['email'] ;?></p>
                            </div>
                            <!-- ???????????????????????? -->
                            <div class="flex items-end">
                                <p class="px-2 py-2 text-gray-500 font-semibold">Tel : </p>
                                <p class="px-2 py-2 text-blue-600"><?php echo $user['tell'] ;?></p>
                            </div>
                        </div>

                </div>
            </div>
            
        </div>
        <div class="container mx-auto w-auto mt-3 bg-gray-100 p-5 rounded-lg">
            <h1 class="text-center text-4xl kanit"><b>?????????????????????????????????????????????</b> </h1>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg m-3">
                <div class="flex justify-between items-center pb-4">
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                            <svg class="mr-2 w-4 h-4 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path></svg>
                            ???????????????????????????????????????
                            <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio" class="hidden z-10 w-48 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="filter-radio-example-1" class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-2" class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-3" class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-4" class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <input id="filter-radio-example-5" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                        <label for="filter-radio-example-5" class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="table-search" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ????????????????????????????????????
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ???????????????????????????????????????
                            </th>
                            <th scope="col" class="py-3 px-6 text-center">
                                ?????????????????????????????????????????????????????????
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ??????????????????????????????
                            </th>
                            <th scope="col" class="py-3 px-6">
                                ??????????????????
                            </th>
                            <th scope="col" class="py-3 px-6">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // if ($_SESSION['user_tier'] == 'Admin') {
                            //     // $form = $formObj->getformadmin();
                            // } else {
                            //     $form = $formObj->getform($_SESSION['user_id']);
                            // }
                            $form = $formObj->getform($_SESSION['user_id']);
                            foreach ($form as $fom) {
                                $n++;
                                        echo "
                                <tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600'>
                                    <td class='py-4 px-6 '>{$n}</td>
                                            ";
                                echo "
                                    <th scope='row' class='py-4 px-6 font-medium text-gray-900 whitespace-nowrap'>{$fom['lp_name']}</th>
                                    <td class='py-4 px-6 '>{$fom['lp_info']}</td>
                                    <td class='py-4 px-6 '><span class='bg-green-200 text-green-6 py-1 px-3 rounded-full text-xs'><a href='{$fom['lp_file_id']}' download='{$ac['file']}'>?????????????????????????????????</a></span></td>
                                    <td class='py-4 px-6'>
                                        <a href='./form-pan.php?id={$fom['lp_id']}&action=edit' class='font-medium text-blue-600 hover:underline'>???????????????</a>
                                    </td>
                                    <td class='py-4 px-6'>
                                        <a href='./saveform.php?id={$fom['lp_id']}&action=delete' class='font-medium text-blue-600 hover:underline'>??????</a>
                                    </td>
                                </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
                <div class="px-4 py-3 text-right sm:px-0 bg-slate-100">
                <a href="../Index/main_menu.php" class="mr-3 hover:-translate-y-1 duration-300 hover:scale-100 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none ">Cancel</a>
                </div>
            </div>
        </div>

    </main>
    <?php 
        include("footer.php");
    ?>

    
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
