<x-layout>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;  
        height: 100vh;
       display: flex;
       align-items: center;
       justify-content: center;
    /* position: relative; */
    background: var(--app-bg)

    }
    .container {
        max-width: 600px;
         width: 100%;
        margin: 20px auto;
        /* background-color: #203e57; */
           background:var(--app-bg);
    backdrop-filter: blur(1rem);
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .container h2 {
        margin-bottom: 20px;
        text-align: center;
    }
    form {
        display: grid;
        grid-gap: 10px;
        border:1px medium white;
        padding: 20px;
    }
    form label {
        font-weight: bold;
        color: white;
        text-shadow: 1px 1px black;

    }
    form input[type="text"],
    form input[type="number"],
    form select,
    form button {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;

    }
    form select {
        height: 40px;
    }
    form button {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
        margin-top: 10px;

    }
    form button:hover {
        background-color: #45a049;
    }
    h2{
        color: white;
        text-shadow: 2px 2px black;

    }
    .input_image{
        color: white;
    }

.button{
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   border: none;
}
</style>

<body>
<div class="container">
    <h2>Add Delivery Partner</h2>
    <form method="POST" action="{{route('adddpartner.AddPartner')}}" enctype="multipart/form-data">
    @csrf
        <label for="dpname">Name:</label>
        <input type="text" name="dpname" required>
        <label for="dpnumber">Phone Number:</label>
        <input type="text" name="dpnumber" required>
        <label for="dpimage">Profile Photo:</label>
        <input class="input_image" type="file" accept="image/jpeg, image/png" name="dpimage" required>
        <button type="submit" class="button">Add Partner</button>
    </form>
</div>

</x-layout>