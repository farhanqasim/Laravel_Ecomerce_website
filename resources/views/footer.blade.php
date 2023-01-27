<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

*{
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: 'Poppins', sans-serif;
}





footer{
  color: #fff;
  background-image: linear-gradient(90deg, rgba(39,27,111,1) 0%, rgba(87,25,45,1) 100%);
  position: relative;
  width: 100%;
  height: 100%;
  top:50px;
  border-top-left-radius: 70px;
  font-size: 0.8rem;
}
.footer_link{

}


@media (max-width:960px) {
  footer{
    width: 100%;
    top: 120px;
  }

  .main{
  margin: 50px;
 display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: 1fr 1fr;
}

  .logo{
    grid-column: 1/3;
  }

  .office{
    grid-column: 3/5;
  }
  .link{
    grid-column: 1/3;
  }


}





@media (max-width:660px){
  .main{
    gap:10px;
    margin: 0;

  }

  .icons{
    display: flex;
  }



  .row{
    grid-column: 1/4;
  }
}







.manik{
  width: 120px;
}
.main{
  margin: 50px;
  padding-top: 20px;
  padding-bottom: 50px;
  display: grid;
  gap: 50px;
  grid-template-columns: repeat(4, 1fr );
}
.row{
 margin-top: 50px;
}
.footer-header{
  font-size: 1.5rem;
  margin-bottom: 30px;
  position: relative;
  top: -10px;

}

.office-des{
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.office a{
  text-decoration: none;
  color: #98A8F8;

}
.office a:hover{
  color: #fff;
}
.num{
  font-size: 1rem;
  font-weight: 500;
}

.link-des{
  display: flex;
  flex-direction: column;
  gap:10px;
}
.link-des a{
  color: #fff;
  text-decoration: none;
  font-size: 1rem;
}

.link-des a:hover{
  color: #FB2576;
  transition: linear 0.3s;
}

.btn-know{
  text-decoration: none;
  background-color: #fff;
  padding: 10px;
  position: relative;
  top: 30px;
  background-color: transparent;
  border: 1px solid #98A8F8;
  color: #98A8F8;
  text-transform: uppercase;
  border-radius:10px;

}


.btn-know:hover{
  color: white;
  background-color: #98A8F8;
  transition: linear 0.3s;
}
.subcribe{
  display: flex;
}
input[type=mail]{
  border: none;
  padding-bottom: 5px;
  border-bottom: 1px solid #fff;
  background-color: transparent;
  font-size: 0.8rem;
}
.sub-icon{
  margin: 7px;
  margin-right: 15px;
  margin-left: 0;
  font-size: 1.5rem;
}
.ri-arrow-right-line{
  margin-left: 0;

}

.icons a{
  text-decoration: none;
  color: #fff;
  border: 1px solid #fff;
  justify-content: center;
  padding: 10px;
  border-radius: 50%;
  align-items: center;
  font-size: 1.1rem;
  margin: 2%;
}


.social-icon{
  position: relative;
  top:2px;
}
.icons a:hover{
  color: #fff;
  background-color: #FB2576;
  border-color: #FB2576;
}
.newsletter-des{
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.copyright{
  text-align: center;
}

hr{
  width: 90%;
  margin: 2px auto;
  opacity: 40%;
  border: 0.01px solid white;

}

.copyright p{
  padding: 20px;
}







</style>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <main class="main-section">

  </main>

  <footer class="footer-sec">
    <div class="main">


      <div class="logo row">
        <div class="footer-header">

            <img src="https://images.unsplash.com/photo-1661961110372-8a7682543120?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MXx8d29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="manik" alt=""  style="border-radius: 50%; width:50px; height:50px;">
        <Span>Pictures</Span>
        </div>
        <div class="logo-des">
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

          <a href="#" class="btn-know">Know More</a>
        </div>


      </div>



      <div class="office row">
        <div class="footer-header">
          <h3>Office</h3>
        </div>
        <div class="office-des">
          <p>here are <br> many variations of passages<br>of Lorem Ipsum<br>available</p>

         <a href="#">manikmaity.haker2003@gmail.com</a>

          <p class = "num">+91-9999999999</p>
        </div>
      </div>


      <div class="link row">
        <div class="footer-header">
          <h3>Links</h3>

        </div>

        <div class="link-des mt-5">
          <a href="#" class="footer-links ">Home</a>
          <a href="#" class="footer-links ">About</a>
          <a href="#" class="footer-links">Services</a>
          <a href="#" class="footer-links">Galary</a>
          <a href="#" class="footer-links">Contact</a>
        </div>

      </div>


      <div class="newsletter row">
        <div class="footer-header">
          <h3>Newsletter</h3>
        </div>
        <div class="newsletter-des">
          <div class="subcribe"><i class="sub-icon ri-mail-check-fill"></i>
            <input type="mail" placeholder = "Enter Email ID" required>
            <i class="sub-icon ri-arrow-right-line"></i>
          </div>
          <div class="icons">
            <a href="#"><i class="social-icon ri-facebook-fill"></i></a>
            <a href="#"><i class="social-icon ri-instagram-line"></i></a>
            <a href="#"><i class="social-icon ri-linkedin-fill"></i></a>
            <a href="#"><i class="social-icon ri-github-line"></i></a>

          </div>
        </div>
      </div>


    </div>
    <div class="copyright">
    <hr>

    <p>© Copyright 2022 Manik Maity.</p>
    </div>
  </footer>
</body>
</html>
