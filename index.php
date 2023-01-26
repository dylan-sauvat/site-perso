<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dylan Sauvat</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-gray-100">
  <header class="bg-gray-900 text-white p-6 flex items-center justify-between">
  <h1 class="text-2xl font-medium">Dylan Sauvat / Mon Portfolio</h1>
  <nav>
    <a href="#home" class="text-white hover:text-gray-300 mr-4">Accueil</a>
    <a href="#about" class="text-white hover:text-gray-300 mr-4">A propos</a>
    <a href="#portfolio" class="text-white hover:text-gray-300 mr-4">Portfolio</a>
    <a href="#contact" class="text-white hover:text-gray-300">Contact</a>
  </nav>
</header>
    <main class="p-6">
      <section id="home" class="bg-white p-6">
        <h2 class="text-xl font-medium mb-4">Accueil</h2>
        <p>Bienvenue sur mon site personnel!</p>
      </section>
      <section id="about" class="bg-white p-6">
        <h2 class="text-xl font-medium mb-4">A Propos</h2>
        <p>Je suis un développeur web en cours de formation, ayant acquis des compétences en HTML, CSS, JavaScript, Php, et Tailwind.</p>
      </section>
      <section id="portfolio" class="bg-white p-6">
        <h2 class="text-xl font-medium mb-4">Portfolio</h2>
        <ul class="grid grid-cols-3 gap-4">
          <li class="bg-gray-200 p-4">Projet 1</li>
          <li class="bg-gray-200 p-4">Projet 2</li>
          <li class="bg-gray-200 p-4">Projet 3</li>
        </ul>
      </section>
      <section id="contact" class="bg-white p-6">
        <h2 class="text-xl font-medium mb-4">Contact</h2>
        <form>
          <label class="block mb-2">
            Nom:
            <input type="text" class="border p-2" />
          </label>
          <label class="block mb-2">
            Email:
            <input type="email" class="border p-2" />
          </label>
          <label class="block mb-2">
            Message:
            <textarea class="border p-2"></textarea>
          </label>
          <button class="bg-blue-500 text-white p-2 rounded-lg hover:bg-blue-600">Envoyer</button>
</form>
</section>
</main>
<footer class="bg-gray-900 text-white p-6 flex items-center justify-between">
  <p>Copyright &copy; Dylan Sauvat</p>
  <div>
    <a href="mailto:monnom@email.com" class="text-white hover:text-gray-300 mr-4">dylan.sauvat@laplateforme.io</a>
    <a href="https://github.com/dylan-sauvat" target="_blank" rel="noopener noreferrer">
      <img src="https://cdn.jsdelivr.net/npm/simple-icons@v3/icons/github.svg" alt="GitHub" class="w-6 h-6">
    </a>
  </div>
</footer>


  </body>
</html>
