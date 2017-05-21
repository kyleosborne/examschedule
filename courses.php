<!--Kyle Osborne homepage of course selection-->
<!DOCTYPE html>
<html>
    <head>
        <title>My Exam Timetable</title>
        <meta charset="utf-8" />

        <!-- Links to provided files.  Do not change these links -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src='myexams.js' type="text/javascript"></script>

        <!-- Link to your CSS file that you should edit -->
        <link href="exams.css" type="text/css" rel="stylesheet"/>
    </head>

    <body>
        <div id="frame">
            <header>  <!-- new HTML5 page-section structure element -->
<h2>UTSC Winter 2017 Final Exam Timetable</h2>            
            </header>

            <div id="main">
            <table>
                <tr>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Instructor</th>
                    <th>Date</th>
                    <th>Start</th>
                    <th>End</th>
                </tr>
            </table>
            <div class="search">
            <form id = 'form' action="exams.php" method="GET">
                Course Code:
                <input type="text" name="course" id = 'course'>
            <select id = 'menu'>
                <option>Select Course</option>
            </select>    
            <input type="submit"/>
            </form>
            
            </div>
            <div class="logo">
                <img src="logo.png">
            </div>
            </div>
        </div>
    </body>
</html>
