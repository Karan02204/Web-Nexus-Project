<?php
// Vulnerable: Using weak password hashing and insecure storage
session_start();

$md5_hash = "";
$password_entered = "";
$username_entered = "";
$vulnerability_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_entered = $_POST['username'];
    $password_entered = $_POST['password'];

    // Weak Hashing: Using MD5 (Insecure)
    $md5_hash = md5($password_entered);

    // Simulating password storage (insecurely storing in an array)
    $_SESSION['users'][$username_entered] = $md5_hash;

    // Demonstrate vulnerability by showing collision potential
    $vulnerability_message = "<div class='text-red-500 mb-4'>
        <p class='font-bold'>⚠️ VULNERABILITY DETECTED ⚠️</p>
        <p>User registered with weak MD5 hashing!</p>
        <p>Stored Hash: <span class='font-mono bg-gray-800 px-2 py-1 rounded text-yellow-300'>$md5_hash</span></p>
        <p class='mt-2 text-xs'>MD5 is vulnerable to:</p>
        <ul class='list-disc ml-5 text-xs'>
            <li>Rainbow table attacks</li>
            <li>Collision attacks</li>
            <li>Brute force attacks (fast computation)</li>
        </ul>
    </div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vulnerable Form - Cryptographic Failures</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

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
<body class="bg-[#020617] text-white font-['Lexend'] cursor-[url('/Assets/Images/cursor_01.png'),_auto]">
    <!-- HEADER -->
    <nav class="fixed z-[999] top-0 left-0 h-[10vh] w-screen flex items-center justify-between p-4 bg-[#020617] border-b-2 border-[#3E4B5E] max-md:p-0">
        <div class="flex items-center space-x-3">
            <a href="../Karan/index.html">
                <img src="/Assets/Images/logo.svg" alt="logo" class="w-12" />
            </a>
            <span class="text-2xl text-white font-bold font-['Press_Start_2P'] font-black drop-shadow-[5px_5px_0px_black] drop-shadow-[-5px_-5px_0px_black] max-md:text-xs">Web-Nexus</span>
        </div>
        <div class="flex items-center justify-between space-x-10 max-md:space-x-4">
            <a
            href="#"
            class="headerStuff hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs"
            >Vulnerabilities</a
            >
            <a
            href="#"
            class="headerStuff hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs"
            >About Us</a
            >
            <a
            href="#"
            class="headerStuff hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer] text-center font-semibold text-white hover:text-gray-300 max-md:text-xs"
            >Contact Us</a
            >
        </div>

        <div
            id="menu-btn"
            class="hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer] md:hidden focus:outline-none"
        >
            <img src="/Assets/Images/menu.svg" alt="menu" class="w-8" />
        </div>
        <div class="flex items-center justify-center">
            <div
            onclick="window.location.href='index.html'"
            class="yellowButton yellowButtonHeader hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer]"
            >
            <div
                class="relative bg-yellow-300 hover:bg-yellow-600 px-3 py-2 mr-3 rounded-md border-3 border-[rgb(221,170,16)] transition-colors duration-500"
            >
                <div
                class="font-['Press_Start_2P'] drop-shadow-[2px_2px_0px_rgb(221,170,16)] font-thin text-xs max-md:text-[8px] text-black"
                >
                Back to Vulnerabilities
                </div>
                <div
                class="absolute w-[102%] h-[115%] bg-[rgb(221,170,16)] hover:bg-yellow-600 rounded-md transition-colors duration-500 -z-1 top-[1%] left-0"
                ></div>
            </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="pt-[15vh] pb-10 px-4 flex flex-col items-center justify-start min-h-screen">
        <div class="w-full max-w-7xl flex flex-col md:flex-row gap-8">
            <!-- LEFT SIDE: FORM -->
            <div class="md:w-1/2 bg-[#0F172A] p-6 rounded-lg border-2 border-[#3E4B5E] shadow-lg">
                <div class="flex items-center mb-6">
                    <div class="flex items-center justify-center font-['Press_Start_2P'] text-white font-black text-xl border-2 border-[#3E4B5E] rounded-full w-10 h-10 mr-4">!</div>
                    <h2 class="text-2xl font-['Press_Start_2P'] text-red-500">Vulnerable Form</h2>
                </div>

                <?php echo $vulnerability_message; ?>

                <form method="POST" class="mt-4">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                        <input type="text" name="username" id="username" value="<?php echo htmlspecialchars($username_entered); ?>" placeholder="Enter username" class="w-full p-3 bg-[#1E293B] border border-[#3E4B5E] rounded-md text-white focus:outline-none focus:ring-2 focus:ring-yellow-300">
                    </div>
                    
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                        <input type="password" name="password" id="password" value="<?php echo htmlspecialchars($password_entered); ?>" placeholder="Enter password" class="w-full p-3 bg-[#1E293B] border border-[#3E4B5E] rounded-md text-white focus:outline-none focus:ring-2 focus:ring-yellow-300">
                    </div>
                    
                    <button type="submit" class="relative bg-red-500 hover:bg-red-600 w-full px-4 py-3 rounded-md border-2 border-[rgb(239,68,68)] transition-colors duration-500 group hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer]">
                        <div class="font-['Press_Start_2P'] text-black group-hover:text-white drop-shadow-[2px_2px_0px_rgb(239,68,68)] text-sm">Register (Insecure)</div>
                        <div class="absolute w-[101%] h-[110%] bg-[rgb(239,68,68)] hover:bg-red-600 rounded-md transition-colors duration-500 -z-10 top-[2%] left-0"></div>
                    </button>
                    
                    <div class="mt-4 text-center">
                        <a href="secure_page.php" class="text-blue-400 hover:text-blue-300 text-sm hover:cursor-[url('/Assets/Images/cursor_02.png'),_pointer]">Try the secure version</a>
                    </div>
                </form>
            </div>

            <!-- RIGHT SIDE: EXPLANATION -->
            <div class="md:w-1/2 bg-[#0F172A] p-6 rounded-lg border-2 border-[#3E4B5E] shadow-lg">
                <h3 class="text-xl font-['Press_Start_2P'] text-red-500 mb-6">Vulnerability Explained</h3>
                
                <div class="mb-6">
                    <h4 class="text-lg font-bold text-white mb-2">What's happening?</h4>
                    <p class="text-gray-300 mb-4">This form uses MD5 for password hashing, which is considered cryptographically broken:</p>
                    
                    <pre class="bg-gray-800 p-4 rounded-md overflow-x-auto mb-4">
