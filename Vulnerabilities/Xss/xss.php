<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../../Login_Pages/login_page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
     <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Highlight.js CSS for syntax highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/night-owl.min.css">

    <!-- Highlight.js script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        hljs.highlightAll();
        });
    </script>

</head>
<body class="bg-[#020617] font-['Lexend'] selection:text-yellow-400 cursor-[url('../../Assets/Images/cursor_01.png'),_auto]">
    
    <!-- HEADER -->
    <nav class="fixed z-[999] top-0 left-0 h-[10vh] w-screen flex items-center justify-between p-4 bg-[#020617] border-b-2 border-[#3E4B5E] max-md:p-0">
        <div class="headerStuff flex items-center space-x-3 max-md:space-x-1">
            <img src="../../Assets/Images/logo.svg" alt="logo" class="w-12 max-md:w-8">
            <span class="text-2xl font-bold text-white font-['Press_Start_2P'] font-black drop-shadow-[5px_5px_0px_black] max-md:text-xs hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer]">Web-Nexus</span>
        </div>

        <div class="flex items-center justify-between space-x-10 max-md:space-x-4">
            <a href="../../index.php#vulnerabilities" class="headerStuff hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs">Vulnerabilities</a>
            <a href="../../index.php" class="headerStuff hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Home</a>
            <a href="../../About Us/contact us.php" class="headerStuff hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs max-md:hidden">Contact Us</a>
        </div>

        <div class="hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] flex justify-center items-center">
            <div onclick="window.location.href='../../Login_Pages/logout.php'" class="yellowButton yellowButtonHeader hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer]">
                <div class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 mr-3 rounded-md border-3 border-[rgb(221,170,16)] transition-colors duration-500">
                    <div class="font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] text-black font-thin text-sm max-md:text-[8px]">
                        <a href="../../Login_Pages/logout.php">Log Out</a>
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
                
                <h1 class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl">Cross Site Scripting (XSS)</h1>
                <!-- <h1 class="thumbnail thumbnailTitle text-white text-4xl font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] font-['Press_Start_2P'] max-md:text-2xl"></h1> -->
                
                <div class="thumbnail thumbnailDescription text-white text-md mt-[10%] font-semibold drop-shadow-[2px_2px_0px_black] drop-shadow-[-2px_-2px_0px_black] max-md:text-xs">XSS (Cross-Site Scripting) is a type of web security vulnerability that allows attackers to inject malicious scripts into websites viewed by other users. It occurs when a website doesn't properly sanitize user inputs, enabling attackers to execute scripts in a victim's browser.</div>
                <div id="getStartedButton" class="yellowButton yellowButtonThumbnail hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] ">
                    <div class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 rounded-md mt-10 border-3 border-[rgb(221,170,16)] transition-colors duration-500">
                        
                        <div class=" font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-thin text-xs">
                            Get Started
                        </div>
                        <div class="absolute w-[104%] h-[120%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md  transition-colors duration-500 -z-1 top-[1%] left-0"></div>
                        
                    </div>
                </div>

            </div>

        </div>
        <img src="../../Assets/Images/CrossSiteScriptingThumbnail.gif" class="absolute object-cover w-full h-full opacity-[0.6]" alt="">


    </div>

    <!-- DROPDOWN SECTION -->
    <div id="dropdownSection" class="w-full h-auto mt-[8vh] px-[10vw]">
        <div class="flex flex-col items-center justify-center w-full h-full border-3 border-[#3E4B5E] rounded-md p-[2%]">

            <!-- DROPDOWN 1 -->
            <details class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
    
                <summary class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        1
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        XSS - Vulnerable Page
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" 
                             class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" 
                                  fill="#94A3B8"></path>
                        </svg>
                    </span>

                </summary>
                <div id="content1" class="p-10 flex items-center justify-start h-full  transition-all duration-500">
                    
                    <div class="flex flex-row items-center justify-between space-x-10 py-10 ">
                        
                        <div class="text-gray-400 max-w-[50%] p-5 text-xl max-sm:text-xs"><span class="font-bold text-blue-300">Cross-Site Scripting (XSS)</span> is a type of security vulnerability that allows attackers to inject malicious scripts into web pages viewed by other users. These scripts are usually written in JavaScript and execute in the victim's browser, enabling attackers to steal sensitive data, manipulate web content, impersonate users, or even take full control of a user's session.

                            XSS occurs when a web application fails to properly validate or sanitize user input before including it in the webpage.</div>

                        <!-- BUTTON -->
                        
                        <div onclick="window.location.href='vulnerable_xss.php'" class="yellowButton yellowButtonVulnerable  hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] h-full py-10 w-full relative z-[100] max-w-[50%]">

                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">
                                
                                <img src="../../Assets/Images/playButton.png" class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]" alt="Image 1">
                                
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
                    <button onclick="window.location.href='vulnerable_login.php'">vuln</button> -->
                </div>

                
                <!-- GIF -->
                <img src="../../Assets/Images/terminalAndRobo.gif" class="-mt-25" alt="giff">


                <div class="bulletPoints p-15">

                    <p class="bulletPointTitle text-[#93C5FD] text-2xl font-bold mb-10">The application might be vulnerable if the application is:</p>
                    
                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Accepts user input and displays it without proper sanitization</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl font-['Lexend']">Allows HTML or JavaScript execution within user-generated content</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Uses innerHTML, document.write(), eval(), or setTimeout() insecurely</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Fails to use a Content Security Policy (CSP)</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Reflects user input in URLs or error messages without escaping</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Allows user-uploaded files with executable content</p>

                    </div>

                    <div class="flex flex-row items-start justify-start space-x-5 mb-[30px]">
                        <img class="diamond w-auto" src="../../Assets//Images/diamond.png" alt="">

                        <p class="text-gray-400  text-xl">Uses outdated or vulnerable libraries/frameworks</p>

                    </div>

            




                </div>

                
            </details>

            <!-- DROPDOWN 2 -->
            <details class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
    
                <summary class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        2
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        Prevention Measures
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" 
                             class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" 
                                  fill="#94A3B8"></path>
                        </svg>
                    </span>

                </summary>

                
                <div id="content2" class="p-20 h-full overflow-hidden transition-all duration-500" >

                    
                    
                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        
                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Output Encoding</p>
            
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                                
                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full" >
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Convert special characters like < > " ' & into HTML entities
// The ENT_QUOTES flag ensures both single and double quotes are encoded
$safeOutput = htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
echo $safeOutput; // Safe to display
                          </code>
                        </pre>
                    </div>

                    
                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="../../Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">Convert potentially dangerous characters into their HTML entity equivalents to prevent them from being interpreted as executable code by the browser. When user-supplied content contains characters like <, >, ", ', or &, these could be interpreted as HTML or script tags if not properly encoded. Output encoding ensures these characters are displayed as text rather than executed as code.</p>


                    </div>


                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        
                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Use POST instead of GET</p>
            
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                                
                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full" >
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Change this in your HTML form:
&lt;form method="POST" action=""&gt; // Instead of GET
// This prevents parameters from appearing in the URL
                          </code>
                        </pre>
                    </div>

                    
                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="../../Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">GET parameters appear in the URL and browser history, making them vulnerable to manipulation and easier to share as attack vectors. Using POST method helps prevent XSS attacks by keeping form data in the HTTP request body instead of the URL. This reduces the risk of attack persistence through bookmarked or shared URLs and limits exposure of sensitive data in server logs and browser history.</p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        
                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Content Security Policy (CSP)</p>
            
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                                
                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full" >
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Only allow scripts from your own domain to execute
// This prevents inline scripts and scripts from other domains
header("Content-Security-Policy: default-src 'self'; script-src 'self'");
                          </code>
                        </pre>
                    </div>

                    
                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="../../Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">A Content Security Policy provides an additional layer of security by defining which content sources the browser should consider valid. It helps prevent XSS attacks by restricting what resources (scripts, styles, images, etc.) can be loaded and executed on your page. CSP acts as a whitelist, telling browsers exactly which sources of content are permitted, greatly reducing the attack surface for XSS vulnerabilities even if other defenses fail.</p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        
                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Input Validation</p>
            
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                                
                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full" >
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// Validate input before processing
// This prevents excessively long inputs that might be used for attacks
if (strlen($comment) > 1000) {
    die("Comment too long");
}

