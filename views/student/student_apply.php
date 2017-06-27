<?php
    include_once('views/student/student_dashboard.php');
?>

  <main class="mdl-layout__content mdl-color--grey-100">
    <div class="page-content">
    <!-- Your content goes here -->

<!-- Wide card with share menu button -->
<?php

        if ( !empty($_POST['elective'])) {

          $elective = $_POST['type'];
          
          switch ($elective) {
            case 'open_elective':
            $elective = "Open Elective";
             break;

            case 'dept_elective':
            $elective = "Departmental Elective";
            break;

            case 'pg_elective':
            $elective = "PG Elective";
            break;            
          }

      ?>
    <div class="mdl-cell mdl-cell--6-col">
    <form class="admlog" action="/student/profile/apply" method="post">
    <h1 class="dept">Apply for <?php echo $elective; ?></h1>
    
    <center>
    <select name="subj" required>
      <option selected="true" disabled="disabled">Select  the course....</option>
      <?php 
              //fetching subjects of same department from subjects master
              //Database::departmentelectivesubjects($_SESSION['login_user'],$_POST['type']);
      ?>
    </select></center> <br><br>
    <input placeholder="Total Seats" name="seats" type="number" required>
    <input placeholder="Syllabus link" name="link" type="link" required>
    <input placeholder="Semester" name="sem" type="number" required>
    <center>
    <textarea placeholder="Additional info : eg. Professors name who is taking the course, Prerequisites, etc." name="info" cols="40" rows="5" pattern="{1,1000}" required></textarea>
    <br>
    <code style="color: red;">Elective once published can't be unpublished.</code><code style="color: blue;"> Although can be updated.</code></center><br>
    <button name="pubelec" value="pubelec" class="login" type="submit">Publish Elective</button>
        </form>
</div>

      <?php
      }
?>


    </div>
  </div>
  </main>
</div>

    <script src="../../views/design/js/material.min.js"></script>
    <script src="../../views/design/js/style.js"></script>
  </body>
</html>