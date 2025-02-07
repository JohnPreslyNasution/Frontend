<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Mega:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-white bg-[linear-gradient(to_right,#80808033_1px,transparent_1px),linear-gradient(to_bottom,#80808033_1px,transparent_1px)] bg-[size:70px_70px] font-sans items-center flex flex-col">
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="w-[62%] flex flex-col items-center">
            <main class="container mx-auto flex flex-col items-center">
                <div class="flex flex-col space-y-4 w-[80%] max-lg:w-[100%] border-brutal shadow-brutal rounded-lg p-4 bg-[#DFE5F2]">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Register</h2>
                        <form id="registerForm" enctype="multipart/form-data">
                            <div class="flex flex-col space-y-4">
                                <div>
                                    <label for="username" class="text-gray-700 font-semibold">Username</label>
                                    <input type="text" id="username" name="username" class="bg-white w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Enter your username" required>
                                </div>
                                <div>
                                    <label for="email" class="text-gray-700 font-semibold">Email</label>
                                    <input type="email" id="email" name="email" class="bg-white w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Enter your email" required>
                                </div>
                                <div>
                                    <label for="password" class="text-gray-700 font-semibold">Password</label>
                                    <input type="password" id="password" name="password" class="bg-white w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Enter your password" required>
                                </div>
                                <div>
                                    <label for="confirmPassword" class="text-gray-700 font-semibold">Confirm Password</label>
                                    <input type="password" id="confirmPassword" name="confirmPassword" class="bg-white w-full p-3 border-brutal rounded-lg shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Enter again your password" required>
                                </div>
                                <div>
                                    <label for="profilePhoto" class="text-gray-700 font-semibold">Profile Picture</label>
                                    <input type="file" id="profilePhoto" name="profilePhoto" class="bg-white w-full p-3 border-brutal rounded-full shadow-brutal focus:ring-2 focus:ring-blue-400 focus:outline-none" accept="image/*" required>
                                </div>
                                <button type="submit" class="btn-brutal px-6 py-2 bg-[#88AAEE] text-black font-bold rounded-lg shadow-brutal hover:bg-blue-600 border-brutal">Register</button>
                            </div>
                        </form>
                        <p class="text-center mt-4 text-sm text-gray-500">Already have an account? <a href="login.php" class="text-blue-500 hover:underline">Login</a></p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault();

            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const profilePhoto = document.getElementById("profilePhoto").files[0];

            console.log('Username:', namusernamee);
            console.log('Email:', email);
            console.log('Password:', password);
            console.log('Profile Photo:', profilePhoto);
        });
    </script>
</body>
</html>