// Remove potentially malicious patterns like event handlers and JavaScript protocol
$filteredComment = preg_replace('/on\w+=|javascript:|&\#|alert\s*\(/i', '', $userInput);
                          </code>
                        </pre>
                    </div>

                    
                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="../../Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic">Input validation checks that user-submitted data conforms to expected formats, lengths, and patterns before processing. This acts as a first line of defense by rejecting potentially malicious input early in the processing pipeline. While not sufficient on its own, strong input validation can block many common attack patterns and reduce the risk of XSS by limiting what special characters or sequences can be submitted in the first place.</p>

                    </div>

                    <!-- WINDOW -->
                    <div class="windowPopup flex flex-col items-center justify-center bg-[#3E4B5E] rounded-md p-2">
                        
                        <div class="flex items-center justify-between w-full">

                            <p class="text-[#0F172A] font-bold text-2xl ml-2 py-2">Context Specific Encoding</p>
            
                            <div class="flex flex-row justify-end items-center gap-2 h-7 mb-2 w-auto">
                                
                                <div class="bg-[#0F172A] w-5 h-[4px]"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] w-5 h-5"></div>
                                <div class="bg-transparent border-4 border-[#0F172A] rounded-full w-5 h-5"></div>
                                
                            </div>
                        </div>

                        <pre class="whitespace-pre-wrap flex items-center w-full h-full" >
                        
                          <code class=" rounded-md text-sm font-mono w-full h-full" >
