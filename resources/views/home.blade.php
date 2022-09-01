<x-app-layout>

<div class="main">
    
    <!--Home Banner-->

   <div class="banner">
        <div class="content">
            <h2>A New Home for<br> 
            Game Lovers</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quisquam, dolores libero quidem, molestiae nisi voluptatibus.</p>
            <a href="#" class="btn">Join Now</a>
        </div>
        <div class="img">
          <img src="{{asset('img/SetG.jpg')}}">
        </div>
    </div>
    
    <!--About-->
   <div class="about">
    <div class="content">
        <h2>About Us</h2>
        <p>
             We are an eleventh grade group students, who they have decided create a project about video games, a virtual catalog, with the help of various tools like visual studio, laravel framework, java script and others.

             Our team consist in a group of five participants
             Juan José Restrepo Rendón: Director's project
             Sebastián Puentes Marín: Html / php designer 
             Camila Reyes Ramírez: CSS designer
             Jeferson Suéscun: Beta Tester / bug fixing
             Alejandra Ramirez / 

             Our team works with the help an instructor SENA and a teacher in the higschool Yermo y Parres, where our objetive is create a web page with a database an a beautiful desing
        </p>
        <a href="#">Read more</a>
    </div>
    <div class="img">
    <img src="{{asset('img/GameCoso.png')}}">
    </div>
   </div>

   <!--Games-->
   <div class="games">
    <h2>Popular Games</h2>
    <ul>
        <li class="list active" data-filter="all">All</li>
        <li class="list active" data-filter="pc">Pc</li>
        <li class="list active" data-filter="mobile">Mobile</li>>
    </ul>
     <div class="cardBx">

        <div class="card" data-item="pc">
            <img src="{{asset('img/Bl3.jpg')}}">
            <div class="content">
                <h4>Borderlands 3</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$50</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>

        <div class="card" data-item="pc">
            <img src="{{asset('img/ds3.jpg')}}">
            <div class="content">
                <h4>Dark Souls III</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$35</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>

        <div class="card" data-item="pc">
            <img src="{{asset('img/Gow4.jpg')}}">
            <div class="content">
                <h4>God Of War</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$60</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>

        <div class="card" data-item="pc">
            <img src="{{asset('img/seki.jpg')}}">
            <div class="content">
                <h4>Sekiro: Shadows Die Twice</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$55</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>

        <div class="card" data-item="pc">
            <img src="{{asset('img/Minecraft.jpg')}}">
            <div class="content">
                <h4>Minecraft</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$15</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>

        <div class="card" data-item="mobile">
            <img src="{{asset('img/PUBG_Mobile.png')}}">
            <div class="content">
                <h4>PUBG Mobile</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$0</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>
        <div class="card" data-item="mobile">
            <img src="{{asset('img/browstars.png')}}">
            <div class="content">
                <h4>Brawl Stars</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$0</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>
        <div class="card" data-item="mobile">
            <img src="{{asset('img/Gayfire.jpg')}}">
            <div class="content">
                <h4>Free fire</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$100</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>
        <div class="card" data-item="mobile">
            <img src="{{asset('img/DragonCity.jpg')}}">
            <div class="content">
                <h4>Dragon City</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$0</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>
        <div class="card" data-item="mobile">
            <img src="{{asset('img/ClashRoy.jpg')}}">
            <div class="content">
                <h4>Clash Royale</h4>
                <div class="progress-line"><span></span></div>
                <div class="info">
                    <p>Pricing <br><span>$0</span></p>
                    <a href="#">Play Now</a>
                </div>
            </div>
        </div>
        

     </div> 
   </div> 

   <div class=contact>

        <img src="{{asset('img/SetG.jpg')}}">
        <div class="form">

        <h1>Contact us</h1>
        <div class= "inputBx">
            <p>Enter Name</p>
            <input type="text" placeholder="Full Name">
        
        <div class= "inputBx">
            <p>Enter Email</p>
            <input type="text" placeholder="Email direction">
        
        <div class= "inputBx">
            <p>Message</p>
            <textarea placeholder="Type here..."></textarea>

            <div class= "inputBx">
        
            <input type="submit" name="Submit">

        </div>

        </div>


   </div>

    <!-- footer -->

<footer>

    <div class="info">
        <a href="#" class="logo">QuickGame</a>
        <p><i class='bx bx-copyright'></i> 2022 All rights Reserved</p>
        <ul>
            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
            <li><a href="#"><i class='bx bxl-instagram' ></i></a></li>
            <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
            <li><a href="#"><i class='bx bxl-youtube' ></i></a></li>
        </ul>

    </div>


</footer>


   <script>
    /* Sticky navbar*/
       window.addEventListener('scroll',function(){
           var header = document.querySelector('header');
           header.classList.toggle('sticky',window.scrollY > 0);        
       });


       /*Filterabñe Cards*/

       let list = document.querySelectorAll('.list');
       let card = document.querySelectorAll('.card');

       for(let i = 0; i<list.length; i++){
           list[i].addEventListener('click',function(){
            for(let j=0; j<list.length; j++){
                list[j].classList.remove('active');
            }
            this.classList.add('active');

            let dataFilter = this.getAttribute('data-filter');

            for( let k=0; k<card.length; k++)
            {
                card[k].classList.remove('active');
                card[k].classList.add('hide');

                if(card[k].getAttribute('data-item')== dataFilter || dataFilter == 'all'){
                    card[k].classList.remove('hide');
                    card[k].classList.add('active');
                }
            }
           }) 
       }


   </script>
</div>

</x-app-layout>