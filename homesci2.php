<?php
error_reporting(0);


$title = "HOME SCIENCE";
$address = "testpage.html";
$randomizequestions ="yes";

$a = array(
1 => array(
      0 => "Are you interested in learning about food products?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
2 => array(
      0 => "Are you interested in making various food products?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
3 => array(
      0 => "Do you want to learn about tailoring and embroidering?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
4 => array(
      0 => "Would you pursue sales and promotion of food items?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
5 => array(
      0 => "Are you keen in artistic visualization and creativity?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
6 => array(
      0 => "Do you wish to step in the fasion industry and pursue fashion designing/textile business?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
7 => array(
      0 => "Are you interested in health and diet related assessment?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
8 => array(
      0 => "Would you work for various welfare organisations?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
9 => array(
      0 => "Do you want to become a nutritionist?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
10 => array(
      0 => "Do you want to learn about the fundamentals of nutrition and food?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
11 => array(
   0 => "The list of Human Values was given by ______",
   1 => "Denmann J. Ross",
   2 => "Ernest Angel",
   3 => "Parker",
   4 => "Park and Park",
   6 => 3
),
12 => array(
   0 => "One pound is equal to how many calories?",
   1 => "3,200",
   2 => "3,500",
   3 => "3,100",
   4 => "3,000",
   6 => 2
),
13 => array(
   0 => "Study of interaction between machine and people is called _________",
   1 => "Economics",
   2 => "Ergonomics",
   3 => "Endonomics",
   4 => "Esconomics",
   6 => 2
),
14 => array(
   0 => "'Distrust' between a sender and a receiver is a ________ barrier",
   1 => "mechanical",
   2 => "socio-physiological ",
   3 => "language barrier",
   4 => "organisation",
   6 => 2
),
15 => array(
   0 => "Which of the following isn't an embroidery stitch?",
   1 => "Satin",
   2 => "Back ",
   3 => "Dabka",
   4 => "Knot ",
   6 => 3
),
16 => array(
   0 => "Which of the following is not an aspect of non-verbal communication?",
   1 => "Facial expressions",
   2 => "Eye contact",
   3 => "Proxemics",
   4 => "Vocabulary",
   6 => 4
),
17 => array(
   0 => "Which items provide maximum protein?",
   1 => "Fish and steak",
   2 => "Beans and rice",
   3 => "Eggs",
   4 => "All of the above",
   6 => 4
),
18 => array(
   0 => "Arthritis is _____________________________",
   1 => "enlarged bones",
   2 => "muscle inflammation",
   3 => "arthur's disease",
   4 => "joint inflammation",
   6 => 4
),
19 => array(
   0 => "Proteins are important because ______________",
   1 => "they improve clarity",
   2 => "they build muscles and RBC's",
   3 => "they give energy",
   4 => "they give endurance",
   6 => 2
),
20 => array(
   0 => "What is osteoporosis?",
   1 => "low bone mass",
   2 => "obesity",
   3 => "small body frame",
   4 => "cancer",
   6 => 1
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }

$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>
<LINK rel="stylesheet" href="testpapers.css">
<SCRIPT LANGUAGE='JavaScript'>

function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
}

</SCRIPT>

</HEAD>
<BODY BGCOLOR=FFFFFF>

<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR><input type=submit style="height: 30px; width: 100px;" value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>

<BR> 1. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR> 2. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR> 3. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR> 4. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR> 5. <INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
<!-- The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
<p><A HREF="<?php print $address; ?>">Home Page</a> -->
<?php 

include 'certificate.php';
?>
<p><A HREF="<?php print $address; ?>"><input type=submit style="height:50px; width: 250px; background-color: #4CAF50; border-radius:20px; font-size: 20px;"value="Return to test"></a> 
<?php
}?>
</TD></TR>
</TABLE>

</CENTER>
</BODY>
</HTML>
