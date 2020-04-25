<?php
error_reporting(0);


$title = "ARTS";
$address = "testpage.html";
$randomizequestions ="yes";
$a = array(
1 => array(
      0 => "Are you a good listener and interpreter?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
2 => array(
      0 => "Are you someone who can make friends with different kinds of people (interactive person)?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
3 => array(
      0 => "Do you want to learn and improve in various language skills?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
4 => array(
      0 => "Are you interested in reading articles on literature and novels?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
5 => array(
      0 => "Can you carry out or be an active member of social and cultural events?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
6 => array(
      0 => "Are you interested in psychology?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
7 => array(
      0 => "Would you pursue a career in writing articles and reports?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
8 => array(
      0 => "Are you interested in philosophy?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
9 => array(
      0 => "Do you have stage fear or hesitation in speaking in public?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 2
),
10 => array(
      0 => "Would you pursue a career in teaching?",
      1 => "yes",
      2 => "no",
      3 => "maybe",
      6 => 1
),
11 => array(
   0 => "Who is known as the Father of English Poetry?",
   1 => "John Banville",
   2 => "Geoffrey Chaucer",
   3 => "Ruskin Bond",
   4 => "None of the above",
   6 => 2
),
12 => array(
   0 => "The Jungle Book was written by",
   1 => "J K Rowling",
   2 => "Roald Dahl",
   3 => "Rudyard Kipling",
   4 => "James Charles",
   6 => 3
),
13 => array(
   0 => "What is the correct spelling?",
   1 => "impermisible",
   2 => "impermissible",
   3 => "impermisibble",
   4 => "impermissable",
   6 => 2
),
14 => array(
   0 => "The Kumbh Mela is held after every ",
   1 => "10 years",
   2 => "14 years",
   3 => "15 years",
   4 => "12 years",
   6 => 4
),
15 => array(
   0 => "The book 'Ace Against Odds' is an autobiography of",
   1 => "Sania Nehwal",
   2 => "Geeta Kumari Phogat",
   3 => "Sania Mirza",
   4 => "Mary Kom",
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
   0 => "Which of the following is not an aspect of verbal communication?",
   1 => "Grammar",
   2 => "Language",
   3 => "Body movements",
   4 => "Tone",
   6 => 3
),
18 => array(
   0 => "Who is the author of the recently published book 'The Kiss Of Life'?",
   1 => "Ayushmann Khurana",
   2 => "Anupam Kher",
   3 => "Emraan Hashmi",
   4 => "Karan Johar",
   6 => 3
),
19 => array(
   0 => "What is the appropriate art term for color?",
   1 => "Hue",
   2 => "Paint",
   3 => "Saturation",
   4 => "Color",
   6 => 1
),
20 => array(
   0 => "Who painted the Mona Lisa?",
   1 => "Vincent Van",
   2 => "Leonardo Da Vinci",
   3 => "Jeefries",
   4 => "Posada ",
   6 => 2
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
<!--
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
// -->
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

<BR> 1.<INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR> 2.<INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR> 3.<INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR> 4.<INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR> 5.<INPUT TYPE=radio style="width:15px; height:15px;" NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>


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
