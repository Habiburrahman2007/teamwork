<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - pip</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">

  <!-- Navbar -->
  <nav class="bg-white shadow-md fixed w-full z-10">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center h-16">
      <a href="#" class="font-bold text-xl">pip.</a>
      <div class="space-x-6">
        <a href="#home" class="hover:text-blue-500">Home</a>
        <a href="#portfolio" class="hover:text-blue-500">Portfolio</a>
        <a href="#about" class="hover:text-blue-500">About</a>
        <a href="#contact" class="hover:text-blue-500">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="home" class="h-screen flex flex-col justify-center items-center text-center px-4">
    <h1 class="text-4xl font-bold mb-4">Hi, I’m pip 👋</h1>
    <p class="text-lg text-gray-600 mb-6">Welcome to my portfolio. Explore my works in design, photography, and coding.</p>
    <a href="#portfolio" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600 transition">View Portfolio</a>
  </section>

  <!-- Portfolio -->
  <section id="portfolio" class="py-20 max-w-6xl mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12">My Works</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
        <img src="https://via.placeholder.com/400x250" alt="Project 1" class="rounded-t-xl">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Project One</h3>
          <p class="text-gray-600 text-sm mt-2">Short description of the project goes here.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
        <img src="https://via.placeholder.com/400x250" alt="Project 2" class="rounded-t-xl">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Project Two</h3>
          <p class="text-gray-600 text-sm mt-2">Short description of the project goes here.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
        <img src="https://via.placeholder.com/400x250" alt="Project 3" class="rounded-t-xl">
        <div class="p-4">
          <h3 class="font-semibold text-lg">Project Three</h3>
          <p class="text-gray-600 text-sm mt-2">Short description of the project goes here.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="py-20 bg-gray-100">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-6">About Me</h2>
      <p class="text-gray-700 leading-relaxed">
        I’m pip, a multidisciplinary creator who loves design, photography, and programming.  
        With a passion for clean and simple visuals, I enjoy turning ideas into creative works.  
      </p>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-20 max-w-4xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
    <p class="text-gray-600 mb-6">Feel free to reach out for collaboration or just to say hi!</p>
    <form class="grid gap-4 max-w-md mx-auto">
      <input type="text" placeholder="Your Name" class="border rounded-lg p-3 focus:outline-none focus:ring focus:ring-blue-200">
      <input type="email" placeholder="Your Email" class="border rounded-lg p-3 focus:outline-none focus:ring focus:ring-blue-200">
      <textarea rows="4" placeholder="Your Message" class="border rounded-lg p-3 focus:outline-none focus:ring focus:ring-blue-200"></textarea>
      <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600 transition">Send</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="bg-white py-6 border-t text-center text-gray-500 text-sm">
    © 2025 pip. All rights reserved.
  </footer>

</body>
</html>
