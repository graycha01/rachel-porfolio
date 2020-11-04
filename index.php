    <?php
        include('layout/header.php');
    ?>

    
    <div id="heroarea">
      <h1>Welcome</h1>
    </div>

    <div id="mainContentWrapper">
      <!-- About Me -->
      <div id="aboutMe" class="separateDiv">
        <div>
        <h1 class="sectionHeadings">All About Me</h1>
        </div>
        <div id="aboutMeParagraphs">
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quibusdam veritatis. Velit modi illum blanditiis, quasi iusto eligendi veniam pariatur, nobis nulla vitae repudiandae ipsa temporibus expedita unde. Voluptates ab adipisci officiis ratione ullam quos earum harum autem, nulla recusandae!
        </p>
        
        <p><img src="imgs/mypicture.jpg" id="myPicture"/>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, deserunt nesciunt iusto illo expedita quisquam laborum saepe ad numquam. Nulla reprehenderit odio hic quod impedit obcaecati magni adipisci! Quod explicabo, veniam quidem dignissimos qui accusamus ipsa possimus eveniet nam dolore repellendus deserunt reiciendis libero, maiores amet totam, error minus vel!</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et sit sunt rerum voluptatum exercitationem fugit voluptatem pariatur voluptate magnam, assumenda dolorum excepturi saepe inventore ut adipisci labore delectus debitis. Dolor? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut doloremque, iure laborum officiis esse vitae iusto accusantium nihil est sint autem iste ea cumque impedit pariatur suscipit explicabo. Unde ducimus temporibus velit illo tempora. Vitae quibusdam itaque illum id ipsum dolore corrupti. Neque quisquam quo voluptates maxime, quasi obcaecati ullam.</p>
         </div>
      </div>

      <div style="border: 1px solid #ffaa3c"></div>

      <!-- My Portfolio -->
      <div id="myPortfolio" class="separateDiv">
        <h1 class="sectionHeadings">My Portfolio</h1>
        <div id="projectsDiv">
        <div class="myProjects" id="project1">
          <img src="imgs/project1.png" class="projectPreview" alt="" >
          <h1 class="projectTitle">Most Recent Project</h1>
        </div>
        <div class="myProjects" id="project2">
          <img src="imgs/project1.png" class="projectPreview" alt="" >
          <h1 class="projectTitle">All Projects</h1>
        </div>
      </div>
      </div>
      <div style="border: 1px solid #ffaa3c"></div>

      <!-- Contact Me -->
      <div id="contactMe" class="separateDiv">
        <div>
        <h1 class="sectionHeadings">Contact Me</h1>
          <div id="contactMeParagraph">
            <p>Please fill out this form and I'll be in touch as soon as possible.</p>
          </div>
        </div>
        <div id="confirmMsg">
          <form id="sendAMessage" action="./scripts/contactsubmission.php" method="POST">
            <input name="fullName" type="text" placeholder="Name">
            <input name="customerEmail" type="email" placeholder="Email">
            <textarea name="comment" id="contactMeMessage" cols="22" rows="10" placeholder="Message..."></textarea>
            <input type="submit" id="submitBtn" >
          </form>


        </div>
      </div>
    </div>

    <div style="border: 1px solid #ffaa3c"></div>

    <script src="js/scripts.js"></script>

    
    <?php
    include('layout/footer.php');
    ?>