<code class="language-php">// Weak implementation
$hashed_password = md5($password); // MD5 is vulnerable!</code></pre>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-bold text-white mb-2">Why is this vulnerable?</h4>
                    <ul class="list-disc pl-5 text-gray-300 space-y-2">
                        <li>MD5 is fast to compute, making brute force attacks feasible</li>
                        <li>Collision vulnerabilities have been demonstrated</li>
                        <li>No salt is used, making rainbow table attacks possible</li>
                        <li>Hashed passwords are exposed in the response</li>
                    </ul>
                </div>

                <?php if (!empty($md5_hash)): ?>
                <div class="mb-6">
                    <h4 class="text-lg font-bold text-white mb-2">Live Demonstration</h4>
                    <div class="bg-gray-800 p-4 rounded-md">
                        <p class="text-gray-300">Password entered: <span class="font-mono text-yellow-300"><?php echo htmlspecialchars($password_entered); ?></span></p>
                        <p class="text-gray-300">MD5 hash: <span class="font-mono text-yellow-300"><?php echo $md5_hash; ?></span></p>
                        <p class="text-gray-300 mt-2 text-sm">This hash can be easily reversed using rainbow tables.</p>
                        <p class="text-gray-300 text-sm">Try searching for this hash online to see if it can be cracked!</p>
                    </div>
                </div>
                <?php endif; ?>

                <div>
                    <h4 class="text-lg font-bold text-white mb-2">Secure Alternative</h4>
                    <pre class="bg-gray-800 p-4 rounded-md overflow-x-auto">
<code class="language-php">// Secure implementation
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
// Automatically includes salt and is slow by design</code></pre>
                    <p class="text-gray-300 mt-2">The secure version uses PHP's built-in password_hash() function with Bcrypt, which includes salt automatically and is deliberately slow to prevent brute force attacks.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="w-full bg-[#0F172A] border-t-2 border-[#3E4B5E] p-4 text-center text-gray-400 text-sm">
        <p>Web-Nexus Cybersecurity Education Platform | <a href="../sensitive_data/index.html" class="text-blue-400 hover:text-blue-300">Back to Main Page</a></p>
    </footer>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/gsap.min.js"
      integrity="sha512-f6bQMg6nkSRw/xfHw5BCbISe/dJjXrVGfz9BSDwhZtiErHwk7ifbmBEtF9vFW8UNIQPhV2uEFVyI/UHob9r7Cw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.7/ScrollTrigger.min.js"
      integrity="sha512-AcqPGqrrAEtEwe+ADO5R8RbdFi7tuU7b/A2cJJH0Im0D18NRk5p5s4B3E5PMuO81KFw0ClN7J5SHVUJz7KOb0A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="/Malay/Animations/vulnerabilityPageAnimation.js"></script>
</body>
</html>
