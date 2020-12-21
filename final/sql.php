<?php
include 'main_structure/top.php';
?>
<main>
<h3>create Table</h3>
<pre>
CREATE TABLE tblExerciseInfo(
    pmkListExercise INT AUTO_INCREMENT PRIMARY KEY,
    fldPart VARCHAR(10),
    fldExercise VARCHAR(20),
    fldExercisID VARCHAR(20)
)
CREATE TABLE tblExerciseSteps(
    pmkStepsID VARCHAR(10),
    fldOrder INT,
    fldExercise VARCHAR(40),
    fldStepsExplain VARCHAR(200),
    fldPart VARCHAR(10)
)
CREATE TABLE tblPersonalExercise(
    pmkNumberData INT AUTO_INCREMENT PRIMARY KEY,
    fldPersonalID VARCHAR(10),
    fldExerciseName VARCHAR(20),
    fldExerciseRepsPerSet INT,
    fldSetRepeat INT,
    fldDate DATE,
    fldPart VARCHAR(10),
    fldWeight DOUBLE
)
CREATE TABLE tblPersonalInfo(
    pmkPersonalID VARCHAR(10),
    fldFirstName VARCHAR(15),
    fldLastName VARCHAR(15),
    fldEmail VARCHAR(100),
    fldBirthday DATE
)
<pre>
    <h3>tblExerciseInfo</h3>
INSERT INTO tblExerciseInfo (fldPart, fldExercise, fldExercisID) VALUES 
('Legs', 'Leg Press','LegPress'), 
('Legs', 'Leg Extension', 'LegExtension'), 
('Legs', 'Squats', 'Squats'), 
('Back', 'DeadLift', 'DeadLift'),
('Back', 'Dumbbell Row', 'DumbbellRow'), 
('Back', 'Pull-up','PullUp'), 
('Chest', 'Bench Press', 'BenchPress'), 
('Chest','Push-up', 'PushUp'), 
('Chest', 'Incline Bench Press','InclineBenchPress')

</pre>
</pre>
    <h3>routine.php?display_routine=Legs => legs exercise routine</h3>
<pre>
INSERT INTO tblExerciseSteps (pmkStepsID, fldOrder, fldExercise,fldStepsExplain, fldPart) VALUES 
('lLE1', '1', 'Leg Extension', 'Sit on a leg extension machine. Position your legs under the pad and grasp the side bars with your hands', 'Legs'), 
('lLE2', '2', 'Leg Extension','Extend your legs to the maximum, exhaling as you do so', 'Legs'),
('lLE3', '3', 'Leg Extension', 'Lower the weight back to the original position as you inhale', 'Legs'), 
('lLES', '4', 'Leg Extension','https://www.verywellfit.com/leg-extensions-benefit-or-risk-3498573','Legs'), 
('lLP1', '1', 'Leg Press', 'Sit on the machine with your back and head resting comfortably against the padded support', 'Legs'),
('lLP2', '2', 'Leg Press', 'Place your feet on the footplate about hip-width apart while ensuring that your heels are flat', 'Legs'), 
('lLP3','3', 'Leg Press', 'Your bottom should be flat against the seat rather than raised', 'Legs'), 
('lLP4', '4', 'Leg Press', 'Legs should form an angle of about 90 degrees at the knees', 'Legs'), 
('lLPS', '5', 'Leg Press', 'https://www.exercise.com/exercises/leg-press', 'Legs'), 
('lS1','1', 'Squats', 'Stand straight with feet hip-width apart', 'Legs'),
('lS2', '2', 'Squats', 'Tighten your stomach muscles', 'Legs'), 
('lS3','3', 'Squats', 'Lower down, as if sitting in an invisible chair','Legs'), 
('lS4', '4', 'Squats', ' Straighten your legs to lift back up.', 'Legs'), 
('lSS', '5', 'Squats','https://www.realsimple.com/health/fitness-exercise/workouts/squat-form', 'Legs')

