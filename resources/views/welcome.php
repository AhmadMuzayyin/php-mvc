<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MVC Framework</title>
  <link rel="shortcut icon" href="<?= url('logo.png') ?>" type="image/x-icon">
  <!-- Include Tailwind CSS -->
  <link rel="stylesheet" href="<?= url('assets/css/output.css'); ?>">
</head>

<body class="font-sans bg-gray-100">

  <div class="container mx-auto p-8">
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8 flex justify-center items-center">
      <img src="<?= url('logo.png') ?>" alt="logo" width="100px">
      <h1 class="text-4xl font-bold mb-4 text-indigo-800">Welcome to PHP MVC</h1>
      <p class="text-gray-700">
        PHP MVC (Model-View-Controller) is a design pattern for building web applications.
        It separates the application logic into three interconnected components:
        the Model, the View, and the Controller.
      </p>
    </div>

    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">Key Concepts</h2>
        <ul class="list-disc pl-4 text-gray-700">
          <li><strong>Model:</strong> Represents the data and business logic of the application.</li>
          <li><strong>View:</strong> Responsible for presenting the data to the user and receiving user input.</li>
          <li><strong>Controller:</strong> Handles the user input, processes requests, and updates the Model and View accordingly.</li>
        </ul>
      </div>
      <div class="w-full md:w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">How It Works</h2>
        <ol class="list-decimal pl-4 text-gray-700">
          <li>The user interacts with the Controller by making a request.</li>
          <li>The Controller processes the request, interacts with the Model to retrieve or update data,
            and then updates the View to display the result.</li>
          <li>The View receives user input and communicates it to the Controller to start the cycle again.</li>
        </ol>
      </div>
    </div>

    <div class="mt-8">
      <p class="text-gray-800">
        Start building your PHP MVC application and enjoy the benefits of a structured and maintainable codebase!
      </p>
    </div>
  </div>
</body>

</html>