// For HTML context - prevents HTML and script tags from being interpreted
$htmlSafe = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// For JavaScript context (when embedding user data in scripts)
// Ensures data is treated as a string literal, not executable code
$jsSafe = json_encode($input);

// For URL parameters - prevents URL manipulation and ensures proper formatting
$urlSafe = urlencode($input);
                          </code>
                        </pre>
                    </div>

                    
                    <!-- ROBO WITH DESC -->
                    <div class="flex flex-row items-start gap-2 justify-start mt-8 mb-20">


                        <img src="../../Assets/Images/robot.gif" class="h-16 w-auto" alt="">

                        <p class="preventionDescription mt-2 text-gray-600 italic"> Different parts of a web page interpret special characters differently, so encoding must be tailored to the specific context where user data will appear. HTML content, JavaScript code, CSS values, and URL parameters each have their own set of dangerous characters and encoding requirements. Using the wrong encoding method for a particular context can leave XSS vulnerabilities even when you think you're protecting the data.</p>

                    </div>

                </div>

                
            </details>



            <!-- DROPDOWN 3 -->

            <details id="dropdown3" class="relative group w-full bg-[#020617] shadow-md rounded-lg p-4 hover:bg-[#0F172A] transition-colors duration-500">
    
                <summary class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] cursor-pointer text-lg font-semibold flex justify-between items-center  rounded-md p-2">
                    <div class="flex items-center justify-center ['Press_Start_2P'] text-white font-black text-3xl border-3 border-[#3E4B5E] rounded-full w-16 h-16 max-md:w-12 max-md:h-12 max-md:text-sm p-4 mx-2">
                        3
                    </div>

                    <div class="font-['Press_Start_2P'] text-xl font-black text-white max-md:text-sm"> 
                        XSS - Resistant Page
                    </div>

                    <!-- DROPDOWN ARROW -->
                    <span class="text-white transition-transform duration-300 group-open:rotate-0 origin-center rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 25 24" fill="none" 
                             class="transition-transform duration-400 origin-center">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 16H5.5V14H7.5V12H9.5V10H11.5V8H13.5V10H15.5V12H17.5V14H19.5V16H17.5V14H15.5V12H13.5V10H11.5V12H9.5V14H7.5V16Z" 
                                  fill="#94A3B8"></path>
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
                        
                        <img src="../../Assets/Images/mascot.gif" class="max-w-[50%] w-100 h-auto" alt="mascot">

                        <!-- BUTTON -->

                        <div onclick="window.location.href='secure_xss.php'" class="yellowButton yellowButtonSecure hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer]  h-full py-10 w-full relative z-[100] max-w-[50%]">

                            <div class="z-[100] flex flex-row h-full w-full items-center justify-center px-3 py-2">
                                
                                <img src="../../Assets/Images/playButton.png" class="z-[100] w-[20%] m-1 h-auto drop-shadow-[2px_2px_0px_rgb(221,170,16)]" alt="Image 1">
                                
                                <div class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] flex flex-col items-center justify-center">
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



                <!-- <marquee behavior="scroll" direction="left" scrollamount="10">
                    <img src="../../Assets/Images/Ronit-User1.JPG" class="w-40 h-40 inline-block mx-4" alt="Image 1">
                
                </marquee> -->
            </details>

        </div>
    </div>


    <footer class="bg-gray-950 text-white py-16 mt-16">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
            <div>
                <img src="../../Assets/Images/logo.svg" alt="Web-Nexus Logo" class="w-24 mx-auto md:mx-0">
                <p class="mt-4 text-gray-400">Learn security the hands-on-way.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Company</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="../../About Us/contact us.php" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">About Us</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Careers</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Support</h3>
                <ul class="mt-4 space-y-2">
                    <li><a href="#home" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Help Center</a></li>
                    <li><a href="../../About Us/contact us.php" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">Contact</a></li>
                    <li><a href="#home" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-blue-400">Follow Us</h3>
                <div class="mt-4 flex justify-center md:justify-start space-x-4">
                    <a href="#" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="../../Assets/Images/github.png" alt="Github" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="../../Assets/Images/LinkedIn.jpg" alt="Linkedin" class="w-8">
                    </a>
                    <a href="#" class=" hover:cursor-[url('../../Assets/Images/cursor_02.png'),_pointer] text-gray-300 hover:text-white">
                        <img src="../../Assets/Images/twitter.jpg" alt="Twitter" class="w-8">
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
    <script src="../../Assets/Animations/vulnerabilityPageAnimation.js"></script>
</body>
</html>