</pre>
<h3>routine.php?display_routine=Chest => chest exercise routine</h3>
<pre>
INSERT INTO tblExerciseSteps (pmkStepsID, fldOrder, fldExercise,fldStepsExplain, fldPart) VALUES 
('cBP1', '1', 'Bench Press', 'Lie Down. Sit at the end of your flat bench first.', 'Chest'), 
('cBP2', '2','Bench Press', 'Squeeze Your Shoulder-blades. Raise your chest and tighten your upper-back', 'Chest'), 
('cBP3', '3', 'Bench Press', 'Grab the Bar. Pinky inside the ring marks.', 'Chest'), 
('cBP4', '4', 'Bench Press', 'Set Your Feet. Feet flat on the floor using a shoulder-width stance', 'Chest'), 
('cBPS', '5', 'Bench Press','https://stronglifts.com/bench-press/', 'Chest'), 
('cIBP1', '1','Incline Bench Press', 'Lie on incline bench', 'Chest'), 
('cIBP2', '2','Incline Bench Press', 'Dismount barbell from rack over upper chest','Chest'), 
('cIBP3', '3', 'Incline Bench Press', 'Press bar until arms are extended.
', 'Chest'), 
('cIBPS','4', 'Incline Bench Press','https://exrx.net/WeightExercises/PectoralClavicular/BBInclineBenchPress','Chest'), 
('cPU1', '1', 'Push-up', 'place your hands slightly wider than your shoulders.', 'Chest'), ('cPU2', '2', 'Push-up', 'Straighten your arms and legs.', 'Chest'), 
('cPU3', '3', 'Push-up', 'Lower your body until your chest nearly touches the floor.', 'Chest'), 
('cPU4', '4','Push-up', 'Pause, then push yourself back up, and repeat.', 'Chest'),
('cPUS', '5', 'Push-up','https://www.nytimes.com/guides/well/activity/how-to-do-a-pushup','Chest')
</pre>
<h3>routine.php?display_routine=Back => back exercise routine</h3>
<pre>
INSERT INTO tblExerciseSteps (pmkStepsID, fldOrder, fldExercise,fldStepsExplain, fldPart) VALUES 
('bDL1', '1', 'DeadLift', 'Stand with your mid-foot under the bar.', 'Back'), 
('bDL2', '2', 'DeadLift','Grab the bar. Bend over without bending your legs.', 'Back'), 
('bDL3','3', 'DeadLift', 'Bend your knees. Drop into position by bending your knees until your shins touch the bar.', 'Back'), 
('bDL4', '4','DeadLift', 'Lift your chest. Straighten your back by raising you chest.', 'Back'), 
('bDLS', '5', 'DeadLift','https://stronglifts.com/deadlift/', 'Back'), 
('bDR1', '1', 'Dumbbell Row', 'Bring the dumbbell up to your chest.', 'Back'), 
('bDR2', '2','Dumbbell Row', 'Keep your chest still as you lift.', 'Back'), 
('bDR3','3', 'Dumbbell Row', 'At the top of the movement, squeeze your shoulder and back muscles.', 'Back'), 
('bDR4', '4', 'Dumbbell Row', 'Lower the dumbbell slowly until your arm is fully extended again.', 'Back'),
('bDRS', '5', 'Dumbbell Row', 'https://www.coachmag.co.uk/dumbbell-exercises/7380/how-to-do-the-one-arm-dumbbell-row', 'Back'), 
('bPU1','1', 'Pull-up', 'Grip the bar about shoulder-width apart.', 'Back'),
('bPU2', '2', 'Pull-up', 'Raise your feet off the floor by bending your knees.', 'Back'), 
('bPU3', '3', 'Pull-up', 'Pull yourself up by pulling your elbows down to the floor.', 'Back'), 
('bPU4', '4', 'Pull-up', 'Pull yourself all the way up until your chin passes the bar. ', 'Back'),
('bPUS', '5', 'Pull-up', 'https://stronglifts.com/pullups/', 'Back')
</pre>
<pre>
    <h3>used in PHP</h3>
SELECT fldPart FROM tblExerciseInfo GROUP BY fldPart
SELECT pmkPersonalID FROM tblPersonalInfo WHERE pmkPersonalID = ?;
SELECT fldExerciseName, fldExerciseRepsPerSet, fldSetRepeat,fldWeight, fldDate, fldPart
        FROM tblPersonalExercise
        WHERE fldPersonalID = ? AND fldDate >= ? AND fldDate <= ? AND fldPart = ? ORDER BY fldDate DESC
SELECT fldExercise, fldExercisID FROM tblExerciseInfo WHERE fldPart= ?;
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldExerciseRepsPerSet, fldSetRepeat, fldDate, fldPart, fldWeight) VALUES (?,?,?,?,?,?,?)
INSERT INTO tblPersonalInfo(pmkPersonalID,fldFirstName,fldLastName,fldEmail,fldBirthday)VALUES (?, ?, ?, ?, ?)
            
