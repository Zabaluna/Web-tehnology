<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://animalreader.ru/wp-content/uploads/2017/08/Sinelobyj-amazon-lat.-Amazona-aestiva-003.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>Имя</h2>
          </div>
        </div>
        <div class="w3-container">

          <?php
            $profession = "Аналитик";
            $location = "Москва, Россия";
            $email = "zabaluna@mail.ru";
            $phone = "Телефон";
            $age = 36;
          ?>

          <p>
            <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>
            Профессия <?=$profession;?>
          </p>
          <p>
            <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
            Город, страна <?php echo $location;?>
          </p>
          <p>
            <i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
            E-mail <?=$email;?>
          </p>
          <p>
            <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
            Телефон <?=$phone;?>
          </p>
          <p>
            <i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>
            Возраст в годах <?=$age;?>
          </p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <?php
            $skills = [
              "Python" => 30,
              "C#" => 10,
              "GitHub" => 50,
              "SoftSkills" => 95,
            ];
          ?>

          <?php foreach($skills as $skillName => $skillValue): ?>

            <p><?php echo $skillName;?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" 
                   style="width:<?php echo $skillValue;?>%">

                <?php echo $skillValue;?>%

              </div>
            </div>

          <?php endforeach; ?>

          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:0%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:0%"></div>
            </div>
            <p>Сербский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:50%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <?php
        $job = [
            'job_name' => ['ДАНИЭЛЬ','Холдинг-Центр','МУЗ-ТВ']
            'jib_date' => ['2008 - настоящее время','2007 - 2008','2007']
            'job_desc' => ['Финансово-аналитический отдел','Продажи','МузТв был прекрасен)))']
        ]
       ?>

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
                    <?php echo $job['job_name'][0]; ?>
                </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
               <?php echo $job['job_date'][0]; ?>
         </h6>
          <p>
                <?php echo $job['job_desc'][0]; ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
             <?php echo $job['job_name'][1]; ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              <?php echo $job['job_date'][1]; ?>
         </h6>
          <p>
              <?php echo $job['job_desc'][1]; ?>
          </p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>
              <?php echo $job['job_name'][2]; ?>
          </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              <?php echo $job['job_date'][2]; ?>
          </h6>
          <p> 
          <?php echo $job['job_desc'][2]; ?>
          </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Business and system analysis and Project manager</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>MSIU</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2004 - 2008</h6>
          <p>Master Engener</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>MSIU</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2005 - 2009</h6>
          <p>Economics and management at the enterprise</p><br>
        </div>
      </div>

      <div>
        <?php
          $mysqli = new mysqli("web_db:3306","root","111","web");
          if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
          } 
          $result = $mysqli->query("SELECT * FROM students");
          while ($row = $result->fetch_object()) {
            $group_arr[] = $row;
          }
          $mysqli->close();
        ?>

        <?php foreach ($group_arr as $student): ?>
          Имя: <?=$student->name;?> <br>
          Возраст: <?=$student->age;?> <br>
          Id: <?=$student->id;?> <br>
        <?php endforeach; ?>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
