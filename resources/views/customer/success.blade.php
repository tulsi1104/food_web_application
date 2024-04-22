<x-userlayout>
    <style>
html, body, #wrapper {
  height: 100%;
  width: 100%;
}

body {
  background-color: #E5F9FF;
}

#wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
#wrapper #success, #wrapper #error {
  background-color: #FFFFFF;
  padding: 1rem 2rem 2rem 2rem;
  border-radius: 0.75rem;
  width: 300px;
  position: absolute;
  z-index: 1;
  text-align: center;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.4);
  display: none;
}
#wrapper #success h4, #wrapper #error h4 {
  text-transform: uppercase;
}
#wrapper #success.active, #wrapper #error.active {
  display: block;
}
#wrapper .fa-circle-check {
  color: #59B660;
}
#wrapper .fa-circle-exclamation {
  color: #EE5555;
}
#wrapper button {
  border: 0;
  border-radius: 1.5rem;
  font-family: system-ui, sans-serif;
  font-size: 1rem;
  line-height: 1.2;
  white-space: nowrap;
  text-decoration: none;
  padding: 0.5rem 1.5rem;
  margin: 0.25rem;
  background-color: #FFFFFF;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  transition: background 250ms ease-in-out;
  text-transform: uppercase;
}

#wrapper #successBtn {
  border: 1px solid #59B660;
  background-color: #59B660;
  color: #FFFFFF;
}
#wrapper #successBtn:hover {
  color: #59B660;
  background-color: #FFFFFF;
}
    </style>
    <div id="wrapper">
        <h3><i class="fa-solid fa-circle-check fa-2xl"></i></h3>
        <h4>Ordered Successfully!</h4>
        <p>{{Auth::user()->name}},Thank you for Ordering!</p>
        <button onclick="redirectToPage()" id="successBtn" type="button" class="btn">Back To Home</button>
    </div>

    <script>
    function redirectToPage() {
    window.location.href = 'listcategoryuser';
    }
</script>
</x-userlayout>