</pre>
<pre>
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",20,4,"2020-11-1", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",2,4,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",2,1,"2020-11-3", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Dumbbell Row", "Back",14,5,"2020-11-4",106.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",17,5,"2020-11-5",109.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Extension", "Legs",5,2,"2020-11-6",111.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Press", "Legs",7,2,"2020-11-7",113.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Extension", "Legs",1,3,"2020-11-8",116.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",2,2,"2020-11-9", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Extension", "Legs",11,2,"2020-11-10",120.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",6,1,"2020-11-11", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",19,1,"2020-11-12", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",10,4,"2020-11-13",127.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",20,3,"2020-11-14",129.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",10,4,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",15,1,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Extension", "Legs",7,3,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Press", "Legs",15,3,"2020-11-18",139.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Dumbbell Row", "Back",10,1,"2020-11-19",141.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",1,2,"2020-11-20",143.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",7,2,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",6,1,"2020-11-22",148.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",6,4,"2020-11-23",150.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",13,3,"2020-11-24",152.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",6,5,"2020-11-25",155.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",10,3,"2020-11-26",157.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",1,4,"2020-11-27",159.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",8,2,"2020-11-28",162.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",16,4,"2020-11-29",164.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",5,5,"2020-11-30",166.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",1,2,"2020-11-1",400)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",3,2,"2020-11-2",402.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",3,1,"2020-11-3",404.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",10,1,"2020-11-4",406.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",5,3,"2020-11-5",409.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",14,4,"2020-11-6",411.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",9,3,"2020-11-7",413.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Push-up", "Chest",10,4,"2020-11-8", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",5,4,"2020-11-9",418.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",6,4,"2020-11-10",420.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",9,1,"2020-11-11",423.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",18,3,"2020-11-12",425.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Push-up", "Chest",5,3,"2020-11-13", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",14,4,"2020-11-14",429.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",12,3,"2020-11-15",432.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",18,2,"2020-11-16",434.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",5,1,"2020-11-17",436.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",11,3,"2020-11-18",439.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",2,5,"2020-11-19",441.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",18,5,"2020-11-20",443.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",5,4,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Dumbbell Row", "Back",2,2,"2020-11-22",448.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",10,1,"2020-11-23",450.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",6,1,"2020-11-24",452.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Push-up", "Chest",7,4,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Dumbbell Row", "Back",16,3,"2020-11-26",457.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Press", "Legs",5,4,"2020-11-27",459.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",1,2,"2020-11-28",462.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",11,4,"2020-11-29",464.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",19,2,"2020-11-30",466.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Press", "Legs",8,5,"2020-11-1",200)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",14,1,"2020-11-2",202.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",9,1,"2020-11-3",204.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",16,1,"2020-11-4", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",17,2,"2020-11-5",209.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",7,5,"2020-11-6",211.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",2,1,"2020-11-7", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",10,2,"2020-11-8",216.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Press", "Legs",7,5,"2020-11-9",218.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",5,2,"2020-11-10",220.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",3,1,"2020-11-11",223.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","DeadLift", "Back",13,4,"2020-11-12",225.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",6,1,"2020-11-13", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",20,4,"2020-11-14",229.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Extension", "Legs",5,4,"2020-11-15",232.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",14,2,"2020-11-16",234.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","DeadLift", "Back",11,4,"2020-11-17",236.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",9,5,"2020-11-18",239.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",8,3,"2020-11-19", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",4,5,"2020-11-20",243.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",2,1,"2020-11-21",246.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Extension", "Legs",5,1,"2020-11-22",248.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Extension", "Legs",8,2,"2020-11-23",250.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",11,5,"2020-11-24", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",6,3,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","DeadLift", "Back",12,3,"2020-11-26",257.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Press", "Legs",5,4,"2020-11-27",259.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",19,2,"2020-11-28",262.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","DeadLift", "Back",20,1,"2020-11-29",264.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Extension", "Legs",17,4,"2020-11-30",266.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",15,1,"2020-11-1",250)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",18,4,"2020-11-2",252.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",9,5,"2020-11-3",254.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",4,5,"2020-11-4",256.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",18,3,"2020-11-5",259.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",4,1,"2020-11-6",261.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",12,1,"2020-11-7",263.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Squats", "Legs",13,4,"2020-11-8",266.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",2,4,"2020-11-9",268.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Pull-up", "Back",12,3,"2020-11-10", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Pull-up", "Back",1,5,"2020-11-11", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",19,4,"2020-11-12",275.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",9,1,"2020-11-13",277.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",20,5,"2020-11-14", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",16,1,"2020-11-15",282.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",6,1,"2020-11-16", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",14,5,"2020-11-17",286.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",6,2,"2020-11-18",289.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",7,4,"2020-11-19",291.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",4,1,"2020-11-20",293.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",19,1,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",6,4,"2020-11-22",298.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",9,2,"2020-11-23",300.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",19,2,"2020-11-24",302.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",10,1,"2020-11-25",305.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",8,1,"2020-11-26",307.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",16,3,"2020-11-27",309.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Squats", "Legs",7,2,"2020-11-28",312.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Squats", "Legs",15,5,"2020-11-29",314.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",16,1,"2020-11-30", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Push-up", "Chest",18,2,"2020-11-1", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",9,3,"2020-11-2",432.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Incline Bench Press", "Chest",12,5,"2020-11-3",434.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",15,1,"2020-11-4",436.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Pull-up", "Back",4,2,"2020-11-5", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",5,2,"2020-11-6",441.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",13,5,"2020-11-7",443.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",1,4,"2020-11-8",446.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",12,2,"2020-11-9",448.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Pull-up", "Back",17,5,"2020-11-10", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",6,4,"2020-11-11",453.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Pull-up", "Back",13,1,"2020-11-12", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",2,4,"2020-11-13",457.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Pull-up", "Back",9,5,"2020-11-14", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",8,1,"2020-11-15",462.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",17,1,"2020-11-16",464.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",5,5,"2020-11-17",466.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",16,5,"2020-11-18",469.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",3,2,"2020-11-19",471.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",13,4,"2020-11-20",473.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",4,5,"2020-11-21",476.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",9,3,"2020-11-22",478.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",12,4,"2020-11-23",480.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",4,2,"2020-11-24",482.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",2,3,"2020-11-25",485.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",16,1,"2020-11-26",487.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Squats", "Legs",8,3,"2020-11-27",489.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Squats", "Legs",19,1,"2020-11-28",492.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",13,3,"2020-11-29",494.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",19,5,"2020-11-30",496.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",4,1,"2020-11-1",250)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Extension", "Legs",6,2,"2020-11-2",252.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Extension", "Legs",4,3,"2020-11-3",254.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",6,1,"2020-11-4",256.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Squats", "Legs",13,4,"2020-11-5",259.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",19,4,"2020-11-6",261.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Squats", "Legs",20,5,"2020-11-7",263.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",6,1,"2020-11-8",266.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",4,3,"2020-11-9", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",9,4,"2020-11-10",270.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",13,5,"2020-11-11",273.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",12,4,"2020-11-12",275.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Bench Press", "Chest",6,4,"2020-11-13",277.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",19,2,"2020-11-14",279.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",19,2,"2020-11-15",282.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",17,5,"2020-11-16", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Push-up", "Chest",12,3,"2020-11-17", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",14,2,"2020-11-18",289.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Push-up", "Chest",12,1,"2020-11-19", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",17,3,"2020-11-20",293.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",19,4,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",17,4,"2020-11-22",298.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",9,1,"2020-11-23", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",20,3,"2020-11-24",302.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Push-up", "Chest",16,3,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",10,5,"2020-11-26",307.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Squats", "Legs",16,3,"2020-11-27",309.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",2,3,"2020-11-28",312.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Bench Press", "Chest",4,2,"2020-11-29",314.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",6,1,"2020-11-30", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Dumbbell Row", "Back",8,3,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",16,5,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",13,5,"2020-11-3",104.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",12,3,"2020-11-4",106.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","DeadLift", "Back",3,5,"2020-11-5",109.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Dumbbell Row", "Back",2,5,"2020-11-6",111.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","DeadLift", "Back",9,5,"2020-11-7",113.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",4,1,"2020-11-8",116.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",14,3,"2020-11-9",118.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",6,1,"2020-11-10",120.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",5,5,"2020-11-11",123.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",18,1,"2020-11-12",125.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",14,3,"2020-11-13",127.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",20,5,"2020-11-14",129.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",18,5,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",1,2,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Press", "Legs",11,1,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",17,4,"2020-11-18",139.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","DeadLift", "Back",11,3,"2020-11-19",141.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",1,3,"2020-11-20",143.7)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","DeadLift", "Back",10,4,"2020-11-21",146.0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Dumbbell Row", "Back",1,4,"2020-11-22",148.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",4,2,"2020-11-23",150.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",2,5,"2020-11-24",152.9)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",4,4,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Dumbbell Row", "Back",8,3,"2020-11-26",157.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",4,4,"2020-11-27",159.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",9,1,"2020-11-28",162.1)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Press", "Legs",5,4,"2020-11-29",164.4)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Push-up", "Chest",2,3,"2020-11-30", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",15,4,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",6,1,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",1,4,"2020-11-3", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Bench Press", "Chest",20,4,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Dumbbell Row", "Back",18,1,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",8,2,"2020-11-6", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",12,3,"2020-11-7",113.79999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Pull-up", "Back",12,2,"2020-11-8", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",16,1,"2020-11-9", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Bench Press", "Chest",15,2,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",2,1,"2020-11-11",122.99999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",17,2,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",19,3,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Squats", "Legs",20,20,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Press", "Legs",8,8,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Press", "Legs",1,1,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Extension", "Legs",14,14,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Dumbbell Row", "Back",17,1,"2020-11-18",139.10000000000002)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",19,2,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",15,1,"2020-11-20",143.70000000000005)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Bench Press", "Chest",1,4,"2020-11-21",146.00000000000006)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","DeadLift", "Back",11,2,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",11,1,"2020-11-23",150.60000000000008)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",10,4,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",3,1,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Push-up", "Chest",1,2,"2020-11-26", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Bench Press", "Chest",8,1,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Incline Bench Press", "Chest",1,1,"2020-11-28",162.10000000000014)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Leg Press", "Legs",10,10,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("djm07187","Dumbbell Row", "Back",6,3,"2020-11-30",166.70000000000016)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",12,12,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",14,5,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",10,5,"2020-11-3",104.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",1,1,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",2,2,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",6,6,"2020-11-6",111.49999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Push-up", "Chest",13,2,"2020-11-7", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",14,1,"2020-11-8",116.09999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",2,3,"2020-11-9", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Dumbbell Row", "Back",2,2,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Incline Bench Press", "Chest",9,4,"2020-11-11",122.99999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",1,1,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",2,2,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",9,4,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",7,1,"2020-11-15", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Dumbbell Row", "Back",16,5,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",15,15,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",3,3,"2020-11-18", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Bench Press", "Chest",20,3,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",14,14,"2020-11-20",143.70000000000005)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",10,3,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Squats", "Legs",12,12,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",9,3,"2020-11-23", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Push-up", "Chest",14,2,"2020-11-24", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","DeadLift", "Back",15,5,"2020-11-25",155.2000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Extension", "Legs",16,16,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",1,3,"2020-11-27", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",10,4,"2020-11-28", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Leg Press", "Legs",16,16,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("halabala","Pull-up", "Back",15,4,"2020-11-30", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",8,1,"2020-11-1", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",11,5,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",3,3,"2020-11-3",104.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","DeadLift", "Back",19,5,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",11,3,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",5,3,"2020-11-6", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",4,5,"2020-11-7",113.79999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Press", "Legs",18,18,"2020-11-8",116.09999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",2,5,"2020-11-9",118.39999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",5,1,"2020-11-10", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",11,4,"2020-11-11", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",7,2,"2020-11-12", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",19,1,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",18,18,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",5,2,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",16,4,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",20,4,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",14,1,"2020-11-18",139.10000000000002)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Pull-up", "Back",15,3,"2020-11-19", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",8,3,"2020-11-20",143.70000000000005)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Dumbbell Row", "Back",12,3,"2020-11-21",146.00000000000006)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Press", "Legs",11,11,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",15,2,"2020-11-23",150.60000000000008)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",8,8,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Leg Extension", "Legs",14,14,"2020-11-25",155.2000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Incline Bench Press", "Chest",15,5,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",4,3,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Push-up", "Chest",14,4,"2020-11-28", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Bench Press", "Chest",5,5,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hpballoon","Squats", "Legs",2,2,"2020-11-30",166.70000000000016)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",3,5,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",4,4,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",11,11,"2020-11-3",104.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",13,4,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",11,2,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",12,12,"2020-11-6",111.49999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",10,2,"2020-11-7",113.79999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",8,3,"2020-11-8",116.09999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",16,5,"2020-11-9",118.39999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",7,7,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Pull-up", "Back",3,4,"2020-11-11", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",1,1,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",17,1,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Extension", "Legs",7,7,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",8,5,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",7,5,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",20,4,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Pull-up", "Back",4,3,"2020-11-18", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",11,1,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",20,5,"2020-11-20", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Squats", "Legs",15,15,"2020-11-21",146.00000000000006)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","DeadLift", "Back",3,1,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Incline Bench Press", "Chest",9,5,"2020-11-23",150.60000000000008)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",3,3,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Leg Press", "Legs",18,18,"2020-11-25",155.2000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Bench Press", "Chest",16,3,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Dumbbell Row", "Back",8,1,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Pull-up", "Back",19,4,"2020-11-28", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Push-up", "Chest",2,1,"2020-11-29", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("hwasungin","Squats", "Legs",12,12,"2020-11-30",166.70000000000016)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",15,4,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Dumbbell Row", "Back",19,3,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",8,4,"2020-11-3",104.6)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",3,3,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",18,18,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",2,2,"2020-11-6",111.49999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",17,4,"2020-11-7",113.79999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Pull-up", "Back",14,1,"2020-11-8", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",15,2,"2020-11-9",118.39999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Squats", "Legs",13,13,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Incline Bench Press", "Chest",18,3,"2020-11-11",122.99999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Incline Bench Press", "Chest",2,5,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Incline Bench Press", "Chest",20,5,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",3,3,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",20,5,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Squats", "Legs",10,10,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Push-up", "Chest",5,1,"2020-11-17", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",14,4,"2020-11-18",139.10000000000002)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",15,15,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",11,3,"2020-11-20",143.70000000000005)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Squats", "Legs",20,20,"2020-11-21",146.00000000000006)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",19,5,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",2,1,"2020-11-23",150.60000000000008)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",20,2,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",8,1,"2020-11-25",155.2000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",11,11,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","DeadLift", "Back",19,5,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Bench Press", "Chest",4,4,"2020-11-28",162.10000000000014)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Extension", "Legs",4,4,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("jhs9104","Leg Press", "Legs",8,8,"2020-11-30",166.70000000000016)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",19,19,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Bench Press", "Chest",7,1,"2020-11-2",102.3)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",15,4,"2020-11-3", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Squats", "Legs",12,12,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",3,3,"2020-11-5",109.19999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",6,3,"2020-11-6",111.49999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",13,3,"2020-11-7", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",15,3,"2020-11-8", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Bench Press", "Chest",17,3,"2020-11-9",118.39999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",14,5,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",16,1,"2020-11-11",122.99999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",19,19,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Extension", "Legs",20,20,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",4,4,"2020-11-14",129.89999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",10,10,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",18,4,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",17,17,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",14,1,"2020-11-18", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",17,2,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Bench Press", "Chest",9,5,"2020-11-20",143.70000000000005)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Pull-up", "Back",3,2,"2020-11-21", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","DeadLift", "Back",8,1,"2020-11-22",148.30000000000007)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Push-up", "Chest",19,3,"2020-11-23", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",5,2,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Push-up", "Chest",3,2,"2020-11-25", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Extension", "Legs",13,13,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",12,3,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Incline Bench Press", "Chest",13,3,"2020-11-28",162.10000000000014)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Leg Press", "Legs",13,13,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("kimgimoo","Dumbbell Row", "Back",16,5,"2020-11-30",166.70000000000016)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Press", "Legs",2,2,"2020-11-1",100)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",18,4,"2020-11-2", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Push-up", "Chest",14,5,"2020-11-3", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",19,19,"2020-11-4",106.89999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",6,4,"2020-11-5", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",13,4,"2020-11-6",111.49999999999999)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",13,2,"2020-11-7",113.79999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",4,2,"2020-11-8",116.09999999999998)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",3,2,"2020-11-9", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",15,15,"2020-11-10",120.69999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Push-up", "Chest",11,2,"2020-11-11", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","DeadLift", "Back",15,2,"2020-11-12",125.29999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",1,5,"2020-11-13",127.59999999999997)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Push-up", "Chest",3,4,"2020-11-14", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Bench Press", "Chest",9,2,"2020-11-15",132.2)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",6,6,"2020-11-16",134.5)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",13,13,"2020-11-17",136.8)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",3,2,"2020-11-18", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",8,8,"2020-11-19",141.40000000000003)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",5,2,"2020-11-20", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",12,12,"2020-11-21",146.00000000000006)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Pull-up", "Back",20,1,"2020-11-22", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Push-up", "Chest",3,1,"2020-11-23", 0)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Incline Bench Press", "Chest",15,1,"2020-11-24",152.9000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",12,12,"2020-11-25",155.2000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",20,20,"2020-11-26",157.5000000000001)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Leg Extension", "Legs",10,10,"2020-11-27",159.80000000000013)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",14,14,"2020-11-28",162.10000000000014)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",11,11,"2020-11-29",164.40000000000015)
INSERT INTO tblPersonalExercise (fldPersonalID, fldExerciseName, fldPart, fldExerciseRepsPerSet,fldSetRepeat,fldDate,fldWeight) VALUES ("reallhoney","Squats", "Legs",11,11,"2020-11-30",166.70000000000016)
</pre>
</main>
<?php
include 'main_structure/footer.php';
?>
</body>
</html>
