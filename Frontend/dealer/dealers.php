<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Marketting</title>
</head>
<body>
  <header class="bg-indigo-500 text-gray-700 body-font">
    <div class="  container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">CodeForCure</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900" href="profile.php">Profile</a>
        <a class="mr-5 hover:text-gray-900" href="policies.php" >Government Policies</a>
        </nav>
     <!-- <button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Button
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>-->
    </div>
  </header>

  <section class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="flex w-full mb-20 flex-wrap">
        <div class="lg:w-2/3 mx-auto">
            <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
        <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0" src="img4.jpg">
              <div class="text-center relative z-10 w-full">
          <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">Partner with Us to IMPACT SCALE</h2>
          <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Centre for Aquatic Livelihood Jaljeevika 
            is addressing the issue of small-scale fish farmers, building community resilience and capacity to 
            enhance livelihood opportunities using existing water bodies, technology and leveraging institutions.</p>       
        </div>
      </div>    
    </div>

  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">


    <?php
            

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "codeforcure";

            $conn = mysqli_connect($servername, $username, $password, $database);
            // Die if connection was not successful
            if (!$conn){
                // die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{
                // echo "Connection was successful<br>";
            }
    
            $sql = "SELECT * FROM `product1`";
            $result = mysqli_query($conn, $sql);
    
            // Find the number of records returned
            $num = mysqli_num_rows($result);
            // echo $num;
            // echo " records found in the DataBase<br>";
            // Display the rows returned by the sql query
            // echo $name;
            // echo $password1;
            if($num> 0){

                
            
               
            
                while($row = mysqli_fetch_assoc($result))
                {
                $image=$row['image'];
                $category=$row['product_type'];
                $price=$row['price'];
                // echo $image;
                // echo $price;
                // echo $category;

               echo    <<< GFG
              
               <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
               <a class="block relative h-48 rounded overflow-hidden">
                 <img class="object-cover object-center w-full h-full block" src="../$image">
                //  echo '<img class="object-cover object-center w-full h-full block" src="C:/xampp1/htdocs/codeforcure/uploads/bg.jpg">';
                 </a>
               <div class="mt-4">
                 <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">$category</h3>
                 <h2 class="text-gray-900 title-font text-lg font-medium">IRITY-KERALA</h2>
                 <div class="flex flex-col justify-center">
                   <p class="mt-1">Base :- Rs 100</p>
                   <p class="mt-1">Current :- $price</p>
                   </div>
                   <br>
                   <form action="/codeforcure/bid.php/" method="post" >
                   <div class="flex flex-row">
                     <input  name="name" class="justify-center bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Enter the bid amount" type="number">
                     <button class="flex ml-auto text-white bg-indigo-500 border-0 py-1 px-4 focus:outline-none hover:bg-indigo-600 rounded">Bid</button>        
                   </div>
                   </form>
               </div>
             </div>
       
       GFG;
               
         }
        
    echo  "</div>";
    

         
    }
           
             ?>


     

      <!--start commenting from here to make it run in a for loop--> 
      
      <!--end before this line-->
  </div>
</div>
</section>




<footer class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">JALJIVIKA</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/what-we-do">What we do</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/what-we-are/">What we are</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/the-challenge">The challenge</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/our-solution">Our solution</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">AQUATIC LIVELIHOOD</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/about-us">About us</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/about-our-journey">About our journey</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/partner-with-us">Career</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800" href="https://www.jaljeevika.org/contact-us">Contact Us</a>
          </li>
        </nav>
      </div>
      
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">COMPLAIN</h2>
        <div class="flex xl:flex-no-wrap md:flex-no-wrap lg:flex-wrap flex-wrap justify-center md:justify-start">
          <input class="w-40 sm:w-auto bg-gray-100 rounded xl:mr-4 lg:mr-0 sm:mr-4 mr-2 border border-gray-400 focus:outline-none focus:border-indigo-500 text-base py-2 px-4" placeholder="enter your complain" type="text">
          <button class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Submit</button>
        </div>
        <p class="text-gray-500 text-sm mt-2 md:text-left text-center">You can add Your Complain
          <br class="lg:block hidden">We are here to help you
        </p>
      </div>
    </div>
  </div>
  <div class="bg-gray-200">
    <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <span class="ml-3 text-xl">CodeForCure</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 Codeforcure —
        <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Codeforcure</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
</body>
</html>