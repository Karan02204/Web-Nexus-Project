<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /Web-Nexus-Project/Kartavya/Login_Pages/login_page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Nexus Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/night-owl.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            hljs.highlightAll();
        });
    </script>
</head>

<body class="bg-[#020617] font-['Lexend'] selection:text-yellow-400 cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_01.png'),_auto]">

    <!-- HEADER -->
    <nav class="fixed z-[999] top-0 left-0 h-[10vh] w-screen flex items-center justify-between p-4 bg-[#020617] border-b-2 border-[#3E4B5E] max-md:p-0">
        <div class="headerStuff flex items-center space-x-3 max-md:space-x-1">
            <img src="/Web-Nexus-Project/Assets/Images/logo.svg" alt="logo" class="w-12 max-md:w-8">
            <span class="text-2xl font-bold text-white font-['Press_Start_2P'] font-black drop-shadow-[5px_5px_0px_black] max-md:text-xs hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]">Web-Nexus</span>
        </div>

        <div class="flex items-center justify-between space-x-10 max-md:space-x-4">
            <a href="/Web-Nexus-Project/Kavy/Home/Home-Page.php#vulnerabilities" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs">Vulnerabilities</a>
            <a href="/Web-Nexus-Project/Kavy/Home/Home-Page.php" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Home</a>
            <a href="/Web-Nexus-Project/Karan/About Us/contact us.php" class="headerStuff hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Contact Us</a>
        </div>

        <div class="hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] flex justify-center items-center">
            <div onclick="window.location.href='/Web-Nexus-Project/Kartavya/Login_Pages/logout.php'" class="yellowButton yellowButtonHeader hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]">
                <div class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 mr-3 rounded-md border-3 border-[rgb(221,170,16)] transition-colors duration-500">
                    <div class="font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] text-black font-thin text-sm max-md:text-[8px]">
                        <a href="/Web-Nexus-Project/Kartavya/Login_Pages/logout.php">Log Out</a>
                    </div>
                    <div class="absolute w-[105%] h-[115%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md transition-colors duration-500 -z-1 top-[1%] left-0"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- THUMBNAIL SECTION -->
    <div class="relative w-screen h-[60vh] mt-[10vh] overflow-hidden">
        <div class="absolute flex items-center justify-start h-full w-full z-10">
            <div class="flex flex-col items-start justify-center p-[10%] max-w-[50vw] max-md:max-w-full max-md:p-[5%] ">
                <h1 class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl">SQL</h1>
                <h1 class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl">Injection</h1>
                <div class="thumbnail thumbnailDescription text-white text-md mt-[10%] font-semibold drop-shadow-[2px_2px_0px_black] drop-shadow-[-2px_-2px_0px_black] max-md:text-xs">
                    A SQL injection attack consists of insertion or “injection” of a SQL query via the input data from the client to the application. 
                    A successful SQL injection exploit can read sensitive data from the database, modify database data (Insert/Update/Delete), execute administration operations on the database (such as shutdown the DBMS), 
                    recover the content of a given file present on the DBMS file system and in some cases issue commands to the operating system.
                </div>
                <div class="yellowButton yellowButtonThumbnail hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] ">
                    <div class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 rounded-md mt-10 border-3 border-[rgb(221,170,16)] transition-colors duration-500">
                        <div id="getStartedButton" class=" font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-thin text-xs">
                            Get Started
                        </div>
                        <div class="absolute w-[104%] h-[120%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md  transition-colors duration-500 -z-1 top-[1%] left-0"></div>
                    </div>
                </div>
            </div>
        </div>
        <img src="/Web-Nexus-Project/Assets/Images/SQL-Injection.gif" class="absolute object-cover w-full h-full opacity-[0.6]" alt="">
    </div>

    <!-- DROPDOWN SECTION -->
    <div id="dropdownSection" class="w-full h-auto mt-[8vh] px-[10vw]">
        <div class="flex flex-col items-center justify-center w-full h-full border-3 border-[#3E4B5E] rounded-md p-[2%]">
            <!-- DROPDOWN 1 -->
            <details class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
                <summary class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">1</div>
                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        SQL Injection Page
                    </div>
                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" fill="#94A3B8"></path>
                        </svg>
                    </span>
                </summary>
                <div id="content1" class="p-10 flex items-center justify-start h-full  transition-all duration-500">
                    <div class="flex flex-row items-center justify-between space-x-10 py-10 ">
                        <div class="text-gray-400 max-w-[50%] p-5 text-xl max-sm:text-xs"><span class="font-bold text-blue-300">SQL Injection</span> 
                            is a common web security vulnerability that occurs when an application allows users to insert malicious SQL code into a query. 
                            This happens due to improper input validation, allowing attackers to manipulate the database by bypassing authentication, retrieving, modifying, or deleting data. 
                            Vulnerabilities often arise when user input is directly included in SQL statements without proper sanitization, 
                            making it possible to execute unintended queries and gain unauthorized access to sensitive information.
                        </div>
                        <!-- BUTTON -->
                        <div onclick="window.location.href='Sql-injection-Vulnerable.php'" class="yellowButton yellowButtonVulnerable  hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] h-full py-10 w-full relative z-[100] max-w-[50%]">
                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">
                                <img src="/Web-Nexus-Project/Assets/Images/playButton.png" class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]" alt="Image 1">
                                <div class="flex flex-col items-center justify-center">
                                    <div class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Simulate 
                                    </div>
                                    <div class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Vulnerability
                                    </div>
                                </div>
                            </div>
                            <div class="absolute w-full h-full  bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl  transition-colors duration-500 z-[1] top-0 left-0"></div>
                            <div class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]"></div>
                        </div>
                    </div>
                    <!-- <p class="mt-2 text-gray-600">This is the hidden content that appears when you click.</p>
                    <button onclick="window.location.href='Sql-Injection-Trial.php'">vuln</button> -->
                </div>

                <!-- GIF -->
                <img src="/Web-Nexus-Project/Assets/Images/terminalAndRobo.gif" class="-mt-25" alt="gif">
                <div class="bulletPoints p-15">
                    <p class="bulletPointTitle text-[#93C5FD] text-2xl font-bold mb-10">The application might be vulnerable if the application is:</p>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Failing to properly validate or sanitize user inputs before including them in SQL queries.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl font-['Lexend']">Constructing SQL queries dynamically using string concatenation with user-supplied input.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Allowing user input directly in the query structure, such as in the WHERE, ORDER BY, or SELECT clauses.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Using outdated or vulnerable database drivers or frameworks that do not support secure query methods like prepared statements or ORM protections.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Not employing parameterized queries or stored procedures for database interactions.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Displaying database error messages or SQL syntax errors in the application responses.</p>
                    </div>
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="/Web-Nexus-Project/Assets//Images/diamond.png" alt="gif">
                        <p class="text-gray-400  text-xl">Allowing access to multiple database accounts with excessive privileges instead of following the principle of least privilege.</p>
                    </div>
                </div>
            </details>

            <!-- DROPDOWN 2 -->
            <details class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
                <summary class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">2</div>
                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        SQL Injection Prevention
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" fill="#94A3B8"></path>
                        </svg>
                    </span>
                </summary>

                <div id="content2" class="p-20 h-full overflow-hidden transition-all duration-500">

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        <div class="flex items-center justify-between w-full">
                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Use Parameterized Queries</p>
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                            </div>
                        </div>
                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                            <code class="rounded-md text-sm font-mono w-full h-full">
                                // SECURE: Prepared statements with bound parameters
                                $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
                                $stmt->execute(['email' => $userInputEmail]);
                                $user = $stmt->fetch();
                            </code>
                        </pre>
                    </div>

                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">
                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">
                        <p class="preventionDescription mt-2 text-gray-600 italic">Switching to parameterized queries ensures that user input is never directly concatenated into SQL. Instead, placeholders are used and values are bound separately, completely preventing injection attempts.</p>
                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        <div class="flex items-center justify-between w-full">
                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Employ ORM or Stored Procedures</p>
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                            </div>
                        </div>
                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                            <code class="rounded-md text-sm font-mono w-full h-full">
                                // SECURE: Use ORM methods or stored procedures
                                // E.g., with an ORM:
                                $user = User::where('email', $userInputEmail)->first();
                                // Or a stored procedure:
                                CALL GetUserByEmail(?);
                            </code>
                        </pre>
                    </div>

                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">
                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">
                        <p class="preventionDescription mt-2 text-gray-600 italic">Leveraging an ORM abstracts raw SQL away, automatically handling escaping. Stored procedures further encapsulate logic on the database side, limiting dynamic query construction in application code.</p>
                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        <div class="flex items-center justify-between w-full">
                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Validate and Sanitize Inputs</p>
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                            </div>
                        </div>
                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                            <code class="rounded-md text-sm font-mono w-full h-full">
                                // SECURE: Whitelist validation before database use
                                if (!filter_var($userInputEmail, FILTER_VALIDATE_EMAIL)) {
                                    die('Invalid email format');
                                }
                                // Then use parameterized query
                            </code>
                        </pre>
                    </div>

                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">
                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">
                        <p class="preventionDescription mt-2 text-gray-600 italic">Always validate input against expected patterns (e.g., email format) before it reaches the database layer. This reduces the attack surface by rejecting malformed or malicious data early.</p>
                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">    
                        <div class="flex items-center justify-between w-full">
                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Principle of Least Privilege</p>
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                            </div>
                        </div>
                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                            <code class="rounded-md text-sm font-mono w-full h-full">
                                -- SECURE: Grant only needed privileges
                                CREATE USER 'app_user'@'%' IDENTIFIED BY 'strongPass';
                                GRANT SELECT, INSERT, UPDATE ON mydb.* TO 'app_user'@'%';
                                FLUSH PRIVILEGES;
                            </code>
                        </pre>
                    </div>

                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">
                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">
                        <p class="preventionDescription mt-2 text-gray-600 italic">Limit the database account used by your application to only the operations it needs (e.g., no DROP or ALTER). Even if an injection occurs, damage is contained by restricted privileges.</p>
                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">    
                        <div class="flex items-center justify-between w-full">
                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Centralized Error Handling</p>
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                            </div>
                        </div>
                        <pre class="whitespace-pre-wrap flex items-center w-full h-full">
                            <code class="rounded-md text-sm font-mono w-full h-full">
                                // SECURE: Do not expose SQL errors to users
                                try {
                                    // database operation
                                } catch (PDOException $e) {
                                    error_log($e->getMessage());
                                    showGenericError();
                                }
                            </code>
                        </pre>
                    </div>

                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">
                        <img src="/Web-Nexus-Project/Assets/Images/robot.gif" class="h-16 w-auto" alt="">
                        <p class="preventionDescription mt-2 text-gray-600 italic">Log detailed errors server‑side but present only generic messages to users. This prevents attackers from learning database schema or query structure.</p>
                    </div>

                </div>
            </details>


            <!-- DROPDOWN 3 -->
            <details id="dropdown3" class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
                <summary class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center  rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">3</div>
                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        SQL Injection Secure Page
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" fill="#94A3B8"></path>
                        </svg>
                    </span>
                </summary>
                <div id="content3" class=" transition-all duration-500 p-20">
                
                    <!-- SPEECH BUBBLE -->
                    <div class="relative h-25">
                        <div class="absolute bottom-0 left-0 translate-y-1/2 translate-x-[50%] rotate-45 w-16 h-16  border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]"></div>
                        <div class="absolute p-5 text-white font-['Press_Start_2P'] text-xl font-thin  left-0 w-full h-full border-3 rounded-md border-[#3E4B5E] bg-[#1E293B]">
                            <p class="popupText popupText1 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs">BEEP BEEP BOOP BOOP!</p>
                            <p class="popupText popupText2 drop-shadow-[5px_5px_0px_#020617] max-md:text-xs">Let's simulate the secure one now!</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-12">

                        <!-- MASCOT -->
                        <img src="/Web-Nexus-Project/Assets/Images/mascot.gif" class="max-w-[50%] w-100 h-auto" alt="mascot">

                        <!-- BUTTON -->
                        <div onclick="window.location.href='Sql-injection-secure.php'" class="yellowButton yellowButtonSecure hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer]  h-full py-10 w-full relative z-[100] max-w-[50%]">
                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">
                                <img src="/Web-Nexus-Project/Assets/Images/playButton.png" class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]" alt="Image 1">
                                <div class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] flex flex-col items-center justify-center">
                                    <div class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Simulate 
                                    </div>
                                    <div class="z-[100] font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-black text-2xl max-md:text-sm max-sm:text-xs">
                                        Secure Version
                                    </div>
                                </div>
                            </div>
                            <div class="absolute w-full h-full  bg-yellow-300 hover:bg-yellow-600 border-3 border-[rgb(221,170,16)] rounded-xl  transition-colors duration-500 z-[1] top-0 left-0"></div>
                            <div class="absolute w-[100%] h-[100%] bg-[rgb(221,170,16)] hover:bg-yellow-600 transition-colors duration-500 rounded-xl z-[0] top-[2%] left-[0.7%]"></div>
                        </div>
                    </div>
                </div>
            </details>
        </div>
    </div>

    <!-- FOOTER SECTION -->
    <footer class="bg-gray-950 text-white py-16 mt-16">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
            <div>
                <img src="/Web-Nexus-Project/Assets/Images/logo.svg" alt="Web-Nexus Logo" class="w-24 mx-auto md:mx-0">
                <p class="mt-4 text-gray-400">Learn security the hands-on-way.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Company</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="/Web-Nexus-Project/Karan/About Us/contact us.php" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Careers</a></li>
                    <li><a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Support</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="/Web-Nexus-Project/Karan/About Us/contact us.php" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Help Center</a></li>
                    <li><a href="/Web-Nexus-Project/Karan/About Us/contact us.php" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Follow Us</h3>
                <div class="mt-4 flex justify-center md:justify-start space-x-4">
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/github.png" alt="Github" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/LinkedIn.jpg" alt="Linkedin" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('/Web-Nexus-Project/Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="/Web-Nexus-Project/Assets/Images/twitter.jpg" alt="Twitter" class="w-8">
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center text-gray-500">
            &copy; 2025 Web-Nexus. All Rights Reserved.
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js" integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js" integrity="sha512-AcqPGqrrAEtEwe+ADO5R8RbdFi7tuU7b/A2cJJH0Im0D18NRk5p5s4B3E5PMuO81KFw0ClN7J5SHVUJz7KOb0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/Web-Nexus-Project/Malay/Animations/vulnerabilityPageAnimation.js"></script>

</body>
</html>