
<div id="container">
    <h3>Project Sign Up</h3>
    <p>There are a limited number of spots for each project. The projects will be filled on a first come first serve basis</p>

    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <h3>Project 1</h3>
            <p>This project is abbout soemthing to do with web development
                and this is just a test testsgfagfSFS </p>
            <?php
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT firstName, lastName FROM entries WHERE project='1'";
            $st = $conn->prepare( $sql );
            $st->execute();
            echo '<table style="width:20%"><th>Current Team</th>';
            while($row = $st->fetch()) {
                echo '<tr><td>'.$row["firstName"].'</td><td>'.$row["lastName"].'</td></tr>';
            }
            echo '</table>';
            ?>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <h3>Project 2</h3>
            <p>This project is abbout soemthing to do with web development
                and this is just a test for lADFGADFGDFAG </p>
            <?php
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT firstName, lastName FROM entries WHERE project='2'";
            $st = $conn->prepare( $sql );
            $st->execute();
            echo '<table style="width:20%">';
            while($row = $st->fetch()) {
                echo '<tr><td>'.$row["firstName"].'</td><td>'.$row["lastName"].'</td></tr>';
            }
            echo '</table>';
            ?>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4 col-md-offset-1">
            <h3>Project 3</h3>
            <p>This project is abbout soemthing to do with web development
                and this is just a testADFGFDGADFGADFG </p>
            <?php
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT firstName, lastName FROM entries WHERE project='3'";
            $st = $conn->prepare( $sql );
            $st->execute();
            echo '<table style="width:20%">';
            while($row = $st->fetch()) {
                echo '<tr><td>'.$row["firstName"].'</td><td>'.$row["lastName"].'</td></tr>';
            }
            echo '</table>';
            ?>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <h3>Project 4</h3>
            <p>This project is abbout soemthing to do with web development
                and this is just a test forAFDGADFGADFGDFAG </p>
            <?php
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT firstName, lastName FROM entries WHERE project='4'";
            $st = $conn->prepare( $sql );
            $st->execute();
            echo '<table style="width:20%">';
            while($row = $st->fetch()) {
                echo '<tr><td>'.$row["firstName"].'</td><td>'.$row["lastName"].'</td></tr>';
            }
            echo '</table>';
            ?>
        </div>

    </div>

    <!--<div class="row">
        <div class="span12">
            <hr style="border:none;height:1px;background-color:black;color:black;">
        </div>
    </div>-->

    <form action="admin.php" method="post">

<ul>

    <li>
        <label for="project">Project Choice</label>
        <?php
            $count = 0;
            $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
            $sql = "SELECT * FROM projects";
            $st = $conn->prepare( $sql );
            $st->execute();
            $sql2 = "SELECT project FROM entries";
            $st2 = $conn->prepare( $sql2 );
            $st2->execute();
            echo "<select name='project'>";
            while($row = $st->fetch()) {
                while($space = $st2->fetch()) {
                    if($space["project"] == $row["id"]) {
                        $count++;
                    }
                }
                if($count < $row["space"]) {
                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                }
                $count = 0;
            }
            echo "</select>";
        ?>
    </li>

    <li>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" id="firstName" placeholder="First Name" required maxlength="25" />
    </li>

    <li>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" id="lastName" placeholder="Last Name" required maxlength="25" />
    </li>

    <li>
        <label for="program">Engineering Discipline / Program</label>
        <input type="text" name="program" id="program" placeholder="Program" required maxlength="25" />
    </li>

    <li>
        <label for="year">Year of Study</label>
        <input type="text" name="year" id="year" placeholder="Year" required maxlength="5" />
    </li>

    <li>
        <label for="email">Email Address (@queensu.ca)</label>
        <input type="text" name="email" id="email" placeholder="Email" required maxlength="40" />
    </li>

    <li>
        <label for="skills">Skills / Things to learn</label>
        <textarea name="skills" id="skills" placeholder="Skills or Things you want to learn" required maxlength="255" style="height: 30em;"></textarea>
    </li>

</ul>

    <div class="buttons">
        <input type="submit" name="submit" value="submit" />

    </div>

</form>

