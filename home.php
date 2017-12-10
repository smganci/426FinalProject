<?php 
include_once "header.php";
?>

    <ul class="navigationContainer">
        <li class='navButton'><button id="homeNav">ComRad</a></li>
        <li class='navButton'><button id="taskNav">My Tasks</li>
        <li class='navButton'><button id="projectsNav">My Projects</li>
        <li class='navButton'><button id="groupsNav">My Groups</li>
    </ul>

    <?php
                if(isset($_SESSION['username'])){
                    echo "<h1> Welcome, ".$_SESSION['first_name']."</h1>";
                }
     ?>

    <h2 id='subtitle'>Delegate tasks and keep your group members accountable!</h2>

    <div class="widgetBoard">
    <!--WIDGETS-->
        <div id="projectsWidget">
            <div class="widgetHeader" id="createProject">
                <!-- new code below -->
                <form action="includes/createProject.php" method="POST"> 

                   Project Name: <input type="text" name="project_name" placeholder="project name"> 
                   <br/>
                   Project Password: <input type="text" name="project_password" placeholder="project password">
                   <br/>
                   Project Description: <input type="text" name="project_description" placeholder="description">
                   <br/>
                    <button type="submit" name="submit">Create Project</button>       
                    <br/>           
                </form>

                <form action="includes/joinProject.php" method="POST"> 

                   Project Name: <input type="text" name="project_name" placeholder="project name"> 
                   <br/>
                   Project Password: <input type="text" name="project_password" placeholder="project password">
                   <br/>
                    <button type="submit" name="submit">Join Project</button>       
                    <br/>           
                </form>

                


            </div>

            <table>
                <tr>
                    <td>My Groups:</td>
                </tr>
                
                <tr>
                    <td>Group 1 goes here</td>
                </tr>
            </table>
        </div>

        <div id="projectsWidget">
            <table>
                <tr>
                    <td>My Projects:</td>
                </tr>
                <tr>
                    <td>Project 1 goes here</td>
                </tr>
            </table>
        </div>

        <div id="tasksWidget">
            <table>
                <tr>
                    <td>My Tasks:</td>
                </tr>
                <tr>
                    <td>Task 1 goes here</td>
                </tr>
            </table>
        </div>

    </div>


<?php
    include_once "footer.php";

?>
