<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('Student.php');

        $students = array();
        
        /* Student #1 */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        /* Student #2 */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /* Student #3 */
        $third = new Student();
        $third ->surname = "Dionglay";
        $third ->first_name = "Renz";
        $third ->add_email('home','renz-dionglay@hotmail.com');
        $third ->add_email('work1','rdionglay@bcit.ca');
        $third ->add_email('work2','renz@physics.mit.edu');
        $third ->add_grade(70);
        $third ->add_grade(71);
        $third ->add_grade(72);
        $students['a567'] = $third;
        
        /* Displays all the added students */
        foreach($students as $student)
            echo $student->toString();

        ?>
    </body>
</html>