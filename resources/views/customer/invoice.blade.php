
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
:root{
  --font-color: black;
  --highlight-color: #60D0E4;
  --header-bg-color: #B8E6F1;
  --footer-bg-color: #BFC0C3;
  --table-row-separator-color: #BFC0C3;
}

@page{

  size:A4;
  margin:8cm 0 3cm 0;

  @top-left{
  	content:element(header);
  }

  @bottom-left{
  	content:element(footer);
  }
}

body{
  margin:0;
  padding:1cm 2cm;
  color:var(--font-color);
  font-family: 'Montserrat', sans-serif;
  font-size:10pt;
}
a{
  color:inherit;
  text-decoration:none;
}
hr{
  margin:1cm 0;
  height:0;
  border:0;
  border-top:1mm solid var(--highlight-color);
}
header{
  height:8cm;
  padding:0 2cm;
  position:running(header);
  background-color:var(--header-bg-color);
}
header .headerSection{
  display:flex;
  justify-content:space-between;
}

header .headerSection:first-child{
  padding-top:.5cm;
}

header .headerSection:last-child{
  padding-bottom:.5cm;
}
header .headerSection div:last-child{
  width:35%;
}
header .logoAndName{
  display:flex;
  align-items:center;
  justify-content:space-between;
}
header .logoAndName svg{
  width:1.5cm;
  height:1.5cm;
  margin-right:.5cm;
}
header .headerSection .invoiceDetails{
  padding-top:.5cm;
}
header .headerSection h3{
  margin:0 .75cm 0 0;
  color:var(--highlight-color);
}
header .headerSection div:last-of-type h3:last-of-type{
  margin-top:.5cm;
}
header .headerSection div p{
  margin-top:2px;
}

/*
All header elements and paragraphs within the HTML HEADER tag get a margin of 0.
*/
header h1,
header h2,
header h3,
header p{
  margin:0;
}

/*
The invoice details should not be uppercase and also be aligned to the right.
*/
header .invoiceDetails,
header .invoiceDetails h2{
  text-align:right;
  font-size:1em;
  text-transform:none;
}

/*
Heading of level 2 and 3 ("DUE DATE", "AMOUNT" and "INVOICE TO") need to be written in 
uppercase, so we use the text-transform property for that.
*/
header h2,
header h3{
  text-transform:uppercase;
}

/*
The divider in the HEADER element gets a slightly different margin than the 
standard dividers.
*/
header hr{
  margin:1cm 0 .5cm 0;
}

/*
Our main content is all within the HTML MAIN element. In this template this are
two tables. The one which lists all items and the table which shows us the 
subtotal, tax and total amount.

Both tables get the full width and collapse the border.
*/
main table{
  width:100%;
  border-collapse:collapse;
}

/*
We put the first tables headers in a THEAD element, this way they repeat on the
next page if our table overflows to multiple pages.

The text color gets set to the highlight color.
*/
main table thead th{
  height:1cm;
  color:var(--highlight-color);
}

/*
For the last three columns we set a fixed width of 2.5cm, so if we would change
the documents size only the first column with the item name and description grows.
*/
main table thead th:nth-of-type(2),
main table thead th:nth-of-type(3),
main table thead th:last-of-type{
  width:2.5cm;
}

/*
The items itself are all with the TBODY element, each cell gets a padding top
and bottom of 2mm.
*/
main table tbody td{
  padding:2mm 0;
}

/*
The cells in the last column (in this template the column containing the total)
get a text align right so the text is at the end of the table.
*/
main table thead th:last-of-type,
main table tbody td:last-of-type{
  text-align:right;
}

/*
By default text within TH elements is aligned in the center, we do not want that
so we overwrite it with an left alignment.
*/
main table th{
  text-align:left;
}

/*
The summary table, so the table containing the subtotal, tax and total amount 
gets a width of 40% + 2cm. The plus 2cm is added because our body has a 2cm padding
but we want our highlight color for the total row to go to the edge of the document.

To move the table to the right side we simply set a margin-left of 60%.
*/
main table.summary{
  width:calc(40% + 2cm);
  margin-left:60%;
  margin-top:.5cm;
}

/*
The row containing the total amount gets its background color set to the highlight 
color and the font weight to bold.
*/
main table.summary tr.total{
  font-weight:bold;
  background-color:var(--highlight-color);
}

/*
The TH elements of the summary table are not on top but the cells on the left side
these get a padding left of 1cm to give the highlight color some space.
*/
main table.summary th{
  padding:4mm 0 4mm 1cm;
}

main table.summary td{
  padding:4mm 2cm 4mm 0;
  border-bottom:0;
}

aside{
  -prince-float: bottom;
  padding:0 2cm .5cm 2cm;
}

aside > div{
  display:flex;
  justify-content:space-between;
}

aside > div > div{
  width:45%;
}

aside > div > div ul{
  list-style-type:none;
  margin:0;
}

footer{
  height:3cm;
  line-height:3cm;
  padding:0 2cm;
  position:running(footer);
  background-color:var(--footer-bg-color);
  font-size:8pt;
  display:flex;
  align-items:baseline;
  justify-content:space-between;
}
footer a:first-child{
  font-weight:bold;
}
.app-icon {
        color: var(--sidebar-main-color);
        }
        .app-icon svg {
        width: 24px;
        height: 24px;
        }
</style>

<header>
  <div class="headerSection">
    <div class="logoAndName">
        <div class="app-icon">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z"/></svg>
        </div>
      <h1>TULSI FOOD</h1>
    </div>
    <div class="invoiceDetails">
      <h2>OrderId #{{$Order->id}}</h2>
      <p>
        {{$Order->date}}
      </p>
    </div>
  </div>
  <hr />
  <div class="headerSection">
    <div>
      <h3>Invoice to</h3>
      <p>
        <b>{{$Customer->name}}</b>
        <br />
        {{$Customer->address}}
        <br />
        <br />
        <a href="mailto:clientname@clientwebsite.com">
         {{$Customer->email}}
        </a>
        <br />
        {{$Customer->phone_number}}
      </p>
    </div>
    <div>
      <h3>Due Date</h3>
      <p>
        <b>{{$Order->date}}</b>
      </p>
      <h3>Amount</h3>
      <p>
        <b>&#8377; {{$Order->amount}}</b>
      </p>
    </div>
  </div>
</header>

<footer>
    <a href="https://companywebsite.com">
      companywebsite.com
    </a>
    <a href="mailto:company@website.com">
      company@website.com
    </a>
    <span>
      317.123.8765
    </span>
    <span>
      123 Alphabet Road, Suite 01, Indianapolis, IN 46260
    </span>
</footer>
<main>
  <table>
    <thead>
      <tr>
        <th>Item Description</th>
        <th>Rate</th>
        <th>Amount</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach($Item as $products)
      <tr>
        <td>
          <b>{{$products->product_name}}</b>
          <br />
          {{$products->description}}
        </td>
        <td>
        &#8377; {{$products->unit_price}}
        </td>
        <td>
          {{$products->quantity}}
        </td>
        <td>
        &#8377; {{$products->quantity * $products->unit_price}}
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <table class="summary">
    <tr>
      <th>
        Subtotal
      </th>
      <td>
       {{$Order->amount}}
      </td>
    </tr>
    <tr>
      <th>
        Tax 4.7%
      </th>
      <td>
      &#8377; 000.00
      </td>
    </tr>
    <tr class="total">
      <th>
        Total
      </th>
      <td>
      &#8377; {{$Order->amount}}
      </td>
    </tr>
  </table>
</main>
<aside>
  <hr />
  <h1>THANK YOU FOR ORDERING ;)</h1>
  <button type="button" id="downloadButton">Download</button>
</aside>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script>
document.getElementById("downloadButton").addEventListener("click", function() {
    // Create a new jsPDF instance
    var pdf = new jsPDF();
    
    // Get the HTML content of the invoice
    var invoiceContent = document.documentElement.outerHTML;
    
    // Convert the HTML content to PDF
    pdf.fromHTML(invoiceContent, 15, 15);
    
    // Download the PDF file
    pdf.save("invoice.pdf");
});
</script>
